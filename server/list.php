<?  
include("inc/conect.php");
include("inc/head.php");
include("inc/func.php"); 


echo '<script src="js/online10.js"></script>';

echo '<script>	';		
echo 'window.offLineHandler = function(){ ';
echo 'document.getElementById("online_title").innerHTML = "YOU ARE OFFLINE"; ';
echo '}; ';
echo '</script>';


  $sql = mysqli_query($link, 'SELECT `ID`, `numbers`, `driver`, `spu`, `status` FROM `transport`');
  echo "<p id='online_title'> ";
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['ID']})||{$result['numbers']}||{$result['driver']}||{$result['spu']}||{$result['status']}
	- <a href='?del={$result['ID']}'>Удалить</a> ||<a href='?red={$result['ID']}'>Редактировать</a><br/><br/>";
  }
  echo "</p>";
include("inc/foot.php");
?>