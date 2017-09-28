<!DOCTYPE html>
<html>
<head>
    <?php
        include 'connection.php';
        session_start();
        $conn = $con;
        ?>
<meta charset="utf-8">
<title>Sign Up</title>
<link rel="stylesheet" href="css/register.css" />
</head>
<body>

<div class="form">
    <div class="icon"></div>
    <h1>KENYA POLICE SERVICE</h1>
    
    <div class="rule"></div>
    <div class="rule2">Register For the Kenya Police Crime Reporting Application</div>
    
    <form action="Sign_Up.php" method="post" name="register">
    <input class="styletxtbox" type="text" name="userfname" placeholder="Full Name" required />
    <br><br><br>
    <input class="styletxtbox" type="text" name="useridno" placeholder="Id Number" required />
    <br><br><br>
    <input class="styletxtbox" type="text" name="useremail" placeholder="E_mail" required />
    <br><br><br>
    <input class="styletxtbox" type="text" name="userloc" placeholder="Location" required />
    <br><br><br>
    <input class="styletxtbox" type="password" name="password" placeholder="Password" required />
    <br><br><br>
    <input class="styletxtbox" type="password" name="confirmpassword" placeholder="Confirm Password" required />
    <br><br><br>
<input class="btn btn-7h" name="submit" type="submit" value="Register" />
</form>
    <p>Already Registered? <a href='Login.php'>Login Here</a></p>
</div>

    <?php
        $uid = isset($_POST["useridno"]) ? $_POST["useridno"] : '';
        $ufname = isset($_POST["userfname"]) ? $_POST["userfname"] : '';
        $uemail = isset($_POST["useremail"]) ? $_POST["useremail"] : '';
        $uloc = isset($_POST["userloc"]) ? $_POST["userloc"] : '';
        $upwd = isset($_POST["password"]) ? $_POST["password"] : '';
        $uconpwd = isset($_POST["confirmpassword"]) ? $_POST["confirmpassword"] : '';
        
        $sqlcreate = "INSERT INTO `reporter`(`ID_No`, `Name`, `Location`, `E_mail`, `Pass`) VALUES ('$uid','$ufname',"
                . "'$uloc','$uemail','$upwd');";
        
        if($upwd == $uconpwd)
        {
            mysqli_query($GLOBALS['conn'], $sqlcreate);
            //header('Location: Login.php');
            /*alert("Success");
            $result = $db_handle->insertQuery($sqlcreate);
            if(!empty($result))
            {
                $error_message = "";
                $success_message = "You have been Successfully Registered";
                unset($_POST);
            }
            else
            {
                $error_message = "Problem in Registration. Please Try Again!";
            }*/
            
        }
        else
        {
            echo 'The Passwords do not Match';
            header('Location: Sign_Up.php');
        }
        
    ?>
</body>
</html>