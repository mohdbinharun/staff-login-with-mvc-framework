<?php
include '../Models/Database.php';
if(isset($_POST['loginbtn'])){
    $username = $_POST['username'];
    $password =$_POST['security'];
    if(empty($username) && empty($password)){
        echo "empty username and password";
    }
    elseif(empty($username)){
        echo "User name empty";
    }
    elseif(empty($password)){
        echo "password empty";
    }
    else{
        $status = getlogin($username,$password);
        if($status){
            header("location:../Views/PatientView.php");
        }
    }
}

?>