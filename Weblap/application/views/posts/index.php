<style type="text/css">
	body {
 background-image: url("https://media.giphy.com/media/UYBDCJjwOd9Re/giphy.gif");
 background-color: #cccccc;
}

*/
.li{
  text-align:center;
  display:inline-block;
  list-style:none;
  
  border:solid 12px #fff;
  background:#fff;
  box-shadow:0 0 15px 0px #555;
  transition:all 1s ease;
  -o-transition:all 1s ease;
  -moz-transition:all 1s ease;
  -webkit-transition:all 1s ease;
  top:50px;
}


.li:hover{
  top:0px;
  opacity:0.5;
}



.p{
  margin:-15px 0 0 0;
}

.light{
  border-radius:50%;
  position:absolute;
  left:0;
  right:0;
  width:700px;
  height:700px;
  background:#fff;
  filter:blur(100px);
  opacity:0.3;
  pointer-events:none;
}

.color{
	color: black;
}


/*PEN STYLES*/
* {
  box-sizing: border-box;
}

.blog-card {
  display: flex;
  flex-direction: column;
  margin: 1rem auto;
  box-shadow: 0 3px 7px -1px rgba(0, 0, 0, 0.1);
  margin-bottom: 1.6%;
  background: grey;
  line-height: 1.4;
  font-family: sans-serif;
  border-radius: 5px;
  overflow: hidden;
  z-index: 0;
}
.blog-card a {
  color: inherit;
}
.blog-card a:hover {
  color: #5ad67d;
}
.blog-card:hover .photo {
  transform: scale(1.3) rotate(3deg);
}
.blog-card .meta {
  position: relative;
  z-index: 0;
  height: 200px;
}






.blog-card .photo {
  position: relative;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-size: cover;
  background-position: center;
  transition: transform 0.2s;
}
.blog-card .details, .blog-card .details ul {
  margin: auto;
  padding: 0;
  list-style: none;
}
.blog-card .details {
  position: absolute;
  top: 0;
  bottom: 0;
  left: -100%;
  margin: auto;
  transition: left 0.2s;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  padding: 10px;
  width: 100%;
  font-size: 0.9rem;
}
.blog-card .details a {
  text-decoration: dotted underline;
}
.blog-card .details ul li {
  display: inline-block;
}
.blog-card .details .author:before {
  font-family: FontAwesome;
  margin-right: 10px;
  content: "\f007";
}
.blog-card .details .date:before {
  font-family: FontAwesome;
  margin-right: 10px;
  content: "\f133";
}
.blog-card .details .tags ul:before {
  font-family: FontAwesome;
  content: "\f02b";
  margin-right: 10px;
}
.blog-card .details .tags li {
  margin-right: 2px;
}
.blog-card .details .tags li:first-child {
  margin-left: -4px;
}
.blog-card .description {
  padding: 1rem;
  background: grey;
  position: relative;
  z-index: 1;
}
.blog-card .description h1, .blog-card .description h2 {
  font-family: Poppins, sans-serif;
}
.blog-card .description h1 {
  line-height: 1;
  margin: 0;
  font-size: 1.7rem;
}
.blog-card .description h2 {
  font-size: 1rem;
  font-weight: 300;
  text-transform: uppercase;
  color: black;
  margin-top: 5px;
}
.blog-card .description .read-more {
  text-align: right;
}

.blog-card .description .read-more a:after {
  content: "\f061";
  font-family: FontAwesome;
  margin-left: -10px;
  opacity: 0;
  vertical-align: middle;
  transition: margin 0.3s, opacity 0.3s;
}
.blog-card .description .read-more a:hover:after {
  margin-left: 5px;
  opacity: 1;
}
.blog-card p {
  position: relative;
  margin: 1rem 0 0;
}
.blog-card p:first-of-type {
  margin-top: 1.25rem;
}

.blog-card p:first-of-type:before {
  content: "";
  position: absolute;
  height: 5px;
  background: #5ad67d;
  width: 35px;
  top: -0.75rem;
  border-radius: 3px;
}
.blog-card:hover .details {
  left: 0%;
}
@media (min-width: 640px) {
  .blog-card {
    flex-direction: row;
    max-width: 700px;
  }
  .blog-card .meta {
    flex-basis: 40%;
    height: auto;
  }
  .blog-card .description {
    flex-basis: 60%;
  }
  .blog-card .description:before {
    transform: skewX(-3deg);
    content: "";
    background: grey;
    width: 30px;
    position: absolute;
    left: -10px;
    top: 0;
    bottom: 0;
    z-index: -1;
  }
  .blog-card.alt {
    flex-direction: row-reverse;
  }
  .blog-card.alt .description:before {
    left: inherit;
    right: -10px;
    transform: skew(3deg);
  }
  .blog-card.alt .details {
    padding-left: 25px;
  }
}

.h2header{
  text-align: center;
  color: grey;
}
</style>


<h2 class="h2header">Posztok</h2>
<?php if(empty($posts)):?>
  <h3 align="center">Jelenleg nincs egy poszt sem. :(</h3>
<?php endif;?>
<?php foreach($posts as $post) : ?>
  <div class="blog-card">
      <div class="meta">
        
        <div class="photo">
          <img class="post-thumb" src="<?php echo site_url(); ?>assets/images/<?php echo $post['post_image']; ?>">
          
        </div>
        <ul class="details">
          <li class="breadcrumb-item">Posztolva ekkor: <?php echo $post['created_at']; ?><p> a   <?php echo $post['name']; ?> témakörben.</li>
        </ul>
      </div>
      <div class="description">
        <h3 class="color"><?php echo $post['title']; ?></h3>
        <h2><?php echo $post['name']; ?></h2>
        <small class="breadcrumb-item active"></small><br>
        <p class="color"><?php echo word_limiter($post['body'], 60); ?></p>
      </div>
    </div>

  </div>
<?php endforeach; ?>
<div class="pagination-links">
    <?php echo $this->pagination->create_links(); ?>
</div>








