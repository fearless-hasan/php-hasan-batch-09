<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
</head>
<body>
	<p id="demo">Hi, This is hasan.</p>
	<input type="text" name="input" id="input" onkeypress="return mySecond(event);">
	<button onclick="myFunction();" >click</button>

	<script>
		function myFunction(){
			document.getElementById('demo').innerHTML += document.getElementById('input').value;
			document.getElementById('input').value = '';
		}

		function mySecond(e){
			if (e.keyCode == 13) {
				var tb = document.getElementById("input");
				document.getElementById('demo').innerHTML += document.getElementById('input').value;
				document.getElementById('input').value = '';
				return false;
			}
		}
	</script>
</body>
</html>

