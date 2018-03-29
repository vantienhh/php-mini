<?php
    include __DIR__ . "/../layout/header.php";
 ?>

    <form method="POST" action="/post/create">
        <fieldset class="form-group">
            <label for="formGroupExampleInput1">Title</label>
            <?php
                if (isset($_COOKIE['msgCreatePost'])) {
                    if ($_SESSION['title']=='') {
                        echo "Title khong duoc bo trong";
                    }
                }
             ?>
            <input type="text" name="title" class="form-control" id="formGroupExampleInput1" placeholder="Example input">
        </fieldset>

        <fieldset class="form-group">
            <label for="formGroupExampleInput2">Content</label>
            <?php
                if (isset($_COOKIE['msgCreatePost'])) {
                    if ($_SESSION['ckeditor']=='') {
                        echo "Content khong duoc bo trong";
                    }
                }
             ?>
            <textarea name="content"></textarea>
        </fieldset>

        <button type="submit" class="btn btn-primary" name="btnLogin">Tạo</button>

        <script>
           CKEDITOR.replace( 'content' );
        </script>
    </form>

<?php
     include __DIR__ . "/../layout/footer.php";
?>