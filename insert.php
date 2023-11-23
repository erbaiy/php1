<?php
include("conection.php");

if (isset($_POST['submit'])) {
    $name = ($_POST['name']);
	
    $email = ($_POST['email']);
    $role = ($_POST['role']);
    // $squadid = ($_POST['squadid']);


    $query = "INSERT INTO utilisateur (Nom, Email) VALUES ('$name', '$email')";
    mysqli_query($con, $query);
};
?>