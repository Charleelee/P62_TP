<!DOCTYPE html>
<html>
<?php include ('html_head.php');
?>
<body>
<?php include ('header.php');
if(isset($_GET)&&(isset($_GET['error']))){
    switch($_GET['error']){
        case'01':
            $error = 'Vous devez être connecté pour ajouter des item au cart';
            break;
        case'02':
            $error = 'Votre pseudo doit commencer par une majuscule !';
            break;
        case'03':
            $error = 'Votre pseudo doit faire entre 3 et 10 caractères !';
            break;
        case'04':
            $error ='Votre mot de passe doit contenir au minimum 2 chiffres !';
            break;
        case'05':
            $error='Votre mot de passe doit faire entre 4 et 10 caractères!';
            break;
        case'06':
            $error = 'Vos mot de passe ne correspondent pas !';
            break;
    }
}else{
    $error=null;
}
?>
<h1><?php echo $error ?></h1>
<form id="inscription_form" name="inscription_form" method="get" action="_add_user.php">
    <fieldset id="login_info">
        <label for="pseudo">Pseudo :</label>
            <input required="required" type="text" name="pseudo" id="pseudo">
        <label for="pwrd">Mot de passe :</label>
            <input required="required" type="text" name="pass" id="pwrd">
        <label for="verif_pwrd">Confirmez:</label>
            <input required="required" type="text" name="verif_pass" id="verif_pwrd">
    </fieldset>
    <fieldset id="user_info">
        <label for="name">Nom :</label>
            <input type="text" name="nom" id="name">
        <label for="f_name">Nom de famille :</label>
            <input type="text" name="f_name" id="f_name">
        <label for="email">Email :</label>
            <input type="text" name="email" id="email">
        <input type="submit" value="Inscription">
    </fieldset>
</form>
<?php include ('footer.php'); ?>
</body>
</html>