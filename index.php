<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pervoobr</title>
</head>
<body>
	<input type="text" placeholder="N" class="textop" name="color">

	<input type="button" name="" value="ok" onclick="start()"><br>
	<input type="text" placeholder="Result" class="res" name="color">

	<script type="text/javascript">
		function start() {
			var first = document.querySelector(".textop").value;
			document.querySelector(".textop").value="";
			var eiler = 1;
			for (var i = 2; i < first; i++ ){
				var flag = true	;
				for(var j = 2; j < first; j++){
					if (first % j == 0 && i % j == 0){
						flag = false;
						console.log(i);
						break;	
					}
				}
				if(flag){
					eiler++;
				}
			}
			console.log(eiler);
			var res = 0;
			for(var i = 2; i<=21;i++){
				if ((i**eiler)%first==1){
					res = i;
					break;
				}
			}
			document.querySelector(".res").value=res;
		}
		
	</script>
</body>
</html>
