<?php
include 'database.php';

$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$class=$_POST['class'];
$divi=$_POST['divi'];
$adde=$_POST['adde'];
$blood=$_POST['blood'];
$dob=$_POST['dob'];
$father=$_POST['father'];
$faqu=$_POST['faqu'];
$mother=$_POST['mother'];
$moqu=$_POST['moqu'];

// $sql="INSERT INTO users(Username, Email, Contact, Address, Message) VALUES ('$username','$email','$contact','$address','$message')";

$sql="INSERT INTO detail (id, fname, lname, class, divi, adde, blood, dob, father, faqu, mother, moqu) VALUES ('$id', '$fname', '$lname', '$class', '$divi', '$adde', '$blood', '$dob', '$father', '$faqu', '$mother', '$moqu') ";

$result=mysqli_query($conn, $sql);

if($result){
    header('Location: ./index.php');
}

?>