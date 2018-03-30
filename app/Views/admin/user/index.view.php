<?php
    include __DIR__ . "/../layout/header.php";
 ?>

    <a href="/admin/user/create"><input type="submit" class="btn btn-primary text-white" value="Thêm mới"></a>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Gender</th>
                <th class="text-center">Email</th>
                <th class="text-center">Password</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
           <?php foreach ($users as $key => $value): ?>
                <tr>
                    <td class="text-center"><?php echo $value->ID ?></td>
                    <td class="text-center"><?php echo $value->name ?></td>
                    <td class="text-center"><?php echo $value->gender ?></td>
                    <td class="text-center"><?php echo $value->email ?></td>
                    <td class="text-center"><?php echo $value->password ?></td>
                    <td>
                        <ul>
                            <li class="admin-action"><a href="/admin/user/update?ID=<?php echo $value->ID ?>"><button class="btn btn-primary">Update</button></a></li>
                            <li class="admin-action"><a href="/admin/user/delete?ID=<?php echo $value->ID ?>"><button class="btn btn-danger">Delete</button></a></li>
                            <li class="admin-action"><a href="/admin/user/detail?ID=<?php echo $value->ID ?>"><button class="btn btn-success">Detail </button></a></li>
                        </ul>
                    </td>
                </tr>
           <?php endforeach ?>
        </tbody>
    </table>

    <div class="text-center">
       <ul class="pagination">
           <?php
                echo "<li><a href=\"?p=1\">&laquo;</a></li>";
                for ($i=1; $i <= $num_page ; $i++) {
                    echo "<li><a href=\"/admin/user/page?p=$i\">$i</a></li>";
                }
                 echo "<li><a href=\"?p=$num_page\">&raquo;</a></li>";
            ?>
       </ul>
   </div>

<?php
     include __DIR__ . "/../layout/footer.php";
?>