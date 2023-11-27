<?php
include("conection.php");

if (isset($_POST['submit'])) {
    $name = ($_POST['name']);
	
    $email = ($_POST['email']);
  
    
    // $squadid = ($_POST['squadid']);


    $query = "INSERT INTO utilisateur (Nom, Email) VALUES ('$name', '$email')";
    $add=mysqli_query($con, $query);
    if($add){
    header('location:index.php');
    }
};
?>