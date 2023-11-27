<?php

include('conection.php');
if ($con) {
    echo 'Connected';
} else {
    echo 'Failed to connect: ' . mysqli_connect_error();
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo  $id;
    $query = "DELETE FROM utilisateur WHERE UserID='$id'";
    
    $delete = mysqli_query($con, $query);
    if ($delete) {
        header('location:index.php');
    }}
?>
