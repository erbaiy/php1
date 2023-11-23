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

?>