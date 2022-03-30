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
     $questions = [
         ['1+1','2'],
         ['2+2','4'],
         ['3+3','6'],
         ['3+4','7'],
         ['3+5','8'],
     ];
        
      
?>

     <a href="page.php">index page</a>
    <a href="page2.php">page 2</a>

<form  method="post">

<div class="contain">
            <h3>saxeli</h3>
            <input type="text" value="<?php echo isset($_POST['saxeli'])?>"name="saxeli">
            <h3>gvari</h3>
            <input type="text" value="<?php echo isset($_POST['gvari'])?>" name="gvari">
        </div>
        <br><hr>
    <?php for($i=0; $i<count($questions); $i++){  ?>
        <h1><?php echo $questions[$i][0]; ?></h1>

       <input type="text" name="ans<?php echo $i?>" placeholder="Answer.."> 

    <?php } ?>
    <br>
    <button>click</button>
 
    </form>


    <?php
   
    $answers = [];
    for($i=0; $i<count($questions); $i++){
        $answers[$i] =  isset($_POST['ans'.$i]) ? $_POST['ans'.$i] : '';
    }

    ?>
    <table>
        <form  method="post">
        <tr>
            <th>kitxvebi</th>
            <th>pasuxebi</th>
        </tr>

        <?php for($i=0; $i<count($questions); $i++){ ?>
        <tr>
            <td><?php echo $questions[$i][0]; ?></td>
            <td><?php echo $answers[$i]; ?></td>
            <td><input type="number" name="grade<?=$i?>"></td>
        </tr>
        <?php } ?>

        <td>
            <button name="grading">click</button>

        </td>
        </form>
    </table>

    <?php
   

     $saxeli = isset($_POST['saxeli']) ? $_POST['saxeli'] : '';
     $gvari = isset($_POST['gvari']) ? $_POST['gvari'] : '';
            echo $saxeli;
            echo "<br>";
            echo $gvari;
    $grades = [];
    for($i=0; $i<count($questions); $i++){
        $grades[$i] = isset($_POST['grade'.$i]) ? $_POST['grade'.$i] : 0;
    }
    $sum = 0;
    for($i=0; $i<count($questions); $i++){
        $sum += $grades[$i];
    }
    if(isset($_POST['grading'])){
        echo '<table>';
        echo '<tr>';
        echo '<th>kitxvebi</th>';
        echo '<th>pasuxebi</th>';
        echo '<th>grade</th>';
        echo '</tr>';
        for($i=0; $i<count($questions); $i++){
            echo '<tr>';
            echo '<td>'.$questions[$i][0].'</td>';
            echo '<td>'.$questions[$i][1].'</td>';
            echo '<td>'.$grades[$i].'</td>';
            echo '</tr>';
        }
        echo '<tr>';
        echo '<td>'.$saxeli.'</td>';
        echo '<td>'.$gvari.'</td>';
        echo '</tr>';
        echo '</table>';
        echo '<h1>Jami: '.$sum.'</h1>';
        // echo right answers
        echo '<h1>Right answers:</h1>';
        echo '<table>';
        echo '<tr>';
        echo '<th>kitxvebi</th>';
        echo '<th>pasuxebi</th>';
        echo '</tr>';

    }else{
        echo "";
    }
    ?>
    </body>
</html>