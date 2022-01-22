<?php
if (isset($_POST['submit']) )
{
     $con = mysqli_connect("localhost","root","");
     mysqli_select_db($con, "petsite");
     if(mysqli_error($con)){
         die("connection to this database failed due to".mysqli_connect_error());
     }
     $password = $_POST['password'];
     $password2 = $_POST['password2'];
     $s="select * from userregistration where username='$_POST[username]'";
     $result= mysqli_query($con,$s);
     $num = mysqli_num_rows($result);

    if( $num == 1 ){
        echo "Username already taken";
    }elseif($password != $password2)
    {
        echo "<script>alert('Password do not match!'); window.location='signup.php'</script>";
    }
    else{
        $sql="INSERT INTO userregistration ( email, username, number,password) VALUES ( '$_POST[email]', '$_POST[username]', '$_POST[number]', '$_POST[password]')";
        mysqli_query($con, $sql);
        echo "<script>alert('Registration successful! Please proceed with log in process!'); window.location='register.php'</script>";
    }

     mysqli_close($con);

}
?>
