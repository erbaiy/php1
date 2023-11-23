<?php
include '../conection.php';
if(isset($_GET['categoryID'])){
    $id=$_GET['categoryID'];
    $query = "DELETE FROM category WHERE CategoryID=$id";
    $delete = mysqli_query($con, $query);
    echo  $id;
    echo'ezrerzfgzfdsgesghsfdhsdf';
    if ($delete) {
        header('location:category.php');
    }
}


?>