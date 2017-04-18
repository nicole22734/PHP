<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>BMI計算</title>
	</head>
	<body>
		<h2>計算結果</h2>
		
			身高：<?php echo $_GET['height']; ?>公分<br>
			體重：<?php echo $_GET['weight']; ?>公斤<br>
			BMI值：<?php echo $_GET['weight']/(($_GET['height']/100)*($_GET['height']/100)); ?><br>
			健康狀況：<?php 
			$bmi = $_GET['weight']/(($_GET['height']/100)*($_GET['height']/100));
			if($bmi<18.5){
				echo "體重過輕";
			}else if($bmi<24){
				echo "正常範圍";
			}else if($bmi<27){
				echo "過重";
			}else if($bmi<30){
				echo "輕度肥胖";
			}else if($bmi<35){
				echo "中度肥胖";
			}else if($bmi>=35){
				echo "重度肥胖";
			}?>
		
	</body>
</html>