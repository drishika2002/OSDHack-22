<?php
session_start();
if (isset($_POST['submit']) )
{

     $con = mysqli_connect("localhost","root","");
     mysqli_select_db($con, "meme");
     if(mysqli_error($con)){
         die("connection to this database failed due to".mysqli_connect_error());
     }

     
     $s="select * from userregistration where email='$_POST[email]' && password='$_POST[password]'";
     $result= mysqli_query($con,$s);
     $num = mysqli_num_rows($result);

     $row = mysqli_fetch_array($result);
     if(is_array(($row)))
     {
        $_SESSION["email"] = $row["email"];
        $_SESSION["password"] = $row["password"];
     }
     else{
        echo "<script>alert('Your account does not exist... Please create one!'); window.location='register.php'</script>";
     }

    if($num){
        header('location:index.php');
    }
    else{
        echo "<script>alert('Your account does not exist... Please create one!'); window.location='register.php'</script>";
    }

        mysqli_close($con);
    }
?>
