<?php
include "connection.php";

$username =$_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$filename=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];


$folder="/home/emizentech/Pictures/".$filename ; 
if (move_uploaded_file($tempname, $folder)) {

    $msg = "Image uploaded successfully";

}else{

    $msg = "Failed to upload image";

}

$query = "INSERT INTO users( username, password, email, image)VALUES('$username','$password','$email','$filename')";

$result = mysqli_query($conn,$query);

// print_r($result); die;


if($result){

    echo "data successfully insert";
}
else{
    echo "failed";
}
?>