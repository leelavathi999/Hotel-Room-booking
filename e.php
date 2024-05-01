<html>
<head>
<style>
body{
    background-image: url(i3.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    color:lightgrey;

}
</style>
</head>
    <body>

<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$address = $_POST['address'];


$select1=$_POST['select1'];
$select2=$_POST['select2'];
$select3=$_POST['select3'];
$Check_in=$_POST['Check_in'];
$Check_out=$_POST['Check_out'];
$requirements=$_POST['requirements'];

$connect = mysqli_connect('localhost', 'root', '', 'Hotel');
if (!$connect) {
    die('Connect Error: ' . mysqli_connect_error());
}

$query = "CREATE TABLE IF NOT EXISTS PersonalData (
    Firstname VARCHAR(20) NOT NULL,
    Lastname VARCHAR(20) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Phonenumber VARCHAR(20) NOT NULL,
    Gender VARCHAR(10) NOT NULL,
    Your_Address VARCHAR(100)
)";

$query1 = "CREATE TABLE IF NOT EXISTS RoomData (
    Roomtype VARCHAR(20) NOT NULL,
    Beddingtype VARCHAR(20) NOT NULL,
    No_of_rooms VARCHAR(50) NOT NULL,
    Checkin VARCHAR(20) NOT NULL,
    Checkout VARCHAR(10) NOT NULL,
    Requirements VARCHAR(100)
)";



if (!mysqli_query($connect, $query)) {
    echo 'Table Creation Error: ' . mysqli_error($connect);
} else {
    $insertQuery = "INSERT INTO PersonalData (Firstname, Lastname, Email, Phonenumber, Gender, Your_Address) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connect, $insertQuery);
    mysqli_stmt_bind_param($stmt, "ssssss", $fname, $lname, $email, $phone, $gender, $address);
  
    
    
    if (mysqli_stmt_execute($stmt)) {
        if (!mysqli_query($connect, $query1)) {
            echo 'Table Creation Error: ' . mysqli_error($connect);
        } else {
            $insertQuery1 = "INSERT INTO RoomData (Roomtype, Beddingtype,No_of_rooms, Checkin, Checkout, Requirements) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt1 = mysqli_prepare($connect, $insertQuery1);
            mysqli_stmt_bind_param($stmt1, "ssssss",$select1, $select2, $select3,$Check_in,$Check_out, $requirements);
            
            if (mysqli_stmt_execute($stmt1)) {
                echo "<script> alert('Your data saved successfully') </script>";
                echo "<center><br><br><br><br><h1><br><br>Thanks for Submitting the Form</h>
                <h2>Stay here ! feel better !</h2><center>";
            } 
            else {
                echo 'Insertion Error: ' . mysqli_error($connect);
            }
            mysqli_stmt_close($stmt1);
            
        }
    } 
    else {
        echo 'Insertion Error: ' . mysqli_error($connect);
    }


    mysqli_stmt_close($stmt);
    
}





mysqli_close($connect);

?>
    </body>
</html>