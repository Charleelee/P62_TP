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
//La variable est vraie si la clé pseudo passé fait 10 caractère et moins OU 4 caractère et plus
$does_password_from10_to4_chars = ((strlen($_GET['pass']) <= 10)&&(strlen($_GET['pass']) >=4));
//La variable est vraie  si les deux conditions sont respéctés
$does_password_valid = (($does_password_exist)&&($does_password_from10_to4_chars));
//La variable est vrai si la clé pass contient 2 int au minimum
$does_password_have_2int = preg_match('/(?<!\d)\d{2,10}(?!\d)/',$_GET['pass']);
//-------------------------------------------------------------------------------------------------------

//-----------------------------------VALIDATION DU 2ND PASSWORD------------------------------------------
//La variable est vraie si la clé verif_pass ( 2eme input mot de passe ) a été passé a cette page
$does_second_password_exist = (($does_query_string_exist)&&(isset($_GET['verif_pass'])));
//La variable est vraie si la clé pass et verif pass sont identique
$does_passwords_match = $_GET['pass']==$_GET['verif_pass'];
//-------------------------------------------------------------------------------------------------------

//On verifie si le premier caractère du username est une maj
if($does_username_firstchar_uppercase){
    //Si ça l'est, on verifie si il valide
    if($does_username_valid){
        $password=$_GET['pass'];
        //Si le username valide, on verifie que le password contient 2 entier
        if($does_password_have_2int){
            //Si ça l'est on verifie si le password valide
            if($does_password_valid) {
                //Si le mot de passe valide, on verifie si les 2 mot de passe correspondent
                if($does_passwords_match){
                    //Si ils correspondent, on commence une session user-info contenant son
                    //username et son password, et on le renvoi sur l'index
                    session_start();
                    $_SESSION['user-info'][$_GET['pseudo']] = [$_GET['pass']];
                    redirect_to('index.php');
                }else{
                    //Si le mot de passe ne correspondent pas, on le renvoi sur la page d'inscription
                    //avec une erreur
                    redirect_to('inscription.php?error=06');
                }
            }else{
                //Si le mot de passe ne valide pas, on le renvoi sur la page d'inscription avec une
                // erreur
                redirect_to('inscription.php?error=05');
            }
        }else {
            //Si le mot de passe ne contient pas 2 numéro on le renvoi sur la page d'inscription avec une
            // erreur
            redirect_to('inscription.php?error=04');
        }
    }else {
         //Si le username ne valide pas, on le redirige sur l'inscription avec une erreur
        redirect_to('inscription.php?error=03');
    }
}else{
    //Si le username ne commence pas par une majuscule, on le redirige sur l'inscription avec une erreur
    redirect_to('inscription.php?error=02');
}

    $password = isset($_GET['pass']) ? $_GET['pass'] : "";
    $nom = isset($_GET['nom']) ? $_GET['nom'] : "";
    $f_name = isset($_GET['f_name']) ? $_GET['f_name'] : "";
    $email = isset($_GET['email']) ? $_GET['email'] : "";



