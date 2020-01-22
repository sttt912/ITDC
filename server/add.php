<?  
include("inc/conect.php");
include("inc/head.php");
echo '<script src="/js/online.js"></script>';

include("inc/func.php"); 
include("inc/form.php"); 

echo"<h1 id='online_title'>fgdfgdfgd</h1>";
echo"<script>window.onLineHandler = function(){ 
		document.getElementById('online_title').innerHTML = 'fdgfdgfdgdfgdfgdfgdffvfdvfdd';};
	";
echo"window.offLineHandler = function(){
	document.getElementById('online_title').innerHTML = 'YOU ARE OFFLINE';
		localStorage.setItem('numbers', 1);
		localStorage.setItem('driver', 1);
		localStorage.setItem('spu', 1);
		localStorage.setItem('status', 1);
};</script>";



include("inc/foot.php");
?>