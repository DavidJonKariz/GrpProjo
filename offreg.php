<!DOCTYPE html>
<html>
<head>
    <?php
        include 'connection.php';
        session_start();
        $conn = $con;
        ?>
<meta charset="utf-8">
<title>Officer Registration</title>
<link rel="stylesheet" href="css/register.css" />
</head>
<body>

<div class="form">
    <div class="icon"></div>
    <h1>KENYA POLICE SERVICE</h1>
    
    <div class="rule"></div>
    <div class="rule2">Register the Officer.</div>
    
    <form action="OfficerRegister.php" method="post" name="offregister">
    <input class="styletxtbox" type="text" name="offname" placeholder="Full Name" required />
    <br><br><br>
    <input class="styletxtbox" type="text" name="offno" placeholder="Officer_No" required />
    <br><br><br>
    Enter Yes or No Immediately Below for the On Duty Input:<br><br>
    <input class="styletxtbox" type="text" name="on_duty" placeholder="On Duty" required />
    <br><br><br>
    <input class="styletxtbox" type="password" name="password" placeholder="Password" required />
    <br><br><br>
    <input class="styletxtbox" type="password" name="confirmpassword" placeholder="Confirm Password" required />
    <br><br><br>
<input class="btn btn-7h" name="submit" type="submit" value="Register" />
</form>
    <p>Already Registered? <a href='Login.php'>Login Here</a></p>
</div>

    
</body>
</html>