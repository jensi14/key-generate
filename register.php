<?php
include 'connect.php';

if(isset($_POST['signUp']))
{
    $FirstName=$_POST['fname'];
    $LastName=$_POST['lname'];
    $Email=$_POST['email'];
    $Passowrd=$_POST['password'];
    $Passowrd=md5($Passowrd)
    $cheackEamil="SELECT * From admin Where email='$Email'";
    $result=$conn->query($cheackEamil);
    if($result->num_rows>0)
    {
        echo "Email Address Already Exists!"
    }
    else
    {
        $insertQuery="INSERT INTO admin(FirstNamr,LastName,Email,Password)
         VALUES('$FirstName','$LastName','$Email','$Passowrd')";
         if($conn->query($insertQuery)==TRUE)
         {
            header("location":'index.php');
         }
         else{
            echo "Error".$conn->error;
         }
    }
}
if(isset($_POST['signIn']))
{
    $Email=$_POST['email'];
    $Passowrd=$_POST['password'];
    $Passowrd=md5($Passowrd); 

    $sql="SELECT * FROM admim WHERE email='$Email' and password='$Password'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email']
        header("Location:KeyGenerate.php");
        exit();

    }
    else
    {
        echo "Not Found,Incorrect Email or Passowrd "
    }
}
?>
