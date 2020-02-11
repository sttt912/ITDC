  <?php
 
    if (isset($_POST["numbers"])) {
      if (isset($_GET['red'])) {
        $sql = mysqli_query($link, "UPDATE `transport` SET `numbers` = '{$_POST['numbers']}',`driver` = '{$_POST['driver']}',`spu` = '{$_POST['spu']}',`status` = '{$_POST['status']}',`user_id` = '".intval($_COOKIE['id'])."',`states` = '{$_POST['states']}' WHERE `ID`={$_GET['red']}");
      } else {
        $sql = mysqli_query($link, "INSERT INTO `transport` (`numbers`, `driver`, `spu`, `status`, `user_id`, `states`) VALUES ('{$_POST['numbers']}', '{$_POST['driver']}', '{$_POST['spu']}', '{$_POST['status']}', '".intval($_COOKIE['id'])."', '{$_POST['states']}' )");
      }

    if ($sql) {
        echo '<p>Успіх!</p>';
      } else {
        echo '<p>Помилка: ' . mysqli_error($link) . '</p>';
      }
    }

    if (isset($_GET['del'])) {
      $sql = mysqli_query($link, "DELETE FROM `transport` WHERE `ID` = {$_GET['del']}");
      if ($sql) {
        echo "<p>Видалено.</p>";
      } else {
        echo '<p>Помилка: ' . mysqli_error($link) . '</p>';
      }
    }

    if (isset($_GET['red'])) {
      $sql = mysqli_query($link, "SELECT `ID`, `numbers`, `driver`, `spu`, `status` FROM `transport` WHERE `ID`={$_GET['red']}");
      $product = mysqli_fetch_array($sql);
	  include("inc/form.php");
    }
  ?>