<?  
include("inc/conect.php");
include("inc/head.php");
if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])){
	
echo '<script src="/js/online10.js"></script>';
echo '<script src="http://code.jquery.com/jquery-latest.js"></script>';

include("inc/func.php"); 
include("inc/form.php"); 

echo"<script>window.onLineHandler = function(){
		//getdetails();
		//localStorage.clear();
}

window.offLineHandler = function(){
	//код оброботчика офлайн
};

function offline() {
	localStorage.setItem('numbers', document.getElementById('numbers').value);
	localStorage.setItem('driver', document.getElementById('driver').value);
	localStorage.setItem('spu', document.getElementById('spu').value);
	localStorage.setItem('status', document.getElementById('status').value);
}

function getdetails(){
    var name = $('#numbers').val();
    var rno = $('#driver').val();
    $.ajax({
        type: 'POST',
        url: 'post.php',
        data: {fname:name, id:rno}
    }).done(function(result)
        {alert('done');
        });
}
	
	</script>";

echo "<div id='msg'></div>";
}else{
    print "Тільки для авторизованих";
}
include("inc/foot.php");
?>