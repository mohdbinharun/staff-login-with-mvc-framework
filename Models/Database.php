<?php
include 'Conection.php';


function getlogin($username,$password){
    $con = getConnection();
    $sql="select * from staff where S_Username='$username' and Password='$password'";
    $result= mysqli_query($con,$sql);
    if($result->num_rows > 0){
        return true;
    }
    else{
        return false;
    }
}

function getViewPatient(){
    $con = getConnection();
    $sql1 = "select * from patient";
    $result=mysqli_query($con,$sql1);
    return $result;
}

function getInsertpatient($patientname,$patientemail,$patientusername,$patientpass,$patientgender,$patientphone,$patientaddress){
    $con = getConnection();
    $sql = "INSERT INTO `patient`(`Patient_Name`, `Email`, `Username`, `Password`, `Gender`, `Phone`, `Address`) VALUES ('$patientname','$patientemail','$patientusername','$patientpass','$patientgender',$patientphone,'$patientaddress');";
    mysqli_query($con,$sql);
    //header("Location:../Views/PatientView.php");
}
?>