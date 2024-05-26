<?php
$con = mysqli_connect('localhost' , 'root' , '' , 'project') ;

#REGISTER
if(isset($_POST['sign'])){
    $user  = $_POST['username'];
    $email = $_POST['email'];
    $mob   = $_POST['mobile'];
    $pass  = $_POST['password'];
    $sql = "select * from register where username= '$user' or email = '$email' or number = '$mob' ";
    $query = mysqli_query($con,$sql);
    if($query){
        if(mysqli_num_rows($query)>0){
            $data = mysqli_fetch_assoc($query);
            if($data['username']  ==  $user ){
                echo "<script> alert('this username is alredy exist ')</script>";
            }
            else if($data['email']  ==  $email ){
                echo "<script> alert('this email is alredy exist ')</script>";
            }
            else{
                echo "<script> alert('this mobile number is alredy exist ')</script>";
            }
        } 
        else{
            $entry = "insert into register (username,email,number,password) values('$user','$email','$mob','$pass')";
            mysqli_query($con,$entry);
            echo "<script> alert('registered successfully')</script>";
            echo "<script>window.open('home.php','_self')</script>";
        }
    }
    else{
        echo "<script> alert('not able to register')</script>";
    }
}

#LOGIN
if(isset($_POST['login'])){
    $l_email = $_POST['l-email'];
    $l_password  = $_POST['l-password'];
    $sql     = "select * from register where email='$l_email' ";
    $query   = mysqli_query($con,$sql);
    if($query){
        if(mysqli_num_rows($query)>0){   
            $data = mysqli_fetch_assoc($query);
            if($l_password == $data['password']){
                echo "<script>alert('welcome $data[username]')</script>";
                echo "<script>window.open('home.php','_self')</script>";
            } 
            else{
                echo "<script>alert('Enter valid password or forgot it')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            }
                
                
            
        }
        else{
            echo "<script>alert('Enter valid email-id & password')</script>";
            echo "<script>window.open('login.php','_self')</script>";
        }
    }
    else{
        echo "<script>alert('wrong query')</script>";
    }
}

#RESET PASSWORD
if(isset($_POST['reset'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql     = "select * from register where email='$email' ";
    $query   = mysqli_query($con,$sql);
    if(mysqli_num_rows($query)>0){ 
        $sql2 = "update register set password = '$password' where email = '$email' ";
        $query2 = mysqli_query($con,$sql2);
        if($query){
            echo "<script>alert('Password forgoted succesfully....')</script>";
            echo "<script>window.open('login.php','_self')</script>";
        }
        else{
            echo "<script>alert('wrong query')</script>";
        }
    }
    else{
        echo "<script>alert('Enter valid email-id')</script>";
        echo "<script>window.open('forgot.php','_self')</script>";
    }
}
?>