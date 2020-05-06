<style>
table {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 14px;
border-collapse: collapse;
margin: auto;
}
th, td:first-child {
background: #AFCDE7;
color: white;
height: 40px;
width: auto;
}
th, td {
border-style: solid;
border-width: 0 1px 1px 0;
border-color: white;
}
td {
background: #D8E6F3;
text-align: center;
}
th:first-child, td:first-child {
text-align: left;
}
</style>

<?  
include("inc/conect.php");
include("inc/head.php");
include("inc/func.php"); 

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])){
	
echo '<script src="js/online10.js"></script>';

echo '<script>	';		
echo 'window.offLineHandler = function(){ ';
echo 'document.getElementById("online_title").innerHTML = "YOU ARE OFFLINE"; ';
echo '}; ';
echo '</script>';


  $sql = mysqli_query($link, 'SELECT `ID`, `numbers`, `driver`, `spu`, `status` FROM `transport`');

      echo "<p id='online_title'> ";
	echo "<table>";
	while ($result = mysqli_fetch_array($sql)) {
		  echo "<tr>
                <td>{$result['ID']}</td>
                <td>{$result['numbers']}</td>
                <td>{$result['driver']}</td>
                <td>{$result['spu']}</td>
				<td>{$result['status']}</td>
				<td><a href='?del={$result['ID']}'>Видалити</a></td>
				<td><a href='?red={$result['ID']}'>Редагувати</a></td></tr>";
	}
	echo "</table>";
  echo "</p>";
  
}else{
    echo "Тільки для авторизованих";
}

include("inc/foot.php");
?>