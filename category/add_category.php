<?php 
include'../conection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
  $query="INSERT INTO category(Nom) value ('$name')";
  mysqli_query($con,$query);
}

?>