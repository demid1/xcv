 <?php
	$num1=$_POST['number1'];
	$num2=$_POST['number2'];
	$plus=$_POST['plus'];
	$minus=$_POST['minus'];
	$multiplication=$_POST['multiplication'];
	$deference=$_POST['deference'];
	$do=$_POST['do'];
	if(isset($num1) && isset($num2))
	{
		if($plus=='on')
		{
			  $res=$num1+$num2;
		}
		if($minus=='on')
		{
			 $res=$num1-$num2;
		}
		if($multiplication=='on')
		{
			 $res=$num1*$num2;
		}

		if($deference=='on')
		{
			 $res=$num1/$num2;
		}

	}
			else
		{
			echo "введите числа";
		}
	
	
 ?>
<!DOCTYPE html>
<html>
 <head>
	<title>калькулятор</title>
 </head>
<body>
 <center><font color="red" size="5">калькулятор</font></center>
 <br><br><br>
 <center><table border="2"  >
 <form action="index.php" method="post">
 <tr></tr>
 <td colspan="4"><center>введите число:<input type="number"  name="number3"></center></td>
 <tr></tr>
 <td width="25%" ><center>+<input type="radio" name="plusi"></center></td>
 <td width="25%"><center>-<input type="radio" name="minusi"></center></td>
 <td width="25%"><center>*<input type="radio" name="multiplicationi"></center></td>
 <td width="25%"><center>/<input type="radio" name="deferencei"></center></td>
 <tr></tr>
 <td colspan="4"><center>введите число:<input type="number"  name="number4"></center></td>
  <tr></tr>
 <td colspan="4"><center>результат:<?php echo $res; ?></center></td>
 <tr></tr>
 <td colspan="2"><center><input type="submit" name="doi" value="вычислить"></center></td>
 <td colspan="2"><center><input type="reset" name="ci" value="сбросить"></center></td>
 

 </table></center>
</body>
</html>