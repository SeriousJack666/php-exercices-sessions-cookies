<?php

    session_start();
    echo '<p>'.$_SESSION["nom"].'</p>';
    echo '<p>'.$_SESSION["prenom"].'</p>';
    echo '<p>'.$_SESSION["age"].'</p>';

?>