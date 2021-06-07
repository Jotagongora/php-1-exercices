<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>

    <?php
        $people = [
            ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
            ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'age' => 15, 'city' => 'Fuengirola'],
            ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 17, 'city' => 'Torremolinos'],
            ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga'],
        ];
    ?>
<?php include('./links.php')?>
<table>
        <thead>
            <tr>
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
                    <td><?= $person['name']?></td>
                    <td><?= $person['email']?></td>
                    <td><?= $person['age']?></td>
                    <td><?= $person['age']?></td>
                </tr>
                
        <?php endforeach; ?>
        </tbody>

</table>

</body>
</html>