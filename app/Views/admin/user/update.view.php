<?php
    include __DIR__ . "/../layout/header.php";
?>

    <form action="/admin/user/update" method="POST">
        <input type="hidden" name="ID" value="<?php echo $users[0]->ID ?>">
        <fieldset class="form-group">
            <label for="formID">ID</label>
            <input type="text" class="form-control" readonly name="ID" id="formID" value="<?php echo $users[0]->ID ?>">
        </fieldset>

        <fieldset class="form-group">
            <label for="formName">Name</label>
            <input type="text" class="form-control" name="name" id="formName" value="<?php echo $users[0]->name ?>">
        </fieldset>

        <fieldset class="form-group">
            <label for="formGender">Gender</label>
            <div style="display: block;">
                <input type="radio" name="gender" value="0" checked="checked">Male
                <input type="radio" name="gender" value="1">Female
           </div>
        </fieldset>

        <fieldset class="form-group">
            <label for="formEmail">Email</label>
            <input type="emaul" class="form-control" name="email" id="formEmail" value="<?php echo $users[0]->email ?>">
        </fieldset>

        <fieldset class="form-group">
            <label for="formPass">Password</label>
            <input type="emaul" class="form-control" name="password" id="formPass" value="<?php echo $users[0]->password ?>">
        </fieldset>

        <button type="submit" class="btn btn-primary" name="btnUpdate">Update</button>

    </form>

<?php
     include __DIR__ . "/../layout/footer.php";
?>