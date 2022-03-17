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
    <form action="index.php" method="get">
        <div class="container">
            <table>
                <tr>
                    <th>Saxeli</th>
                    <th>Gvari</th>
                    <th>Dakavebuli tanamdeboba</th>
                    <th>xelfasi</th>
                </tr>
                <tr>
                    <td><input type="text" name="saxeli" placeholder="saxeli"></td>
                    <td><input type="text" name="gvari" placeholder="gvari"></td>
                    <td><input type="text" name="dakavebuli_tanamd" placeholder="dakavebuli_tanamd"></td>
                    <td><input type="text" name="xelfasi" placeholder="xelfasi"></td>
                </tr>
            </table>
        </div>
        <input type="submit" value="Submit">
    </form>
    <form action="index.php" method="post">
        <div class="container">
            <table>
                <tr>
                    <th>Saxeli</th>
                    <th>Gvari</th>
                    <th>semestri</th>
                    <th>sasw_kursi</th>
                    <th>nishani</th>
                    <th>leqtoris saxeli</th>
                    <th>leqtoris gvari</th>
                    <th>dekanis saxeli</th>
                    <th>dekanis gvari</th>
                </tr>
                <tr>
                    <td><input type="text" name="saxeli" placeholder="saxeli"></td>
                    <td><input type="text" name="gvari" placeholder="gvari"></td>
                    <td><input type="text" name="semestri" placeholder="semestri"></td>
                    <td><input type="text" name="saswavlo_kursi" placeholder="saswavlo_kursi"></td>
                    <td><input type="text" name="migebuli_nishani" placeholder="migebuli_nishani"></td>
                    <td><input type="text" name="leqtoris_saxeli" placeholder="leqtoris_saxeli"></td>
                    <td><input type="text" name="leqtoris_gvari" placeholder="leqtoris_gvari"></td>
                    <td><input type="text" name="dekanis_saxeli" placeholder="dekanis_saxeli"></td>
                    <td><input type="text" name="dekanis_gvari" placeholder="dekanis_gvari"></td>
                </tr>
            </table>
        </div>
        <input type="submit" value="Submit">
    </form>


    <h1>quiz</h1>

    <form action="index.php" method="post">
        <h1>Shekitxva 1</h1>    
        <h2>Lorem, ipsum dolor sit amet consectetur ?</h2>
       
       <label for="radio">pasuxi 1</label>
       <input type='radio' name='q1' value='1'>
       <label for="radio">pasuxi 2</label>
       <input type='radio' name='q1' value='2'>
       <br>
       <h1>Shekitxva 2</h1>    
        <h2>Lorem, ipsum dolor sit amet consectetur ?</h2>
       
       <label for="radio">pasuxi 1</label>
       <input type='radio' name='q2' value='1'>
       <label for="radio">pasuxi 2</label>
       <input type='radio' name='q2' value='2'>
       <br>
       <h1>Shekitxva 3</h1>    
        <h2>Lorem, ipsum dolor sit amet consectetur ?</h2>
       
       <label for="radio">pasuxi 1</label>
       <input type='radio' name='q3' value='1'>
       <label for="radio">pasuxi 2</label>
       <input type='radio' name='q3' value='2'>
       <br>
       <h1>Shekitxva 4</h1>    
        <h2>Lorem, ipsum dolor sit amet consectetur ?</h2>
       
       <label for="radio">pasuxi 1</label>
       <input type='radio' name='q4' value='1'>
       <label for="radio">pasuxi 2</label>
       <input type='radio' name='q4' value='2'>
       <br>
         <button>submit</button>
    </form>
  
</body>
</html>