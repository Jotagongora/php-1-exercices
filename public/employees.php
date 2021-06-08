<?php require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php';

$stm = $mdbConnexion->query('SELECT * FROM employees');

$people = $stm->fetchAll(PDO::FETCH_ASSOC);

?>

<?php require 'employees_'.(isset($_GET["format"]) ? $_GET["format"] : 'html').'.php';