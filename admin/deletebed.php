<?php
include("connection.php"); 
$q = "delete from bed where id='{$_GET['id']}'";
$con->query($q);
unlink("img/".$_GET['img']);
header('location:bed.php');
?>