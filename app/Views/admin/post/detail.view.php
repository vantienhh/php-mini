<?php
    include __DIR__ . "/../layout/header.php";
 ?>


    <form>
      <div class="form-group row">
        <label for="staticID" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="staticID" value="<?php echo $posts[0]->ID ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control" id="inputTitle" value="<?php echo $posts[0]->title ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputContent" class="col-sm-2 col-form-label">Content</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control" id="inputContent" value="<?php echo $posts[0]->content ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputDate" class="col-sm-2 col-form-label">Date - time</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control" id="inputDate" value="<?php echo $posts[0]->date_time ?>">
        </div>
      </div>
    </form>

<?php
     include __DIR__ . "/../layout/footer.php";
?>