<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Admission Number: 091937
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            //show a message that the user has been logged out
            echo "You have been successfully logged out";
            
            header('Location: index.php');
        ?>
    </body>
</html>
