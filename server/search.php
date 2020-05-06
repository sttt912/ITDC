
<?  
include("inc/conect.php");
include("inc/head.php");
include("inc/func.php"); 

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])){
	
echo '<meta name="viewport" content="1.0">';
echo '<script src="js/online10.js"></script>';
$search_q=$_POST['search_q'];	

if(empty($_POST["search_q"])) {
	include("inc/search.php");
}

if(isset($_POST['search_q'])) {
	if(!empty($_POST['search_q'])) {
	$search_q = trim($search_q);
	$search_q = strip_tags($search_q);
	$s= mysqli_query($link, "SELECT * FROM `transport` WHERE numbers LIKE '%$search_q%'");
	$a= mysqli_query($link, "SELECT COUNT(1) FROM `transport` WHERE numbers LIKE '%$search_q%'");
	$b = mysqli_fetch_array( $a );
echo "<table>";
	while ($result = mysqli_fetch_array($s)) {
		  echo "<tr>
                <td>{$result['ID']}</td>
                <td>{$result['numbers']}</td>
                <td>{$result['driver']}</td>
                <td>{$result['spu']}</td>
				<td>{$result['status']}</td>
				<td><a href='?del={$result['ID']}'>Видалити</a></td>
				<td><a href='?red={$result['ID']}'>Редагувати</a></td></tr>";
//		echo "<p>{$result['ID']})||{$result['numbers']}||{$result['driver']}||{$result['spu']}||{$result['status']}
//		- <a href='?del={$result['ID']}'>Видалити</a> ||<a href='?red={$result['ID']}'>Редагувати</a></p>";
	}
	echo "</table>";
	//якщо нічого не знайденно
	if ($b[0]== 0){
		echo "На ваш запит нічого не знайденно!";
		include("inc/search.php");
	}	
		
	mysqli_free_result($s);
	mysqli_close($link);
}}}else{
    echo "Тільки для авторизованих";
}


include("inc/foot.php");
?>
