<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>學生個人成績計算工具</title>
	</head>

	<body>
	
		<h1>國立高雄應用科技大學<br>教師成績輸入系統</h1>
		<hr>
		
		<table border="1">
			
				<tr><td align='center'>座號</td><td align='center'>成績</td></tr>
				
				<?php
					$a=0;
					$b=0;
					for($num=1;$num<=6;$num++){
						$student_score[$num]=$_POST[$num];
						echo "<tr><td align='center'>".$num."</td><td align='center'>".$student_score[$num]."</td></tr>";
					
						if($student_score[$num]<60){$a++;
						} 
						else {$b++;}
					
					}
					
				echo "</table><br>";
				echo "總共及格人數為：".$a."人"."<br>";
				echo "總共不及格人數為：".$b."人";
				
			?>

	</body>

</html>
