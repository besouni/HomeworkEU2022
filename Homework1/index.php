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
    <div class="container">
        <?php
            $saxeli = $_GET['saxeli'];
            $gvari = $_GET['gvari'];
            $dakavebuli_tanamd = $_GET['dakavebuli_tanamd'];
            $xelfasi = $_GET['xelfasi'];
            $dak_sashemosavlo = $_GET['xelfasi'] * 0.2;
            $daricxuli = $xelfasi - $dak_sashemosavlo;
            
            echo "<table>";
            echo "<tr>";
            echo "<th>Saxeli</th>";
            echo "<th>Gvari</th>";
            echo "<th>Dakavebuli tanamdeboba</th>";
            echo "<th>xelfasis raod</th>";
            echo "<th>dakavebuli sashemosavlo </th>";
            echo "<th>daricxuli xelfasi </th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>$saxeli</td>";
            echo "<td>$gvari</td>";
            echo "<td>$dakavebuli_tanamd</td>";
            echo "<td>$xelfasi</td>";
            echo "<td>$dak_sashemosavlo</td>";
            echo "<td>$daricxuli</td>";
            echo "</tr>";
            echo "</table>";
        ?>
       
       <?php 
            $saxeli = $_POST['saxeli'];
            $gvari = $_POST['gvari'];
            $semestri = $_POST['semestri'];
            $saswavlo_kursi = $_POST['saswavlo_kursi'];
            $nishani = $_POST['migebuli_nishani'];
            $leqtoris_saxeli = $_POST['leqtoris_saxeli'];
            $leqtoris_gvari = $_POST['leqtoris_gvari'];
            $dekanis_saxeli = $_POST['dekanis_saxeli'];
            $dekanis_gvari = $_POST['dekanis_gvari'];


            echo "<table>";
            echo "<tr>";
            echo "<th>Saxeli</th>";
            echo "<th>Gvari</th>";
            echo "<th>Semestri</th>";
            echo "<th>Saswavlo kursi</th>";
            echo "<th>Migebuli nishani</th>";
            echo "<th>Leqtoris saxeli</th>";
            echo "<th>Leqtoris gvari</th>";
            echo "<th>Dekanis saxeli</th>";
            echo "<th>Dekanis gvari</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>$saxeli</td>";
            echo "<td>$gvari</td>";
            echo "<td>$semestri</td>";
            echo "<td>$saswavlo_kursi</td>";
            echo "<td>$nishani</td>";
            echo "<td>$leqtoris_saxeli</td>";
            echo "<td>$leqtoris_gvari</td>";
            echo "<td>$dekanis_saxeli</td>";
            echo "<td>$dekanis_gvari</td>";
            echo "</tr>";
            echo "</table>";

       ?>
    </div>

    <h1>quiz answers</h1>

    <?php 
        if($_POST['q1'] == '1'){
            echo "<p>1. You are correct</p>";
        }else{
            echo "<p>1. You are wrong</p>";
        } if($_POST['q2'] == '2'){
            echo "<p>1. You are correct</p>";
        }else{
            echo "<p>1. You are wrong</p>";
        } if($_POST['q3'] == '3'){
            echo "<p>1. You are correct</p>";
        }else{
            echo "<p>1. You are wrong</p>";
        } if($_POST['q4'] == '4'){
            echo "<p>1. You are correct</p>";
        }else{
            echo "<p>1. You are wrong</p>";
        } 
    ?>
</body>
</html>