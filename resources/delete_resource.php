<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'briefresources';
$con = mysqli_connect($host, $username, $password, $database);

if ($con) {
    echo 'Connected';
} else {
    echo 'Failed to connect: ' . mysqli_connect_error();
}


if (isset($_GET['id'])) {
    $ressourceid=$_GET['id'];
   
    $query = "DELETE FROM ressource WHERE ResourceID='$ressourceid'";
    
  $delte=mysqli_query($con, $query);
   echo $ressourceid;
   if ($delte) {
    header('location:resource.php');
}
}
?>
