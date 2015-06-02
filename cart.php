<?php
#init 
include('controller.php');
include('assets/data/database_link.php');
//Boucle de recupération de données stocké dans l'array qui va generer des articles de l'index (template)
//En prennant les clé / value du tableau comme paramètre
?>
<html>
<?php include ('html_head.php'); ?>
<body>
<?php include ('header.php');
session_start();
$is_user_registered = ((isset($_GET['pseudo'])) && (isset($_GET['pass'])));

if($is_user_registered) {
    $_SESSION['user-info'] = array(
        'username' => $_GET['pseudo'],
        'password' => $_GET['pass'],
    );
}

$user_try_to_connect = (isset($_GET['connect']));
    $client_name = $_GET['username'];
    $client_pw = $_GET['password'];
    foreach($_SESSION['user-info'] as $key => $value){
    if($key==$client_name){
        var_dump($_SESSION);
    }
}



?>

<?php
include('footer.php');
?>
</body>
</html>