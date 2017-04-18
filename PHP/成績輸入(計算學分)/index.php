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
		<form method="post" action="grade.php"> 
			<table  width="600px" align="center" border="1" cellspacing="0" >
				<tr  bgcolor="#ebebeb" align="center">
					<td  width="10%" >項次</td>
					<td  width="25%">科目名稱</td>
					<td  width="10%">學分數</td>
					<td  width="35%">學期成績</td>
					<td  width="10%">備註</td>
				</tr>
				<tr bgcolor="#FFFcee">
					<td align="center">1</td>
					<td>平行處理</td>
					<td align="center">3.0</td>
					<td align="center"><input type="text" name="one" required="required"></td>
					<td>&nbsp;</td>
				</tr>
				<tr bgcolor="#FFFcee">
					<td align="center">2</td>
					<td>英語會話練習</td>
					<td align="center">2.0</td>
					<td align="center"><input type="text" name="three" required="required"></td>
					<td>&nbsp;</td>
				</tr>
				<tr bgcolor="#FFFcee">
					<td align="center">3</td>
					<td>無線智慧</td>
					<td align="center">3.0</td>
					<td align="center"><input type="text" name="two" required="required"></td>
					<td>&nbsp;</td>
				</tr>
				<tr bgcolor="#FFFcee">
					<td align="center">4</td>
					<td>人工智慧</td>
					<td align="center">3.0</td>
					<td align="center"><input type="text" name="four" required="required"></td>
					<td>&nbsp;</td>
				</tr>
				
				<tr>
					<td colspan="5"><center><input type="submit" value="送出">&nbsp;&nbsp;<input type="reset" value="清除"></center></td>
				</tr>
			</table>
		</form>

	</body>

</html>
