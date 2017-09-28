<?php
        include 'connection.php';
        session_start();
        $conn = $con;
        $offno = isset($_POST["offno"]) ? $_POST["offno"] : '';
        $offname = isset($_POST["offname"]) ? $_POST["offname"] : '';
        $onduty = isset($_POST["on_duty"]) ? $_POST["on_duty"] : '';
        $upwd = isset($_POST["password"]) ? $_POST["password"] : '';
        $uconpwd = isset($_POST["confirmpassword"]) ? $_POST["confirmpassword"] : '';
        if($onduty == 'True' || $onduty == 'Yes')
        {
            $onduty = 1;
        }
        elseif ($onduty == 'False' || $onduty == 'No')
            {
                $onduty = 0;
            }
        $sqloffcreate = "INSERT INTO `officer`(`Officer_No`, `Name`, `On_Duty`, `Insp_ID`, `Opass`) VALUES ('$offno','$offname',"
                . "'$onduty','123','$upwd');";
        //INSERT INTO `officer`(`Officer_No`, `Name`, `On_Duty`, `Insp_ID`) VALUES ('23','123','1','1242');
        if($upwd == $uconpwd)
        {
            mysqli_query($GLOBALS['conn'], $sqloffcreate);
            header('Location: Inspector.php');
        }
        else
        {
            echo 'The Passwords do not Match';
            header('Location: offreg.php');
        }
    ?>