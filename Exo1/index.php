<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Exo Php- Superglobales, sessions et cookies</title>
    </head>

    <body>

        <?php
            echo '<p>'.$_SERVER['HTTP_USER_AGENT'].'</p>';
            echo '<p>'.$_SERVER['REMOTE_ADDR'].'</p>';
            echo '<p>'.$_SERVER['SERVER_NAME'].'</p>';
        ?>

        <a href="index2.php"></a>


    </body>

</html>