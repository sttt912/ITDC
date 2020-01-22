<h1 id="online_title"></h1>
<script>
            window.onLineHandler = function(){
				 document.getElementById('online_title').innerHTML = '<form name="f1" method="post" action="search.html"><input type="search" name="search_q"></br></br><input type="submit" value="Поиск"/></br></form>';
            };
			
            window.offLineHandler = function(){
				document.getElementById('online_title').innerHTML = 'YOU ARE OFFLINE';
            };
</script>