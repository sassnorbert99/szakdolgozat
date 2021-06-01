<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
	<input type="hidden" name="id" value="<?php echo $post['id']; ?>" >
  <div class="form-group">
    <label>Tartalom</label>
    <input type="text" class="form-control" name="title" placeholder="Add title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label>Törzs</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add body"><?php echo $post['body']; ?></textarea>
  </div>
  <div class="form_group">
    <label>Kategória</label>
    <select name="category_id" class="form-control">
      <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  
  
  <button type="submit" class="btn btn-default">Feltölt</button>
</form>

