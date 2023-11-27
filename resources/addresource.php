<?php
include('../conection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subcategoryId = $_POST['subcategory'];

    // Insert the new resource into the resource table
    $resourceQuery = "INSERT INTO ressource (Nom, SubcategoryID) VALUES ('$name', '$subcategoryId')";
    $add = mysqli_query($con, $resourceQuery);

    if ($add) {
        header('location: resource.php');
        exit();
    }
}
?>