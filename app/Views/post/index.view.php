<?php
    include __DIR__ . "/../layout/header.php";
 ?>
    <input type="submit" class="btn tbn-primary" value="Them moi">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Date - time</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $key => $value): ?>
                <tr>
                    <td><?php echo $value->ID ?></td>
                    <td><?php echo $value->title ?></td>
                    <td><?php echo $value->content ?></td>
                    <td><?php echo $value->date_time ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

<?php
     include __DIR__ . "/../layout/footer.php";
 ?>