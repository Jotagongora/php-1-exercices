<?php require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php';

$query = 'SELECT * FROM employees';
if (isset($_GET['id'])) {
$query = 'SELECT * FROM employees WHERE id = :identificador';
} elseif (isset($_GET['email'])) {
$query = 'SELECT * FROM employees WHERE email = :correo';
}

$stm = $mdbConnection->prepare($query); // prepare en vez de query te protege de ataques de inyección SQL

if (isset($_GET['id'])) {
    $stm->bindParam(':identificador', $_GET['id']);
    } elseif (isset($_GET['email'])) {
    $stm->bindParam(':correo', $_GET['email']);
    }

$stm->execute();

$people = $stm->fetchAll(PDO::FETCH_ASSOC);

?>

<?php require 'employees_'.(isset($_GET["format"]) ? $_GET["format"] : 'html').'.php';