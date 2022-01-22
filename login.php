<?php
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

if( $num ==1){
    header('location:home.html');
}
else{
	header('location:index.php');
}

     mysqli_close($con);
}
?>
