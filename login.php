<?php 


    
    $dbServername="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName = "restaurant";

    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

    
    $username = $_POST['username'];
    $password = $_POST['password'];


    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);

    mysqli_connect('localhost','root', '');
    mysqli_select_db($conn,'restaurant');

    $result = mysqli_query($conn,"select * from login where username ='$username' and password='$password'") 
        or die ( 'Failed to query database' .mysqli_error());

        $row = mysqli_fetch_array($result);
        if($row['username'] == $username && $row['password'] == $password){
            echo 'Success';
        }else{
            echo 'Failed';
        }
    
        
?>