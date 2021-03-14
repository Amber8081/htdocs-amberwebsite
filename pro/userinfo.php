<?php

$con =mysqli_connect('localhost','root','');
if($con)
{
    echo "connection successfull";
}
    else{
        echo "not connect";
    }
mysqli_select_db($con,'website');
$user=$_POST['user'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$comment=$_POST['comment'];

$query="insert into userinfo (user,email,contact,comment) values('$user','$email','$contact','$comment')";
mysqli_query($con,$query);

header('location:index1.php');






?>