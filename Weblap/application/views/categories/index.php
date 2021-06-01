<style type="text/css">
body {
 background-image: url("https://media.giphy.com/media/UYBDCJjwOd9Re/giphy.gif");
 background-color: #cccccc;

}
.p {
  color: white;
}


.list-group-item:hover {
  background-image: url("https://media.giphy.com/media/UYBDCJjwOd9Re/giphy.gif");
 background-color: #cccccc;
}

@import 
* {
  font-family: 'Open Sans', sans-serif;
}

.h2 {
  text-align: center;
}

.ul {
  list-style-type: none;
  width: 500px;
  height: auto;
  margin: 30px auto;
}

.ul .li {
  padding: 10px 0;
  border-bottom: 1px solid #add8e6;
  text-align: center;
  transition: margin-left 0.3s linear, font-weight 0.2s linear, color 0.3s linear;
  -webkit-transition: margin-left 0.3s linear, font-weight 0.2s linear, color 0.3s linear;
  -moz-transition: margin-left 0.3s linear, font-weight 0.2s linear, color 0.3s linear;
  -o-transition: margin-left 0.3s linear, font-weight 0.2s linear, color 0.3s linear;
  -ms-transition: margin-left 0.3s linear, font-weight 0.2s linear, color 0.3s linear;
}

.ul .li:hover {
  margin-left: 20px;
  font-weight: 600;
  color: #add8e6;
}

</style>

<h2 class="h2">Kategória</h2>
<ul class="list-group ul">
<?php foreach($categories as $category) : ?>
	<li class="list-group-item li"><a class="p" href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a>
	</li>
<?php endforeach; ?>
</ul>