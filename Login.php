<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<div class="form">
    <div class="icon"></div>
    <h1>KENYA POLICE SERVICE</h1>
    
    <div class="rule"></div>
    <div class="rule2">Log In</div>
    
<form action="LoginCode.php" method="post" name="login">
    <input class="styletxtbox" type="text" name="userid" placeholder="Id Number" required />
    </br></br></br>
<input class="styletxtbox" type="password" name="password" placeholder="Password" required />
</br></br></br>
<input class="btn btn-7h" name="submit" type="submit" value="Login" />
</form>
    <p>Not registered yet? <a href='Sign_Up.php'>Register Here</a></p>
</div>

</body>
</html>