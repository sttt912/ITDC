<?  
include("inc/conect.php");
include("inc/head.php");
include("inc/func.php"); 

echo '<script src="/js/online.js"></script>';
$search_q=$_POST['search_q'];	

if(!isset($_POST["search_q"])) {
	include("inc/search.php");
}

if(isset($_POST['search_q'])) { 
	$search_q = trim($search_q);
	$search_q = strip_tags($search_q);
	$s= mysqli_query($link, "SELECT * FROM `transport` WHERE numbers LIKE '%$search_q%'");
	
	while ($result = mysqli_fetch_array($s)) {
		echo "<p>{$result['ID']})||{$result['numbers']}||{$result['driver']}||{$result['spu']}||{$result['status']}
		- <a href='?del={$result['ID']}'>Удалить</a> ||<a href='?red={$result['ID']}'>Редактировать</a></p>";
	}	
	
	mysqli_free_result($s);
	mysqli_close($link);
}

include("inc/foot.php");
?>
