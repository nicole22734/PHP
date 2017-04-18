<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>學生個人成績計算工具</title>
	</head>

	<body>
	
		<h1>國立高雄應用科技大學<br>教師成績輸入系統</h1>
		<hr>
		<form name="putgrade" action="grade.php" method="post">	
		<table border="1">
			
				<tr><td align='center'>座號</td><td align='center'>成績</td></tr>
				
				<?php
					
					for($num=1;$num<=6;$num++){
						echo "<tr><td align='center'>".$num."</td><td align='center'>"."<input type='text' name='$num'>"."</td></tr>";
					}
				?>
				
			
			
			
		</table><br>
		<input type="submit" value="送出成績">
		</form>

	</body>

</html>
