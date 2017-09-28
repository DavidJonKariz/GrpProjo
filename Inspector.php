<!DOCTYPE html>
<html >
<head>
    <?php
        include 'connection.php';
        session_start();
        ?>
  <meta charset="UTF-8">
  <title>Inspector Homepage</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600'>

      <link rel="stylesheet" href="css/style_1.css">
<style>
.error {color: #FF0000;}
</style>
  
</head>
<body>  
    <div class="main">
    <div class="icon"></div>
    <h1 style="text-align: center;">KENYA POLICE SERVICE</h1>
    <link rel="shortcut icon" type="image/x-icon" href="pictures/Kenya_Police_Flag.gif"/>
    
    <div class="rule">
        <div class="links"><nav><ul>
                    <li><a href="Assign.php"> ASSIGNMENT </a></li>
                    <li><a href="offreg.php"> OFFICER REGISTER </a></li>
                    <li><a href="Log_Out.php"> LOG OUT</a></li>
            </ul></nav></div>
    </div>
    <div class="rule2"></div>
        <div class="content"><section>
                <p>WELCOME, TO THE HOME PAGE.</p>
                <p>SELECT THE ASSIGNMENT OPTION TO ASSIGN AN OFFICER.</p>
                <p>AND THE REGISTER OPTION TO REGISTER AN OFFICER.</p>
                <p>THANK YOU.</p>
        </section></div>
    </div>
    

</body>
</html>
