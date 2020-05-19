<?php
//Block 1
$user = "root"; //Enter the user name
$password = ""; //Enter the password
$host = "localhost"; //Enter the host
$dbase = "contentwriting"; //Enter the database
$table = "Content"; //Enter the table name

//Block 2
$firstname= $_POST['FormFirstName'];
$lastname= $_POST['FormLastName'];
$email= $_POST['FormEmail'];
$phone= $_POST['FormPhone'];
$insta= $_POST['FormInsta'];
$upload= $_POST['FormUpload'];
$sql= "INSERT INTO $table (First_Name, Last_Name, Email, Phone, Insta, Upload) VALUES ( '$firstname', '$lastname', '$email', '$phone' ,'$insta' ,'$upload')";


//Block 3
$connection= mysqli_connect ($host, $user, $password, $dbase);
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (!$connection)
{
die ('Could not connect:' . mysqli_connect_error());
}
if(mysqli_query($connection, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}

//Block 7
mysqli_close($connection);

?>

