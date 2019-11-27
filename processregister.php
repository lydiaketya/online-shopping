<?php 
session_start();
//create mysql connection
$conn=mysqli_connect("localhost","root","","css316");
//check the connection
if($conn){
$username=$_POST['username'];
$password=md5($_POST['password']);
//save the data into the table
$q="insert into student(username,password) values('$username','$password')";
//process query
$processq=mysqli_query($conn,$q);
//check if query was successfull
if($processq){
    echo"new user added successfull";
    //creating a session variable that stores username
    $_SESSION['usernames']=$username;
}
else{
    echo" query failed to add user";
}
}
else{
echo" the username is:" .$username."password: ".$password;
}
?>