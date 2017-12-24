<!DOCTYPE html>
<html>
<head>
	<title>Password</title>
</head>
<body>

	Password: 
	
	<input type="text" name="" id="input" onkeyup="myFunction();">
	<span><button id="btn" style="display: none;">Submit</button></span>

	<ol>
		<li id="min" style="color: red;">Minimum 8 character</li>
		<li id="up" style="color: red;">One Upper Case</li>
		<li id="low" style="color: red;">One Lower Case</li>
		<li id="number" style="color: red;">One Number</li>
		<li id="special" style="color: red;">One Special Character</li>
	</ol>

	<script>

		function upperCase(s){
			for(var i=0;i<s.length;i++){
				if(s[i] >='A' && s[i]<='Z') return true;
			}
			return false;
		}

		function lowerCase(s){
			for(var i=0;i<s.length;i++){
				if(s[i] >='a' && s[i]<='z') return true;
			}
			return false;
		}

		function numberCase(s){
			for(var i=0;i<s.length;i++){
				if(s[i] >='0' && s[i]<='9') return true;
			}
			return false;
		}

		function specialCase(s){
			var s2 = '!@$#%^&*()_?><.,';
			for(var i=0;i<s.length;i++){
				for(var j=0;j<s2.length;j++){
					if(s[i] == s2[j]) return true;
				}
			}
			return false;
		}

		function myFunction(){
			var input = document.getElementById('input').value;
			if(input.length >= 8){
				document.getElementById('min').style.color = 'black';
			} else {				
				document.getElementById('min').style.color = 'red';
			}

			if(upperCase(input)){
				document.getElementById('up').style.color = 'black';
			} else {				
				document.getElementById('up').style.color = 'red';
			}

			if(lowerCase(input)){
				document.getElementById('low').style.color = 'black';
			} else {				
				document.getElementById('low').style.color = 'red';
			}

			if(numberCase(input)){
				document.getElementById('number').style.color = 'black';
			} else {				
				document.getElementById('number').style.color = 'red';
			}

			if(specialCase(input)){
				document.getElementById('special').style.color = 'black';
			} else {				
				document.getElementById('special').style.color = 'red';
			}

			if(input.length >=8 && upperCase(input) && lowerCase(input) && numberCase(input) && specialCase(input)) {				
				document.getElementById('btn').style.display = 'inline';
			} else {	
				document.getElementById('btn').style.display = 'none';
			}
		}
	</script>

</body>
</html>