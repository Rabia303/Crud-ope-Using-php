<?php

include('conn.php');
$uid = $_GET['id'];
$sql = "DELETE FROM `form` WHERE ID = $uid";
mysqli_query($conn,$sql);

header("Location: retrieve.php");

?>

