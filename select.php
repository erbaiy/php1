 <?php include('conection.php'){
    if(issit($_POST['submit'])){
        $name = ($_POST['name']);
        $email = ($_POST['email']);
        $query="SELECT * FROM utilisateur WHERE NOM= $name";

    }
}