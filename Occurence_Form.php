<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>OCCURRENCE FORM</title>
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
    <div class="textarea">Description of the Incident.</div>
    <textarea rows="6" cols="100" name="Description" required> </textarea>
    <br><br>
    <div class="textarea"> Add any Evidence, if available. </div><br>
    <input type="file" name="image" />
    <hr><br>
<input class="btn btn-7h" name="submit" type="submit" value="ENTER" />
</form>
    
</div>

</body>
</html>