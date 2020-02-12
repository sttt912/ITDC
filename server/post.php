<?php
include("inc/conect.php");


    if (isset($_POST["fname"])) {
      if (isset($_GET['fname'])) {
        $sql = mysqli_query($link, "UPDATE `transport` SET `numbers` = '{$_POST['numbers']}',`driver` = '{$_POST['driver']}',`spu` = '{$_POST['spu']}',`status` = '{$_POST['status']}',`user_id` = '".intval($_COOKIE['id'])."',`states` = '{$_POST['states']}' WHERE `ID`={$_GET['red']}");
      } else {
        $sql = mysqli_query($link, "INSERT INTO `transport` (`numbers`, `driver`, `spu`, `status`, `user_id`, `states`) VALUES ('{$_POST['fname']}', '{$_POST['id']}', '{$_POST['fname1']}', '{$_POST['if1']}', '0', 'offline' )");
      }
	  
?>