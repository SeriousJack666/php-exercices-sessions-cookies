
<?php
    $login = $_POST["login"];
    $password = $_POST["password"];
?>

<?php
    setcookie("login",$login, time()+60*60*24);
    setcookie("password",$password, time()+60*60*24);
?>

<?php
    echo '<p>'."Ton login est : ".$login.'</p>';
    echo '<p>'."Ton mot de passe est : ".$password.'</p>';
?>
