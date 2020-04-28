<?php
$number1=$_POST['number1'];
$number2=$_POST['number2'];
$number3=$_POST['number3'];
$number4=$_POST['number4'];
$number5=$_POST['number5'];
echo "Highest Marks : ";
if($number1>$number2 && $number1>$number3 && $number1>$number4 && $number1>$number5){
echo "$number1 <br>";
}
else if($number2>$number1 && $number2>$number3 && $number2>$number4 && $number2>$number5){
    echo "$number2 <br>";
}
else if($number3>$number1 && $number3>$number2 && $number3>$number4 && $number3>$number5){
        echo "$number3 <br>";
}    
else if($number4>$number1 && $number4>$number2 && $number4>$number3 && $number4>$number5){
    echo "$number4 <br>";
}
else{

    echo "$number5 <br>";
}

$total= $number1+$number2+$number3+$number4+$number5;

$avg=$total/5;

if($avg<0 || $avg>100){
    echo "invalid input";
}
else if($avg>90){
    echo "Grade O";
}
else if($avg>80){
    echo "Grade E";
}
else if($avg>70){
    echo "Grade A";
}
else if($avg>60){
    echo "Grade B";
}
else if($avg>50){
    echo "Grade C";
}
else{
    echo "FAIL";
}
?>