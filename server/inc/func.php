  <?php
 
    if (isset($_POST["numbers"])) {
      if (isset($_GET['red'])) {
        $sql = mysqli_query($link, "UPDATE `transport` SET `numbers` = '{$_POST['numbers']}',`driver` = '{$_POST['driver']}',`spu` = '{$_POST['spu']}',`status` = '{$_POST['status']}' WHERE `ID`={$_GET['red']}");
      } else {
        $sql = mysqli_query($link, "INSERT INTO `transport` (`numbers`, `driver`, `spu`, `status`) VALUES ('{$_POST['numbers']}', '{$_POST['driver']}', '{$_POST['spu']}', '{$_POST['status']}')");
      }

    if ($sql) {
        echo '<p>Успешно!</p>';
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }

    if (isset($_GET['del'])) {
      $sql = mysqli_query($link, "DELETE FROM `transport` WHERE `ID` = {$_GET['del']}");
      if ($sql) {
        echo "<p>удален.</p>";
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }

    if (isset($_GET['red'])) {
      $sql = mysqli_query($link, "SELECT `ID`, `numbers`, `driver`, `spu`, `status` FROM `transport` WHERE `ID`={$_GET['red']}");
      $product = mysqli_fetch_array($sql);
	  include("inc/form.php");
    }
  ?>