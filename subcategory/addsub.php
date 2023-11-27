<?php
include('../conection.php');
echo'yoog';


if(isset($_POST['submit'])){
    $subcategoryName=$_POST['name'];
 
    
    
    $query="INSERT INTO subcategory(subname) VALUE ('$subcategoryName')";
    mysqli_query($con,$query);
}
?>