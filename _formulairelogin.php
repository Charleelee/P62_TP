<?php
define('SESSION_USERNAME','session_username');

function check_login(){
    $results = isset($_SESSION);
    return $results;
}

function do_login($username){
    $_SESSION[SESSION_USERNAME] = $username;
}

function do_logout(){
    unset($_SESSION['session_username']);
}
?>

    <?php if (check_login()) { ?>
        <span><?php echo $login_status; ?></span>
        <form method="post">
            <input type="submit" name="disconnect" id="disconnectsubmit" value="Déconnexion"/>
        </form>
    <?php } else { ?>
        <form method="GET">
            <input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>"/><br>
            <input type="password" name="password" id="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>"/><br>
            <input type="submit" name="connect" id="connectsubmit" value="Connexion"/>
        </form>
    <?php } ?>