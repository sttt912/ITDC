<?  
include("inc/conect.php");
include("inc/head.php");
include("inc/func.php"); 
  
  $sql = mysqli_query($link, 'SELECT `ID`, `numbers`, `driver`, `spu`, `status` FROM `transport`');
  
  while ($result = mysqli_fetch_array($sql)) {
    echo "<p>{$result['ID']})||{$result['numbers']}||{$result['driver']}||{$result['spu']}||{$result['status']}
	- <a href='?del={$result['ID']}'>Удалить</a> ||<a href='?red={$result['ID']}'>Редактировать</a></p>";
  }

include("inc/foot.php");
?>