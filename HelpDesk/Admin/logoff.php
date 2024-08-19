<?php
session_start();

// unset($_SESSION['Autenticado']);
// header('Location: index.php');

session_destroy();
header('Location: index.php');

?>