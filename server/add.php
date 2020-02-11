<?  
include("inc/conect.php");
include("inc/head.php");

echo '<html lang="en" manifest="/offline.manifest">';
echo '<script src="/js/online10.js"></script>';
echo '<script src="http://code.jquery.com/jquery-latest.js"></script>';

include("inc/func.php"); 
include("inc/form.php"); 

echo"<script>window.onLineHandler = function(){
	let i = 0;
while (i < 1) { // выводит 0, затем 1, затем 2
  getdetails();
  i++;
}	
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
	var name2 = $('#spu').val();
    var rno1 = $('#status').val();
    $.ajax({
        type: 'POST',
        url: 'post.php',
        data: {fname:name, id:rno, fname1:name1, id1:rno1}
    }).done(function(result)
        {alert('done');
        });
}
	
	</script>";

echo "<div id='msg'></div>";

include("inc/foot.php");
?>