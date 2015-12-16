<?php
session_start();

$idu = $_SESSION['User_ID'];

$ide = $_POST['id'];

echo $idu . "<br>" . $ide;
?>