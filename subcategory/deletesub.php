<?php
include('../conection.php');

if (isset($_GET['id'])) {
    $subcategoryid= $_GET['id'];
    echo  $subcategoryid;
    $query = "DELETE FROM  subcategory WHERE SubcategoryID ='" . $subcategoryid . "'";
    
     mysqli_query($con, $query);
}
    
?>