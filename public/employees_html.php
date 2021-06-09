<!DOCTYPE html>
<html lang="en">
<?php require('./head.php');?>
<body>

<?php include('./links.php')?>
<table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($people as $key => $person) : ?>
                <tr>
                    <td><?= $person['id']?></td>
                    <td><?= $person['name']?></td>
                    <td><a href="/employees.php?id=<?= $person['id'];?>"><?= $person['email']?></td>
                    <td><?= $person['age']?></td>
                    <td><?= $person['age']?></td>
                </tr>
                
        <?php endforeach; ?>
        </tbody>

</table>


<?php require('./footer.php'); ?>
</body>
</html>