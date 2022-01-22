<?php
if (isset($_POST['submit']) )
{
    
     $con = mysqli_connect("localhost","root","");
     mysqli_select_db($con, "form");
     if(mysqli_error($con)){
         die("connection to this database failed due to".mysqli_connect_error());
     }
    
         $w = $_POST['type'];
         $pettype= $_POST['pet'];
         $breed= $_POST['q80_howDid'];
         $line1 = $_POST['line1'];
         $line2 = $_POST['line2'];
         $city = $_POST['city'];
         $state = $_POST['state'];
         $zip = $_POST['zip'];
         $country  = $_POST['country'];
         $colour= $_POST['colour'];
         $gender= $_POST['gender'];
         $size =$_POST['q40_doYou40'];
         $age = $_POST['q18_describeYour'];
         $detail = $_POST['detail'];
         $firstname = $_POST['first'];
         $lastname = $_POST['last'];
         $area=$_POST['area'];
         $num = $_POST['number'];
         $email= $_POST['q6_email6'];
         $info= $_POST['q28_pleaseDescribe'];
         $image_id = $_POST['image']; 
     if($w=='lost')
     {
        $sql="INSERT INTO lf ( pettype, breed , line1 , line2, city , state, zip , country,colour ,gender ,size ,age ,detail ,firstname,lastname,area,num,email,info,image) VALUES ( '$pettype', '$breed', '$line1','$line2','$city', '$state','$zip','$country','$colour','$gender','$size','$age','$detail','$firstname','$lastname','$area','$num','$email','$info','$image_id')";
        mysqli_query($con, $sql);
       echo"Registration successful";
       
     }
     else
     {
        $sql="INSERT INTO found ( pettype, breed , line1 , line2, city , state, zip , country,colour ,gender ,size ,age ,detail ,firstname,lastname,area,num,email,info,image) VALUES ( '$pettype', '$breed', '$line1','$line2','$city', '$state','$zip','$country','$colour','$gender','$size','$age','$detail','$firstname','$lastname','$area','$num','$email','$info','$image_id')";
        mysqli_query($con, $sql);
        /*echo"Registration successful";*/
        echo "<script
type='text/jscript'>alert('Success!!.')</script>";
}
}
?>
