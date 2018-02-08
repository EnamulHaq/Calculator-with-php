<!DOCTYPE html>
<html>
<head>
	<title>Calculator made by php html and css.</title>
	
</head>

<?php
/*  
   1.This calculator creates Md.Enamul Haq by HTML CSS AND also PHP.

*/
//Assign the value of $s,$u & $equation by if-elseif-else condition.


if (!empty($_POST["value1"]) || !empty($_POST["value2"]) || !empty($_POST["equation"])) {
	

        $num1=$_POST["value1"];
        $num2=$_POST["value2"];
        $equation=$_POST["equation"];

} else{
	    $num1=0;
      $num2=0;
      $equation=1;
}


//Detect the select tag name.On the operator
    if ($equation==1) {$sum=$num1+$num2;}
    if ($equation==2) {$sum=$num1-$num2;}
    if ($equation==3) {$sum=$num1*$num2;}
    if ($equation==4) {$sum=$num1/$num2;}

?>


<body>
        <div style="border: 3px solid rgb(71, 203, 13); width:341px; background-color: rgb(47, 209, 94);margin-left: 39%;">
          <form action="" method="post">
              <h1 style="margin-left: 46px; color:white;">CALCULATOR</h1>
             <h5 style="border: 2px solid red;width: 321px;height: 40px;margin-left:6px ;font-size: 34px;text-align: center;box-shadow: 5px 4px 4px rgba(2,10,5,4);margin-top: 21px;background-color: #f03f58;margin-bottom: 30px; color: white;"><span><?php echo $sum;?></span></h5>

   	             <input style="text-align: right; font-size: 19px;margin-left: 8px;margin-top: -16px; width:318px; height:43px;" type="text" name="value1" placeholder="Enter your calculate number............."><br><br>

   	             <input style="text-align: right; font-size: 19px;margin-left: 8px;margin-top: -15px; width:318px; height:43px;" type="text" name="value2" placeholder="Enter your calculate number............."><br><br>

   	             <input type="submit" value="Result" style="font-size: 30px;width:272px;margin-left: 8px; background-color:red;color:beige;">

            <select name="equation" style="font-size: 30px;background-color: rgb(252, 252, 252);">
      	        <option value="1">+</option>
      	  		<option value="2">-</option>
      			<option value="3">*</option>
      			<option value="4">/</option>
      		</select>

          </form>

      </div>
</body>
</html>