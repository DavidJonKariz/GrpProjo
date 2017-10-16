<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
           include_once("connection.php");

             if(isset($_POST['submit'])){
                 $case=$_POST['case'];
                 $Officer_No=$_POST['Officer_No'];
                 $Name=$_POST['ID_No'];
                 
               

             if (mysqli_query($con, $insertSql)) {
                  echo "User details inserted successfully";
                } else {
                  echo "Error: " . $insertSql . "<br>" . mysqli_error($con);
               }

               $sql="SELECT* Officer_No, ID_No FROM* cases";

               $result=$con->query($sql);

               if ($results->num_rows>0){
                while ($row=$results->mysql_fetch_assoc()) {
                    echo "<br> Officer No. : ".$row['Officer_No']."<br> Reporter ID : ".$row[`ID_No`]."<br>";
                                    }
                                   }
                    
                                 mysqli_close($con);
                             }
                     
        ?>
         <div class="main">CE</h1>
    <link rel="shortcut icon" type="image/x-icon" hr
    <div class="icon"></div>
    <h1 style="text-align: center;">KENYA POLICE SERVIef="pictures/Kenya_Police_Flag.gif"/>
    
    <div class="rule">
       
    </div>
    <div class="rule2"></div>
        <div class="content">
            <section>
                <p>FEEDBACK MODULE.</p>
     <form >
    Case<br><input class="text" name="case"><br>
    Officer Number:<br><input type="text" name="Officer_No"><br>
    Reporter ID No: <br><input type="text" name="ID_No"><br>
    <div class="textarea">Case Report</div>
    <textarea rows="6" cols="100" name="Case Description" required> </textarea>
    <br><br>
    <input class="btn btn-7h" name="submit" type="submit" value="ENTER" />
</form>  
        </section></div>
    </div>
    

</body>
</html>
    </body>
</html