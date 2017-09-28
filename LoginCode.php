<?php
            include 'connection.php';
            session_start();
            $sqlLogin = "SELECT * FROM reporter";
            $sqlAdminLogin = "SELECT * FROM inspector";
            $resultadmin = mysqli_query($con,$sqlAdminLogin);
            $result = mysqli_query($con,$sqlLogin);
            //from form
            $usid = isset($_POST["userid"]) ? $_POST["userid"] : '';
            $upass = isset($_POST["password"]) ? $_POST["password"] : '';
            //for Inpsector Login
            while ($row = mysqli_fetch_array($resultadmin, MYSQLI_BOTH))
            {
                $Inpid = $row['Insp_ID'];
                $Inpname = $row['Name'];
                $inpass = $row['Ipass'];
                
                
                $_SESSION['username'] = $Inpname;
                $_SESSION['userid'] = $Inpid;
                $_SESSION['password'] = $inpass;
                
                if($usid == $Inpid && $upass == $inpass)
                {
                    header('Location: Inspector.php');
                }
                elseif($usid != $Inpid && $upass != $inpass)
                {
                    //for Reporter Login
                    unset($_SESSION['username']);
                    unset($_SESSION['password']);
                    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH))
                    {
                        $repid = $row['ID_No'];
                        $repname = $row['Name'];
                        $repass = $row['Pass'];

                        $_SESSION['username'] = $repname;
                        $_SESSION['userid'] = $repid;
                        $_SESSION['password'] = $repass;

                        if($usid == $repid && $upass == $repass)
                        {
                            header("Location: Homepage.php");
                        }
                        elseif(($usid != $repid && $upass != $repass))
                        {
                            
                            //header("Location: index.php");
                        }
                    }
                    
                }
            }
            
        ?>