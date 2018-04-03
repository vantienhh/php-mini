<?php
    include __DIR__ . "/../layout/header.php";
 ?>

    <form method="POST" action="/admin/post/create" enctype="multipart/form-data">
        <fieldset class="form-group">
            <label for="formGroupExampleTitle">Title</label>
            <input type="text" name="title" class="form-control" id="formGroupExampleTitle" placeholder="Name">
        </fieldset>

        <fieldset class="form-group">
            <label for="formGroupExampleImage">Image</label>
            <input type="file" name="avatar">
        </fieldset>

        <fieldset class="form-group">
            <label for="formGroupExampleInput2">Content</label>
            <textarea name="content" id="content"></textarea>
        </fieldset>

        <button name="uploadclick" class="btn btn-primary">Tạo</button>

        <script>
          CKEDITOR.replace( 'content' );
        </script>
    </form>

<?php
     include __DIR__ . "/../layout/footer.php";
?>