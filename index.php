 <?php
session_start();
include("database.php");
if(isset($_POST['btn_save']))
{
    $firstname= $_POST['FormFirstName'];
    $lastname= $_POST['FormLastName'];
    $email= $_POST['FormEmail'];
    $phone= $_POST['FormPhone'];
    $insta= $_POST['FormInsta'];
    $name= $_FILES['FormUpload']['name'];
    $type=$_FILES['FormUpload']['type'];
    $upload=file_get_contents($_FILES['FormUpload']['tmp_name']);

    mysqli_query($con,"INSERT INTO `Content`(`First_Name`, `Last_Name`, `Email`, `Phone`, `Insta`, `Upload`) VALUES ('$firstname','$lastname','$email','$phone','$insta','$upload')") 
                or die ("Sorry wrong data");
    header("location: index.html"); 
    mysqli_close($con);
}
?>

