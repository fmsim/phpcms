<?php
  if (isset($_POST['create_post'])) {
    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];
    $post_category_id = $_POST['post_category_id'];
    $post_status = $_POST['post_status'];
    $post_image = $_FILES['post_image']['name'];
    $post_image_temp = $_FILES['post_image']['tmp_name'];
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');
    $post_comment_count = 4;

  move_uploaded_file($post_image_temp, "../images/$post_image"); // have to use double quotes
  }
?>
<!-- The enctype attribute specifies how the form-data should be encoded when submitting it to the server.
Note: The enctype attribute can be used only if method="post". -->
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="post_title">Post Title</label>
    <input type="text" class="form-control" name="post_title">
  </div> <!-- .form-group -->
  <div class="form-group">
    <label for="post_category_id">Post Category Id</label>
    <input type="text" class="form-control" name="post_category_id">
  </div> <!-- .form-group -->
  <div class="form-group">
    <label for="post_author">Post Author</label>
    <input type="text" class="form-control" name="post_author">
  </div> <!-- .form-group -->
  <div class="form-group">
    <label for="post_status">Post Status</label>
    <input type="text" class="form-control" name="post_status">
  </div> <!-- .form-group -->
  <div class="form-group">
    <label for="post_image">Post Image</label>
    <input type="file" class="form-control" name="post_image">
  </div> <!-- .form-group -->
  <div class="form-group">
    <label for="post_tags">Post Tags</label>
    <input type="text" class="form-control" name="post_tags">
  </div> <!-- .form-group -->
  <div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea class="form-control" name="post_content" rows="10" cols="30"></textarea>
  </div> <!-- .form-group -->
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
  </div> <!-- .form-group -->
</form>
