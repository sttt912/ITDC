<?php
include("inc/conect.php");

$sql = mysqli_query($link, "INSERT INTO `transport` (`numbers`, `driver`, `spu`, `status`, `user_id`, `states`) VALUES ('{$_POST['fname']}', '{$_POST['id']}', '{$_POST['fname1']}', '{$_POST['if1']}', '0', 'offline' )");

?>