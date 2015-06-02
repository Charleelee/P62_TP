<!DOCTYPE html>
<html>
<?php include ('html_head.php'); ?>
<body>
<?php include ('header.php');
?>
<form id="inscription_form" name="inscription_form" method="get" action="cart.php">
    <fieldset id="login_info">
        <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo" id="pseudo">
        <label for="pwrd">Mot de passe :</label>
            <input type="text" name="pass" id="pwrd">
    </fieldset>
    <fieldset id="user_info">
        <label for="name">Nom :</label>
            <input type="text" id="name">
        <label for="f_name">Nom de famille :</label>
            <input type="text" id="f_name">
        <label for="email">Email :</label>
            <input type="text" id="email">
        <input type="submit" value="Inscription">
    </fieldset>
</form>
<?php include ('footer.php'); ?>
</body>
</html>