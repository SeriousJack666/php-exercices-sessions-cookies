
<?php
    $login = $_POST["login"];
    $password = $_POST["password"];

    setcookie("login",$login, time()+60*60*24);
    setcookie("password",$password, time()+60*60*24);

    echo '<p>'."Ton login est : ".$login.'</p>';
    echo '<p>'."Ton mot de passe est : ".$password.'</p>';
?>

<?php
    echo '<form method="POST" action="index3.php">';
    echo '<input type="text" name="newLogin">';
    echo '<input type="text" name="newPassword">';
    echo '<input type="submit">';
?>

