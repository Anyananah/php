<?php
session_start();
if(!isset($_SESSION['Autenticado']) || $_SESSION['Autenticado']!= 'SIM'){
  header('Location: index.php?Login=erro2');
}
?>