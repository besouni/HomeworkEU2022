<?php
// task 1
        $captcha ='';
        $note ='';
        $check='';
        $checkEmail ='';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $repass = $_POST['repassword'];

        if(preg_match('/[@]/', $email)){
            
            if($pass !== $repass){
                $note = 'Password not match';
            }

           else if(strlen($pass)>7 && preg_match("/[0-9]/", $pass)){
                $note = 'Good password';
            } else{
                $note = 'Bad password';
            }
        }else{
            $checkEmail = 'Email not valid';
        }


       
    }
    for($i=0; $i<5; $i++){
        $captcha .= rand(0,9);
    }
    if(isset($_POST['submit'])){
    
        if($_POST['captcha'] == $_POST['hcaptcha']){
            $check = 'Captcha is correct';
        }else{
            $check = 'Captcha is not correct';
        }
    }
  

?>
<?php include_once 'blocks/start.php'; ?>

    <form  method="post">
        <input type="text" name="email" placeholder="Your email...">
        <input type="password" name="password" placeholder="Your password">
        <input type="password" name="repassword" placeholder="Repeat your password">
        <?= $captcha ?>
        <input type="text" name="captcha" placeholder="Type a captcha number">
        <input type="hidden" name="hcaptcha" value="<?=$captcha ?>">
        <button name="submit">Click</button>
        <?= $note ?>
        <br>
        <?= $check ?>
        <br>
        <?= $checkEmail ?>
    </form>
<?php include_once 'blocks/end.php'; ?>