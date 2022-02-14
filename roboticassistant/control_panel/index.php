
<html>
<head>        
   <title>Control Panel</title>
   <link href="css/cp.css" rel="stylesheet" type="text/css">  
   <script src="js/jquery.min.js"></script>        
   <script src="js/cp.js"></script>        
   <script>
	
	
   </script>
</head> 
<body onload="init()">
<?php

$host=$_SERVER['SERVER_ADDR'];//192.168.1.20
$path=rtrim(dirname($_SERVER["PHP_SELF"]), "/\\"); 

echo"<div align='center' id='box_outer'>";//------------------------
	echo"<b align='center' style='font-size:40px;color:#0000b3'>Robotic Assistant For Object Recognition Using CNN</b>";

	echo"<div align='center' class='box_inner'>";//------------------------
		//Range Sensor block
		echo"<div class='box_controls' style='width:15%'>";
			echo"<zz>";
				echo"<label class='floatLabel'>Range Sensor</label><br>";
				echo"<b id='range' style='float:right;color:blue;font-size:30px'></b>";
				echo"<input style='height:40px' id='range_button' type='submit' onclick=toggle_rangeSensor('range_button'); value='OFF'/>";
				echo"<script src='/earthrover/range_sensor/web/rangesensor.js'></script>";
			echo"</zz>";
		echo"</div>";
		
		
		echo"</div>";

		
	
	//****************************************************************************
	
	$link_remote= 'http://'.$host.$path.'/'."remote.php";//http://192.168.1.20/earthrover/remote.php
	$link_vid= 'http://'.$host.':8000';//http://192.168.1.20:8000
	
	echo"
		
		<iframe src= '$link_remote' id='box_remote' style='align: center'></iframe>
	";
	//****************************************************************************
	
	echo"<div align='center' class='box_inner'>";//------------------------
		
	
		
		
		
	echo"</div>";
	
	echo"<div align='center' style='margin-top:50px;margin-bottom:10px' class='box_inner'>";//------------------------
		echo"<span id='hw_1'></span>";
		echo"<span style='margin-left:15%'> Oluyele Sunday Anthony</span>";
		echo"<span style='margin-left:15%' >CPE/15/2826</span>";
	echo"</div>";
	
echo"</div>";//--box_outer---------------------------------------------------

?>


</body>
</html>
