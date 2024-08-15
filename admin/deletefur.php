<?php
include("connection.php"); 
$q = "delete from fur where id='{$_GET['id']}'";
$con->query($q);
unlink("img/".$_GET['img']);
header('location:addfur.php');
?>