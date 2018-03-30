<?php
    include __DIR__ . "/../layout/header.php";
 ?>

    <form method="POST" action="admin/post/create">
        <fieldset class="form-group">
            <label for="formGroupExampleInput1">Title</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput1" placeholder="Name">
        </fieldset>

        <fieldset class="form-group">
            <label for="formGroupExampleInput2">Content</label>
            <textarea name="content" id="content"></textarea>
        </fieldset>

        <button type="submit" class="btn btn-primary" name="btnLogin">Tạo</button>

        <script>
          CKEDITOR.replace( 'content' );
        </script>
    </form>

<?php
     include __DIR__ . "/../layout/footer.php";
?>