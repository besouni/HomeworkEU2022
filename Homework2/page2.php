<!-- task 7 -->
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

$errName = $errEmail = $errWeb = $errGender = $errComment =  '';
$name = $email = $website = $comment = $gender= "";

if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']) ;
    $email =htmlspecialchars($_POST['email']) ;
    $website =htmlspecialchars($_POST['website']) ;
    $comment =htmlspecialchars($_POST['comment']) ;
    $gender =htmlspecialchars($_POST['gender']) ;

    if(empty($name)){
        $errName = "Name field is empty";
    }
     if(empty($email)){
         $errEmail = "Email field is empty";
    }
     if(empty($website)){
        $errWeb = "Website field is empty";
    }
     if(empty($comment)){
        $errComment = "Comment field is empty";
    }if(empty($gender)){
        $errGender = "Gender field is empty";
    }
}

?>
    <a href="index.php">prev page</a>
    <br>
    <a href="page.php">page 2</a>
    <form action="" method="post">
 
        <div class="box">
            <h3>Name</h3>
            <input type="text" value="<?php echo $name?>" name="name" placeholder="name">
             <span style="color: red;"><?=$errName?><span>
        </div>
        <div class="box">
            <h3>Email</h3>
            <input type="text" value="<?php echo $email?>" name="email" placeholder="email">
             <span style="color: red;"><?=$errEmail?><span>
        </div>
        <div class="box">
            <h3>Website</h3>
            <input type="text" value="<?php echo $website?>" name="website" placeholder="website">
             <span style="color: red;"><?=$errWeb?><span>
        </div>
        <div class="box">
            <h3>Comment</h3>
            <textarea name="comment" id="" value="<?php echo $comment?>" cols="30" rows="10" placeholder="comment"></textarea>
             <span style="color: red;"><?=$errComment?><span>
        </div>
        <div class="box">

            <h3>gender: </h3>
            <br>
            <h3>male</h3>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
            <h3>female</h3>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
            <h3>other</h3>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">  
        <span style="color: red;"><?=$errGender?><span>

        </div>
             <button name="submit">submit</button>
       
    </form>
    <div class="cont">
            <h1>Your input:</h1>

<?php
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
?>
        </div>
</body>
</html>