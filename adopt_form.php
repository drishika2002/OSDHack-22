<?php
if (isset($_POST['submit']) )
{   
     $con = mysqli_connect("localhost","root","");
     mysqli_select_db($con, "form");

     if(mysqli_error($con))
     {
         die("connection to this database failed due to".mysqli_connect_error());
     }
    
         $pettype= $_POST['pet'];
         $breed= $_POST['q80_howDid'];
         $line1 = $_POST['line1'];
         $city = $_POST['city'];
         $state = $_POST['state'];
         $zip = $_POST['zip'];
         $country  = $_POST['country'];
         $colour= $_POST['colour'];
         $gender= $_POST['gender'];
         $size =$_POST['q40_doYou40'];
         $age = $_POST['q18_describeYour'];
         $firstname = $_POST['first'];
         $lastname = $_POST['last'];
         $area=$_POST['area'];
         $num = $_POST['number'];
         $email= $_POST['q6_email6'];
         $info= $_POST['q28_pleaseDescribe'];
   
    $sql = "INSERT INTO table_name (firstname, lastname, area, num, email, line1 , city , state, zip, country, pettype, colour, breed, gender, size, age, info) VALUES ('$firstname','$lastname','$area','$num','$email','$line1','$city','$state','$zip','$country','$pettype','$colour','$breed','$gender','$size','$age','$info')";
    mysqli_query($con, $sql);

    echo "Adoption Form filled successfully!";
}
?>
