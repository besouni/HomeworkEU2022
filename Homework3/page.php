<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    // task 1
        function tableGenerator() {
            echo "<table>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 10; $j++) {
                    $cols = rand(10, 99);
                    echo "<td> $cols </td>";

                }
                echo "</tr>";
            }
            echo "</table>";
        }
        tableGenerator();
    ?>

    <?php
    // task 2
    if (isset($_POST['submit'])) {
        function tableGenerator2($rows, $col, $min, $max) {
            echo "<table>";
            for ($i = 1; $i <= $rows; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $col; $j++) {
                    $col = rand($min, $max);
                    echo "<td> $col </td>";

                }
                echo "</tr>";
            }
            echo "</table>";
        }
        tableGenerator2($_POST['row'], $_POST['col'],$_POST['num1'],$_POST['num2']);

    }
    echo "<br>";
 
    
    ?>
 
    <form action="" method="post">
        <input type="number" name="row" placeholder="row">
        <input type="number" name="col" placeholder="col">
        <input type="number" name="num1" placeholder="num1">
        <input type="number" name="num2" placeholder="num2">
        <button name="submit" type="submit" >Click</button>
    </form>

    <form action="" method="post">
        <h2>task 5</h2>
        <input type="number" name="numNishani" placeholder="Insert number">
        <button name="task5" type="submit" >Click</button>
        
    </form>

    <?php 
    // task 5

    function countNum($num,$len){
        echo "shetanili ricxvi isset $num aris $len nishniani";
    }
    $getNum = isset($_POST['numNishani']) ? $_POST['numNishani'] : 0;
    $numNishani = strlen($getNum);
    countNum($getNum,$numNishani);
    
    ?>

    <form action="" method="post">
        <h2>task 6</h2>
        <input type="number" name="matrxM" placeholder="Insert matrxM">
        <input type="number" name="matrxN" placeholder="Insert matrxN">
        <input type="number" name="minNum" placeholder="Insert min num">
        <input type="number" name="maxNum" placeholder="Insert max num">
        <button name="task6" type="submit" >Click</button>
    </form>

    <?php
    if(isset($_POST['task6'])){
      $matrixM = $_POST['matrxM'];
      $matrixN = $_POST['matrxN'];
      $minNum = $_POST['minNum'];
      $maxNum = $_POST['maxNum'];
      $m = [];
      $sumColumn = 0;
      $sumColumn1 =0;
      for($i=0; $i<$matrixN; $i++){
         // $add = [];
         for($j=0; $j<$matrixM; $j++){
            $m[$i][$j] = rand( $minNum,  $maxNum);
        }
        $row =[];
        for($j=0; $j<$matrixM; $j++){
            $row[$j] = $m[$i][$j];
        }
        $sumColumn += $m[$i][0];
        $sumColumn1 += $m[$i][1];


    }
    echo "<br>";
  

    echo "<br>";
    echo "sum Column $sumColumn";
    echo "<br>";
    echo "sum Column $sumColumn1";

    echo "<br>";
    // print_r($m);
    echo "<br>";

      echo "<table>";
      for($i=0; $i<$matrixN; $i++){
        echo "<tr>";
        for($j=0; $j<$matrixM; $j++){
           echo "<td>".$m[$i][$j]."</td>";
        }
        echo "</tr>";
     }
     echo "<tr>";

     echo "<td> column 1 sum:".$sumColumn."</td>";
     echo "<td> column 2 sum:".$sumColumn1."</td>";
     echo "</tr>";

     echo "</table>";
    }

    ?>

    <?php
    $note ='';
    if(isset($_POST['checkPass'])){

        $password = isset($_POST['password']) ? $_POST['password'] : '';
        echo $password;
        if(strlen($password) > 8 && preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password) && preg_match('/[0-9]/', $password) && preg_match('/[!@#$%^&*()]/', $password)){
            $note = "<p style='color:green';>Your password is strong</p>";
        }else if(strlen($password) > 8 && preg_match('/[A-Z]/', $password)  && preg_match('/[0-9]/', $password)){
            $note = "<p style='color:orange';>Your password is medium</p>";
        }else if(strlen($password) < 8 && !preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password)){
            $note = "<p style='color:red';>Your password is weak</p>";
        }else{
            $note = "<p style='color:red';>Your password is weak</p>";
        }
    }
    
    ?>
    <form action="" method="post">
        <h2>task 9</h2>
        <input type="text" name="password" placeholder="insert pasword">
        <button name="checkPass">Pass check</button>
        <?=$note?>
    </form>

    <?php
    // task 10
    function checkUrl(){
        // get pages url
        $url = $_SERVER['REQUEST_URI'];
        if(preg_match('/[0-9]/', $url)){
           echo "<p style='color:red';>url has numbers</p>";
        }else{
            echo "<p style='color:green';>url has no numbers</p>";
        }


    }
    checkUrl();
    ?>

 
</body>
</html>