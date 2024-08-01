<html>
<head>
	<title>Activity - 12</title>
	<script>
		function showDistricts(str){
			if(str.length == 0){
				document.getElementById("dis").innerHTML="";
				return;
			}else{
				var xmlhttp = new XMLHttpRequest();		
				xmlhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
			document.getElementById("dis").innerHTML=this.responseText;
				}
				}
				xmlhttp.open("GET","districsinfo.php?q="+str,true);
				xmlhttp.send();
	}	
}
	</script>
</head>
<body>
	<h1>The districts within a particular province in Sri Lanka</h1>


<?php

	$provinces = array("Western","Southern","Northern","Eastern",
					  "North Central","North Western","Uva",
					  "Sabaragamuwa","Central");
?>

<h3>Province Name : 
	<select id="province" onChange="showDistricts(this.value)">

		<option value="">Please Select</option>

		<?php foreach($provinces as $p){ ?>
			<option value="<?php echo $p;?>"><?php echo $p;?></option>
		<?php } ?>

	</select> </h3>

		<div id="dis">Display Districts</div>
</body>
</html>