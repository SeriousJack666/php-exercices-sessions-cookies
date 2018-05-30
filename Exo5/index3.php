<?php
$newLogin = $_POST["newLogin"];
$newPassword = $_POST["newPassword"];

setcookie("login",$newLogin, time()+60*60*24);
setcookie("password",$newPassword, time()+60*60*24);

echo '<p>'."Ton nouveau login est : ".$newLogin.'</p>';
echo '<p>'."Ton nouveau mot de passe est : ".$newPassword.'</p>';
?>