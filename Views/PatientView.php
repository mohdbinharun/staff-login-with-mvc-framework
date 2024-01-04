<?php 
require_once('../Models/Database.php');
$allcount = getViewPatient();
$result = getViewPatient();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body><center>
    <table border="1" style="width: 700px;">
        <tr style="text-align:right;height: 50px;">
        <td>
        </td>
        </tr>
        <tr>
        <td><h3>Patient List</h3> <br>
            <center>
            <form action="../Controllers/InsertPatientViewControl.php"><button type="submit" name="add">Register Patient</button> </form> 
            <table border="1" style="width: 500px; text-align:center;">
                <tr style="text-align:center;">
                  <br><br>
                    <th>Patient_Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
                <?php while($allcount=mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $allcount['Patient_Name'];?></td>
                    <td><?php echo $allcount['Email']; ?></td>
                    <td><?php echo $allcount['Username'];?></td>
                    <td><?php echo $allcount['Gender']; ?></td>
                    <td><?php echo $allcount['Phone']; ?></td>
                    <td><?php echo $allcount['Address'];?></td>
                <?php } ?>
                </tr>
            </table><br><br>
            </center>

        </td>
        </tr> <br><br><br><br>

        </tr>
    </table></center>
</body>
</html>