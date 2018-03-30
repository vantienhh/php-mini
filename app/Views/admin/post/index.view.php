<?php
    include __DIR__ . "/../layout/header.php";
 ?>
   <a href="/admin/post/create"><input type="submit" class="btn btn-primary text-white" value="Thêm mới"></a>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Title</th>
                <th class="text-center">Content</th>
                <th class="text-center">Date - time</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $key => $value): ?>
                <tr>
                    <td class="text-center"><?php echo $value->ID ?></td>
                    <td class="text-center"><?php echo $value->title ?></td>
                    <td><?php echo $value->content ?></td>
                    <td class="text-center"><?php echo $value->date_time ?></td>
                    <td>
                        <ul>
                            <li class="admin-action"><a href="/admin/post/update?ID=<?php echo $value->ID ?>"><button class="btn btn-primary">Update</button></a></li>
                            <li class="admin-action"><a href="/admin/post/delete?ID=<?php echo $value->ID ?>"><button class="btn btn-danger">Delete</button></a></li>
                            <li class="admin-action"><a href="/admin/post/detail?ID=<?php echo $value->ID ?>"><button class="btn btn-success">Detail </button></a></li>
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
                    echo "<li><a href=\"/admin/post/page?p=$i\">$i</a></li>";
                }
                echo "<li><a href=\"?p=$num_page\">&raquo;</a></li>";
             ?>
        </ul>
    </div>


<?php
     include __DIR__ . "/../layout/footer.php";
?>