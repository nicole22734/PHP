<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>高應大成績輸入系統</title>
</head>

<body>
	<h1>高應大成績輸入系統</h1>
	班級：四資工一甲<br>
	
		<?php
			
				 echo $_POST['semester']; 
			
		?>
		<br><br>
		科目：離散數學<br><br>
		<table  border="1" >
			<tr ><td align="center">座號</td><td align="center">成績</td></tr>
			<?php
				for($num=1;$num<=6;$num++){
					if($num==3 or $num==5) continue;
					
					echo "<tr><td align='center'>".$num."</td>"."<td align='center'>".$_POST[$num]."</td></tr>";
				}
			?>
		</table><br><br>
		<?php
		
		$b=0;
		for($num=1;$num<=6;$num++){
					
			if($num==3 or $num==5) continue;
			$a=$_POST[$num];
			$b=$b+$a;
		}
		$b=$b/($num-3);
		echo "平均分數：".round($b,1)."分<br><br>";
		
		$no=array(0,0,0,0,0);
	
		for($num=1;$num<=6;$num++){
			if($num==3 or $num==5) continue;
			if($_POST[$num]<60){
				$no[0]++;
			}else if($_POST[$num]<70){
				$no[1]++;
			}else if($_POST[$num]<80){
				$no[2]++;
			}else if($_POST[$num]<90){
				$no[3]++;
			}else if($_POST[$num]<=100){
				$no[4]++;
			}
			
		}
		
		echo "成績級距：<br><ul type='disc'>";
			echo "<li>100分~90分：".$no[4]."人</li>";
			echo "<li>89分~80分：".$no[3]."人</li>";
			echo "<li>79分~70分：".$no[2]."人</li>";
			echo "<li>69分~60分：".$no[1]."人</li>";
			echo "<li>60分以下：".$no[0]."人</li>";
		echo "</ul>";
		?>

	
</body>
</html>