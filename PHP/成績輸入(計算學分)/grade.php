<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>學生個人成績計算工具</title>
	</head>

	<body>
		<div style="text-align: center;">
			<h1>國立高雄應用科技大學<br>學生個人成績計算工具</h1>

			<h2>103學年度第2學期</h2>
				班級：資訊工程系一年級甲班　　　　學號：1103108152　　　　姓名：陳宥青<br><br>
				本次瀏覽此網站的IP為：<?php echo $_SERVER["REMOTE_ADDR"]; ?>
		</div>
		<hr>
		
			<table  width="600px" align="center" border="1" cellspacing="0" >
				<tr  bgcolor="#ebebeb" align="center">
					<td  width="10%" >項次</td>
					<td  width="25%">科目名稱</td>
					<td  width="10%">學分數</td>
					<td  width="35%">學期成績</td>
					<td  width="10%">備註</td>
				</tr>
				<?php
					$onegr=0;
					$twogr=0;
					$threegr=0;
					$fourgr=0;
				?>
				<tr bgcolor="#FFFcee">
					<td align="center">1</td>
					<td>平行處理</td>
					<td align="center">3.0</td>
					<td align="center"><?php 
											if($_POST['one']<60){
												echo "<font color=\"red\">".$_POST['one']."</font>";
												
											}else {echo $_POST['one'];
											$onegr=3;}
											
											
										?>
					</td>
					<td><?php 
											if($_POST['one']<60){
												echo "<font color=\"red\">"."不及格"."</font>";
											}else echo "&nbsp;";
					?></td>
				</tr>
				<tr bgcolor="#FFFcee">
					<td align="center">2</td>
					<td>英語會話練習</td>
					<td align="center">2.0</td>
					<td align="center"><?php 
											if($_POST['two']<60){
												echo "<font color=\"red\">".$_POST['two']."</font>";
												
											}else {echo $_POST['two'];
											$twogr=2;}
											
										?></td>
					<td><?php 
											if($_POST['two']<60){
												echo "<font color=\"red\">"."不及格"."</font>";
												
											}else echo "&nbsp;";
											
					?></td>
				</tr>
				<tr bgcolor="#FFFcee">
					<td align="center">3</td>
					<td>無線智慧</td>
					<td align="center">3.0</td>
					<td align="center"><?php 
											if($_POST['three']<60){
												echo "<font color=\"red\">".$_POST['three']."</font>";
												
											}else {echo $_POST['three'];
											$threegr=3;}
											 
					?></td>
					<td><?php 
											if($_POST['three']<60){
												echo "<font color=\"red\">"."不及格"."</font>";
											}else 
					?></td>
				</tr>
				<tr bgcolor="#FFFcee">
					<td align="center">4</td>
					<td>人工智慧</td>
					<td align="center">3.0</td>
					<td align="center"><?php 
											if($_POST['four']<60){
												echo "<font color=\"red\">".$_POST['four']."</font>";
												
											}
											else{
											
												echo $_POST['four'];
											$fourgr=3;}
											
					?></td>
					<td><?php 
											if($_POST['four']<60){
												echo "<font color=\"red\">"."不及格"."</font>";
											}else echo "&nbsp";
					?></td>
				</tr>
				<tr>
					<td colspan="5">
					<?php 
						$total=($_POST['one']*3+$_POST['two']*2+$_POST['three']*3+$_POST['four']*3)/11;
						echo "總平均：".round($total)." ";
						echo "總修課學分：11 ";
						echo "及格學分：".$final=$onegr+$twogr+$threegr+$fourgr." ";
						echo "不及格學分：".$ans=11-$final;
					?></td>
				</tr>
			</table>
			<p align="center"><?php
				if($final>(11/2)){
					echo "<font size=\"6\">"."恭喜你ALL PASS！"."</font>";
				}else echo  "<font color=\"red\" size=\"6\">"."很抱歉，你被21了"."</font>";
			?></p>

	</body>

</html>
