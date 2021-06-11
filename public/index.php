<?php require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php require('./head.php');?>

<body>
<?php include('./links.php');?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partial/header.php'; ?>
    <?php if($_SESSION['last_visit_time']):?>
        <h4><?= $_SESSION['last_visit_time']; ?></h4>
    <?php endif; ?>
    <pre>$_COOKIE: <?php print_r($_COOKIE); ?></pre>
  
    <?php
    $weeekDays = [
        1 => 'lunes',
        2 => 'martes',
        3 => 'miércoles',
        4 => 'jueves',
        5 => 'viernes',
        6 => 'sábado',
        7 => 'domingo',
    ];
    ?>
    <h1>Hola, <?=$_GET['name']?></h1>
    <p>Hoy es <strong><?= $weeekDays[date('N')]; ?></strong>. ¿Qué tal estás?</p>

    <?php require('./footer.php'); ?>
</body>

</html>



