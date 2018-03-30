<?php
    include __DIR__ . "/../layout/header.php";
?>

    <form>
      <div class="form-group row">
        <label for="staticID" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="staticID" value="<?php echo $users[0]->ID ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control" id="inputName" value="<?php echo $users[0]->name ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control" id="inputGender" value="<?php echo $users[0]->gender ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" readonly class="form-control" id="inputEmail" value="<?php echo $users[0]->email ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPass" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" readonly class="form-control" id="inputPass" value="<?php echo $users[0]->password ?>">
        </div>
      </div>
    </form>

<?php
     include __DIR__ . "/../layout/footer.php";
?>