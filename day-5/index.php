<!DOCTYPE html>
<html>
<head>
	<title>Day-5</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>	
<div class="container-fluid">

	<!--Header Option -->
	<div class="row">
		<div class="col-sm-12">
			<p class="test">Fist line</p>
			<p class="test">Fist line</p>
			<p class="test">Fist line</p>
			<p class="test">Fist line</p>
			<p class="test">Fist line</p>
			<p class="test">Fist line</p>
			<p class="test">Fist line</p>
			<p class="test">Fist line</p>
		</div>
		<button type="button" onclick="allFunction();">Click Me!</button>

		<button id="amiTumi" title="ami ekhane" type="button" onmouseover="document.getElementById('amiTumi').title = 'Tumi okhane'; document.getElementsByClassName('test')[0].innerHTML = 'changed'; focus(amiTumi);">Click Me!</button>
	</div>
</div>

<script >
	function allFunction(){
		var all = document.getElementsByClassName('test');
		for(var i=0;i<all.length;i++){
			all[i].innerHTML = 'Hello javaScript';
		}
	}
</script>
</body>
</html>