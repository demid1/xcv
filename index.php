 <?php
	$num3=$_POST['number3'];
	$num4=$_POST['number4'];
	$plusi=$_POST['plusi'];
	$minusi=$_POST['minusi'];
	$multiplicationi=$_POST['multiplicationi'];
	$deferencei=$_POST['deferencei'];
	
	if(isset($num3) && isset($num4))
	{
		if($plusi=='on')
		{
			  $resi=$num3+$num4;
		}
		if($minusi=='on')
		{
			 $resi=$num3-$num4;
		}
		if($multiplicationi=='on')
		{
			 $resi=$num3*$num4;
		}

		if($deferencei=='on')
		{
			 $resi=$num3/$num4;
		}

	}
			else
		{
			echo "введите пожалуйста числа";
		}
	
 ?>
<!DOCTYPE html>
<html>
 <head meta charset="utf-8">
	<title>калькулятор </title>
 </head>
<body >
 <center><font color="red" size="5">калькулятор</font></center>
 <br><br><br>
 <center><table border="2"  >
 <form action="check.php" method="post">
 <tr></tr>
 <td colspan="4"><center>введите число:<input type="number"  name="number1"></center></td>
 <tr></tr>
 <td width="25%" ><center>+<input type="radio" name="plus"></center></td>
 <td width="25%"><center>-<input type="radio" name="minus"></center></td>
 <td width="25%"><center>*<input type="radio" name="multiplication"></center></td>
 <td width="25%"><center>/<input type="radio" name="deference"></center></td>
 <tr></tr>
 <td colspan="4"><center>введите число:<input type="number"  name="number2"></center></td>
 <tr></tr>
 <td colspan="4"><center>результат:<? echo $resi ?></center></td>
 <tr></tr>
 <td colspan="2"><center><input type="submit" name="do" value="вычислить"></center></td>
 <td colspan="2"><center><input type="reset" name="c" value="сбросить"></center></td>
 </table></center>
</body>
</html>