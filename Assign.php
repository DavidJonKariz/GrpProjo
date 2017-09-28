<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ASSIGNMENT FORM</title>
<link rel="stylesheet" href="css/ofstyle.css" />
</head>
<body>

<div class="form">
    <div class="icon"></div>
    <h1>KENYA POLICE SERVICE</h1>
    
    <div class="rule"></div>
    <div class="rule2">FILL IN THE FOLLOWING DETAILS.
        <a class="logout" href="Log_Out.php" > LOG OUT</a></div>
    
<form action="oForm.php" method="post" name="oForm">
   <input class="styletxtbox" type="text" name="caseno" placeholder="Case Number" required />
    <br><br><br>
    <input class="styletxtbox" type="text" name="offname" placeholder="Officer Name" required />
    <br><br>
    <hr><br>
<input class="btn btn-7h" name="submit" type="submit" value="ASSIGN" />
</form>
    
</div>

</body>
</html>