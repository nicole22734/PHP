<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>高應大成績輸入系統</title>
</head>

<body>
	<h1>高應大成績輸入系統</h1>
	班級：四資工一甲<br>
	<form name="gradeinput" action="grade.php" method="post">
		<select name="semester">
		<?php
			$sem1 = 100;
			$sem2 = 1;
			while($sem1<=103){
				while($sem2<=2){
					echo "<option>".'第'.$sem1.'學年度'.' '.'第'.$sem2.'學期'."</option>";
					$sem2++;
				}
				if($sem2>2) {
					$sem1++;
					$sem2 = 1;
				}
			
			}
		?>
		</select><br><br>
		科目：離散數學<br>
		<table  border="1" >
			<tr ><td align="center">座號</td><td align="center">成績</td></tr>
			<?php
				for($num=1;$num<=6;$num++){
					if($num==3 or $num==5) continue;
						echo "<tr><td align='center'>".$num."</td>"."<td align='center'>"."<input type='text' name='$num'>"."</td></tr>";
				}
			?>
		</table>
		<input type="submit" value="送出成績">
	</form>
	
</body>
</html>