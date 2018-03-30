<?php
    include __DIR__ . "/../layout/header.php";
?>

    <form action="/admin/user/create" method="POST">
        <fieldset class="form-group">
            <label for="formGroupExampleInput1">Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput1" placeholder="Name">
        </fieldset>

        <fieldset class="form-group">
            <label for="formGroupExampleInput1">Gender</label>
           <div style="display: block;">
                <input type="radio" name="gender" value="0" checked="checked">Male
                <input type="radio" name="gender" value="1">Female
           </div>
        </fieldset>

        <fieldset class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input name="email" class="form-control" id="formGroupExampleInput2"></input>
        </fieldset>

        <fieldset class="form-group">
            <label for="formGroupExampleInput3">Password</label>
            <input name="pass1" class="form-control" id="formGroupExampleInput3"></input>
        </fieldset>

        <fieldset class="form-group">
            <label for="formGroupExampleInput4">Re password</label>
            <input name="pass2" class="form-control" id="formGroupExampleInput4"></input>
        </fieldset>

        <button type="submit" class="btn btn-primary" name="btnLogin">Tạo</button>
    </form>

<?php
     include __DIR__ . "/../layout/footer.php";
?>