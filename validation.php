<?php
session_start();



$con=mysqli_connect('localhost','root');
if($con)
    {
        echo"connection Done";
    }
else{
    echo "connection Not Done ";
}
mysqli_select_db($con,'testdb');

$Name =$_POST['Name'];
$Password=$_POST['Password'];

$q="select * from signin where Name ='$Name && Password ='$Password'";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1)

{
$_SESSION['Name']= $Name;
$_SESSION['Password']= $Password;

header('location:home.php');



}
else {
    header('location:reg.php');
}

?>