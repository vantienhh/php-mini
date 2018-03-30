<?php
    include __DIR__ . "/../layout/header.php";
 ?>

<form method="POST" action="/admin/post/update">
    <input type="hidden" name="ID" value="<?php echo $posts[0]->ID ?>">
    <fieldset class="form-group">
        <label for="formGroupExampleTitle">Title</label>
        <input type="text" class="form-control" name="title" id="formGroupExampleTitle" value="<?php echo $posts[0]->title ?>">
    </fieldset>

    <fieldset class="form-group">
        <label for="formGroupExampleContent">Content</label>
        <textarea name="content"><?php echo $posts[0]->content ?></textarea>
    </fieldset>

    <button type="submit" class="btn btn-primary" name="btnUpdate">Update</button>
    <script>
           CKEDITOR.replace( 'content' );
    </script>
</form>

<?php
     include __DIR__ . "/../layout/footer.php";
?>