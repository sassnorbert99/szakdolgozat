function callPHP(expression, objs, afterHandler) {
        expression = expression.trim();
        var si = expression.indexOf("(");
        if (si == -1)
            expression += "()";
        else if (Object.keys(objs).length > 0) {
            var sfrom = expression.substring(si + 1);
            var se = sfrom.indexOf(")");
            var result = sfrom.substring(0, se).trim();
            if (result.length > 0) {
                var params = result.split(",");
                var theend = expression.substring(expression.length - sfrom.length + se);
                expression = expression.substring(0, si + 1);
                for (var i = 0; i < params.length; i++) {
                    var param = params[i].trim();
                    if (param in objs) {
                        var value = objs[param];
                        if (typeof value == "string")
                            value = "'" + value + "'";
                        if (typeof value != "undefined")
                            expression += value + ",";
                    }
                }
                expression = expression.substring(0, expression.length - 1) + theend;
            }
        }
        var doc = document.location;
        var phpFile = "URL of your PHP file";
        var php =
            "$docl = str_replace('/', '\\\\', '" + doc + "'); $absUrl = str_replace($docl, $_SERVER['DOCUMENT_ROOT'], str_replace('/', '\\\\', '" + phpFile + "'));" +
            "$fileName = basename($absUrl);$folder = substr($absUrl, 0, strlen($absUrl) - strlen($fileName));" +
            "set_include_path($folder);include $fileName;" + expression + ";";
        var url = doc + "/phpCompiler.php" + "?code=" + encodeURIComponent(php);
        $.ajax({
            type: 'GET',
            url: url,
            complete: function(resp){
                var response = resp.responseText;
                afterHandler(response);
            }
        });
    }