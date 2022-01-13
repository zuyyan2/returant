<?php
session_start();
include('connect.php');

//For   Record
if (isset($_REQUEST['btnsign']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $Phonenumber = $_POST['Phonenumber'];
    $DateofBirth = $_POST['DateofBirth'];
    $Education = $_POST['Education'];
    $Gender = $_POST['Gender'];
   $password = $_POST['password'];

    $password = password_hash($password , PASSWORD_BCRYPT);


   if($password){
     
    if ( mysqli_query($con,"INSERT INTO  signup VALUES ('$userId','$username','$email','$Phonenumber',
    '$DateofBirth','$Education','$Gender','$password')") )
    {
        echo "<script> alert('Inserted') ; </script>";
        header("Location: login.php");
    }

      }else{
        echo "password are not matching";
    }

}


//insert into login 
if(isset($_POST['login'])){
    $email = $_POST['emailid'];
    $password = $_POST['password'];

    $email_search = "select * from signup where email='$email' ";
    $query  = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

      //  $pass = $email_pass['password'];

     // $pass_decode = password_verify($password, $pass);

        if($email_pass){
            echo "<script> alert('login successfully') ; </script>";
            header("Location: homepage.php");

        }
    else {
        echo "<script> alert('password incorrect') ; </script>";
    
 }   } 
 else {
    echo "<script> alert('email invalid') ; </script>";
    }

    
}

//For   Record
if (isset($_REQUEST['submit']))
{
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];
    $feedbackId = 'feedback'.rand(11111,99999);
    if ( mysqli_query($con,"INSERT INTO  feedback VALUES ('$feedbackId','$firstName',
    '$lastName','$Email','$Message')") )
    {
        echo "<script> alert('Inserted') ; </script>";
        header("Location: homepage.php");
    }
    else{
        echo $con->error;
    }
}

//for admin login
if(isset($_POST['Admin'])){
    $Username = $_POST['Username'];
    $pass = $_POST['pass'];

    $Username_search = "select * from adminpanel where user_name='$Username' ";
    $query  = mysqli_query($con, $Username_search);

    $Username_count = mysqli_num_rows($query);

    if($Username_count){
        $Username_pass = mysqli_fetch_assoc($query);

      //  $pass = $email_pass['password'];

     // $pass_decode = password_verify($password, $pass);

        if($Username_pass){
            echo "<script> alert('login successfully') ; </script>";
            header("Location: Admin/index.html");

        }
    else {
        echo "<script> alert('password incorrect') ; </script>";
    
 }   } 
 else {
    echo "<script> alert('username invalid') ; </script>";
    }

    
}

//For apply  Record
if (isset($_REQUEST['btnapply']))
{
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $EmailAddress = $_POST['EmailAddress'];
    $Position = $_POST['Position'];
    $Salary = $_POST['Salary'];
    $StartDate = $_POST['StartDate'];
    $Phone = $_POST['Phone'];
    $Fax = $_POST['Fax'];
    $Relocate = $_POST['Relocate'];
    $Organization = $_POST['Organization'];
    $Reference = $_POST['Reference'];

    $applyId = 'apply'.rand(11111,99999);
    if ( mysqli_query($con,"INSERT INTO  applyform VALUES ('$applyId','$FirstName',
    '$LastName','$EmailAddress','$Position','$Salary','$StartDate','$Phone','$Fax','$Relocate','$Organization','$Reference')") )
    {
        echo "<script> alert('Inserted') ; </script>";
        header("Location: thankyou.php");
    }
    else{
        echo $con->error;
    }
}
?>