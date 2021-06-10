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
                <th>Edad</th>
                <th>Ciudad</th>
                <th>Acción</th>
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
                    <td><?= $person['city']?></td>
                    <td><button class="employees-delete-button" value="Eliminar" data-person='<?= json_encode($person)?>'>Eliminar</button></td>
                </tr>
                
        <?php endforeach; ?>
        </tbody>

</table>

<?php if (isset($_GET['message'])) : ?>
    <p><?= $_GET['message']; ?></p>
<?php endif; ?>

    <hr/>
        <form method="POST" action="/employees_add.php">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required/>
        <br/>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required/>
        <br/>
        <label for="age">Edad</label>
        <input type="number" id="age" name="age" required/>
        <br/>
        <label for="city">Ciudad</label>
        <input type="text" id="city" name="city" />
        <br/>
        <label for="archivo">Archivo</label>
        <input type="file" id="archivo" name="archivo" />
        <hr/>
        <input type="submit" value="Enviar"/>
    </form>

<?php require('./footer.php'); ?>
</body>
</html>