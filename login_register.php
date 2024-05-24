<?php
require('connection.php');
session_start();


# for admin LOGIN
if(isset($_POST['admin-login']))
{
    $query="SELECT * FROM `admin` WHERE  `username`='$_POST[email_username]'";
    $result=mysqli_query($con1,$query);
     
    if($result)
    {
        if(mysqli_num_rows($result)> 0)
        {
             $result_fetch=mysqli_fetch_assoc($result);
             if($_POST['password']==$result_fetch['password'])
             { #if  password matched
               $_SESSION['admin_logged_in']=true;
               $_SESSION['username']=$result_fetch['username'];
               header('location:display_buyers.php');
             }
             else
             { #if password not matched
                echo"<script>
               alert('Incorrect Password');
               window.location.href='index.php';
               </script>";
             }
        }
        else
        {
            echo"<script>
               alert('Email or Username not registered');
               window.location.href='index.php';
               </script>";
        }

    }
    else
    {
        echo"<script>
               alert('Cannot Run Query');
               window.location.href='index.php';
               </script>";
    
    }
}

#for USER login
if(isset($_POST['user-login']))
{
    $query="SELECT * FROM `user` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
    $result=mysqli_query($con1,$query);
     
    if($result)
    {
        if(mysqli_num_rows($result)> 0)
        {
            
             $result_fetch=mysqli_fetch_assoc($result);
             if(password_verify($_POST['password'],$result_fetch['password']))
             { #if  password matched
               $_SESSION['user_logged_in']=true;
               $_SESSION['username']=$result_fetch['username'];
               header('location:index.php');
             }
             else
             { #if password not matched
                echo"<script>
               alert('Incorrect Password');
               window.location.href='index.php';
               </script>";
             }
        }
        else
        {
            echo"<script>
               alert('Email or Username not registered');
               window.location.href='index.php';
               </script>";
        }

    }
    else
    {
        echo"<script>
               alert('Cannot Run Query');
               window.location.href='index.php';
               </script>";
    
    }
}
#for USER registration
if(isset($_POST['user_register']))
{
    $user_exist_query="SELECT * FROM `user` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result=mysqli_query($con1,$user_exist_query);

    if($result)
    {
       if(mysqli_num_rows($result)>0)#it will be executed if username or email is already taken
        {
            #IF ANY USER HAS ALREADY TAKEN USERNAME OR EMAIL
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username'])
            {    
                #ERROR FOR USERNAME ALREDY REGISTERED
                echo"<script>
                alert('$result_fetch[username] - Username already Taken');
                window.location.href='index.php';
                </script>";
            }
            else
            {    
                #ERROR FOR EMAIL ALREDY REGISTERED
                echo"<script>
                alert('$result_fetch[email] - Email already Taken');
                window.location.href='index.php';
                </script>";
            }
        }
        else #it will be executed if no one can has taken username and email
        {    
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
            $query="INSERT INTO `user`(fullname,username, email, password) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
            if(mysqli_query($con1,$query))
            {
                #if data inserted succesfully
                echo"<script>
                alert('user Registered Succesfully');
                window.location.href='index.php';
                </script>";  
            }else
            {
                echo"<script>
               alert('Cannot Run Query');
               window.location.href='index.php';
               </script>";
            }
        }
    }else
    {
     echo"<script>
     alert('Cannot Run Query');
     window.location.href='index.php';
     </script>";
    }
}
?>