$(function() {
    $('area').each(function(){
        var name = $(this).data('name');
        var type = $(this).data('type');
        var link = $(this).attr('link');
        var href = $(this).attr('href');
        var parent = $(this).parent().attr('name');        
        var coords = $(this).attr('coords').split(',');

        if (link=='true'){
            var $span=$('<span class="map-pin">' + '<a class="badge badge-pill badge-'+type+'" href="'+href+'">'+name+'</a></span>');   
           
        }
        else{
           var $span=$('<span class="map-pin">' + '<span class="badge badge-pill badge-'+type+'" >'+name+'</span></span>');   
            
        }
        $span.css({top: coords[1]+'px', left: coords[0]+'px', position:'absolute'});
        $span.appendTo('#'+parent);
        
    })
})