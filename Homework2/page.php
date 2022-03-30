<?php 
// task 3
$num = $_POST['num'];
$numbers = range(10,100,12);
print_r($numbers);
$count = 0;
foreach($numbers as $number){
    if($number > $num){
        $count++;
    }
}
echo "<br>";
if(isset($_POST['num'])){
    echo $count." "."numbers are more than number from input:".$num;

}
/**************** */
echo "<br>";
echo "<br>";


$cars = array(
    array("Make"=>"Toyota", 
		"Model"=>"Corolla", 
		"Color"=>"White", 
		"Mileage"=>24000, 
		"Status"=>"Sold"),

    array("Make"=>"Toyota", 
		"Model"=>"Camry", 
		"Color"=>"Black", 
		"Mileage"=>56000, 
		"Status"=>"Available"),

    array("Make"=>"Honda", 
		"Model"=>"Accord", 
		"Color"=>"White", 
  		"Mileage"=>15000, 
		"Status"=>"Sold")  );

    print_r($cars);


?>
<!-- task 6 -->
<?php

echo "<table border='1'>";
echo "<tr>";
echo "<th>Make</th>";
echo "<th>Model</th>";
echo "<th>Color</th>";
echo "<th>Mileage</th>";
echo "<th>Status</th>";
echo "</tr>";
foreach($cars as $car){
    echo "<tr>";
    echo "<td>".$car['Make']."</td>";
    echo "<td>".$car['Model']."</td>";
    echo "<td>".$car['Color']."</td>";
    echo "<td>".$car['Mileage']."</td>";
    echo "<td>".$car['Status']."</td>";
    echo "</tr>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">prev page</a>
    <br>
    <a href="page2.php">page 2</a>
    <h3>insert number :</h3>
    <form action="" method="post">
        <input type="text" name="num">
        <button>click</button>




    </form>


</body>
</html>