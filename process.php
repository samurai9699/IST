<?php
 $server="localhost";
 $username="root";
 $password="";
 $database="zalego";

  $conn=mysqli_connect($server,$username,$password,$database);

   if(isset($_POST['submitbutton']))
{
      //fetch form data
      
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $email=$_POST['email'];
      $phonenumber=$_POST['phonenumber'];
      $message=$_POST['message'];

      //submit form data

       $insertdata=mysqli_query($conn,"INSERT INTO 
       contactus(firstname,lastname,email,phonenumber,message)VALUES('$firstname','$lastname','$email','$phonenumber','$message')");

  
  
      if($insertdata)
        {
         $response = "Data submitted successfully";
         }
    else{
        $response = "Error occured" .mysqli_error($conn);
        }
}

?> 