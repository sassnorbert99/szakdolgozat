<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Tartalom</label>
    <input type="text" class="form-control" name="title" placeholder="Cím megadása">
  </div>
  <div class="form-group">
    <label>Törzs</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Adja meg a szövegtözset"></textarea>
  </div>
  <div class="form_group">
  	<label>Kategória</label>
  	<select name="category_id" class="form-control">
  		<?php foreach($categories as $category): ?>
  			<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
  		<?php endforeach; ?>
  	</select>
  </div>
  <div class="form-group">
  	<label>Kép feltöltése</label>
  	<input type="file" class="btn btn-link" name="file" size="20">
  </div>
  <button type="submit" class="btn btn-info" name="file">Feltölt</button>
</form>