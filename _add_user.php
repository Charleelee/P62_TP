<?php function redirect_to($url){header("location:$url");}


//La variable est vraie si l'on passe des paramètre a cette page
$does_query_string_exist = isset($_GET);

//------------------------VALIDATION DU USERNAME---------------------------------------------------------
//La variable est vraie si la clé pseudo a été passé a cette page
$does_username_exist = (($does_query_string_exist)&&(isset($_GET['pseudo'])));
//La variable est vraie si la clé pseudo passé fait 10 caractère ou moins OU 3 caractère ou plus
$does_username_from3_to10_chars = ((strlen($_GET['pseudo']) <= 10)&&(strlen($_GET['pseudo'])>=3));
//La variable est vraie si la première lettre du pseudo est une majuscule
$does_username_firstchar_uppercase = ctype_upper($_GET['pseudo'][0]);
//La variable est vraie si les 2 conditions précédentes le sont
$does_username_valid = (($does_username_exist)&&($does_username_from3_to10_chars)&&($does_username_firstchar_uppercase));
//-------------------------------------------------------------------------------------------------------

//------------------------VALIDATION DU PASSWORD --------------------------------------------------------
//La variable est vraie si la clé pass ( input mot de passe ) a été passé a cette page
$does_password_exist = (($does_query_string_exist)&&(isset($_GET['pass'])));

$does_password_have_2int =
//La variable est vraie si la clé pseudo passé fait 8 caractère ou moins OU 2 caractère ou plus
$does_password_valid = (($does_password_exist)&&(strlen($_GET['pass']) <= 8)&&(strlen($_GET['pass']) >=2));

//La variable est vraie si la clé verif_pass ( 2eme input mot de passe ) a été passé a cette page
$does_second_password_exist = (($does_query_string_exist)&&(isset($_GET['verif_pass'])));
//La variable est vraie si la clé pass et verif pass sont identique
$does_passwords_match = $_GET['pass']==$_GET['verif_pass'];




//On verifie si le username valide
if($does_username_firstchar_uppercase){
    //Si le username valide, on verifie si le password valide
    if($does_username_valid){
        $password=$_GET['pass'];
        //Si le username & le mot de passe valident, on verifie si les mot de passe match
        if($does_password_valid){
            //Si le username & le mot de passe valident & que les mot de passe matchent,
            //On accepte l'inscription en l'envoyant sur l'accueil;
            if($does_passwords_match) {
                session_start();
                $_SESSION['user-info'][$username] = $password;
                redirect_to('index.php');
            }else{
                redirect_to('inscription.php?error=05');
            }
        //Si les mot de passe ne match pas, on le renvoi sur la page d'inscription avec une erreur
        }else {
            redirect_to('inscription.php?error=04');
        }
    //Si le password ne valide pas, on le redirige sur l'inscription avec une erreur
    }else {
        redirect_to('inscription.php?error=03');
    }
//Si le username ne valide pas, on le redirige sur l'inscription avec une erreur
}else{
    redirect_to('inscription.php?error=02');
}

    $password = isset($_GET['pass']) ? $_GET['pass'] : "";
    $nom = isset($_GET['nom']) ? $_GET['nom'] : "";
    $f_name = isset($_GET['f_name']) ? $_GET['f_name'] : "";
    $email = isset($_GET['email']) ? $_GET['email'] : "";



