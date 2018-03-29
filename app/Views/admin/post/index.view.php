<?php
    include __DIR__ . "/../layout/header.php";

 ?>
   <a href="/post/create"><input type="submit" class="btn btn-primary text-white font-weight-bold" value="Them moi"></a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Date - time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $key => $value): ?>
                <tr>
                    <td><?php echo $value->ID ?></td>
                    <td><?php echo $value->title ?></td>
                    <td><?php echo $value->content ?></td>
                    <td><?php echo $value->date_time ?></td>
                    <td>
                        <a href="post/update?ID=<?php echo $value->ID ?>"><button class="btn btn-primary">Update</button></a>
                        <a href="post/delete?ID=<?php echo $value->ID ?>"><button class="btn btn-danger">Delete</button></a>
                        <a href="post/detail?ID=<?php echo $value->ID ?>"><button class="btn btn-success">Detail</button></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

<?php
     include __DIR__ . "/../layout/footer.php";
?>