<?php function redirect($url){ header("location:$url"); }

$authorized=array(
    'Jorel' =>'jorel12',
    'admin' => 'admin',
    'user' => 'user'
);

$user_is_trying_to_connect = isset($_POST['connect']);
$user_is_connected = isset($_SESSION['login-status']);
$user_exist = isset($_SESSION['user-info']);
$user_want_to_disconnect = isset($_POST['disconnect']);

if($user_is_trying_to_connect){
    foreach($authorized as $key => $value){
        if(($_POST['username']==$key)&&($_POST['password']==$value)){
            $_SESSION['login-status']='logged';
            redirect($_SERVER['PHP_SELF']);
        }else{
            unset($_SESSION['login-status']);
            redirect('inscription.php?error=07');
        }
    }
//    $_SESSION['login-status']='logged';
//    redirect($_SERVER['PHP_SELF']);
}
    ?>
    <div id="login_logout_form">
        <?php if ($user_is_connected) { ?>
            <span><?php foreach($_SESSION['user-info'] as $key => $value){
                    echo $key;
                } ; ?></span>
            <form method="post">
                <input type="submit" name="disconnect" id="se_deconnecter" value="Déconnexion"/>
            </form>
            <?php
            if ($user_want_to_disconnect){
                unset($_SESSION['login-status']);
                unset($_SESSION['cart']);
                redirect('index.php');
            }
            ?>
        <?php } else { ?>
            <form method="post" id="">
                <input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>"/><br>
                <input type="password" name="password" id="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>"/><br>
                <input type="submit" name="connect" id="connectsubmit" value="Connexion"/>
            </form>
        <?php } ?>
    </div>