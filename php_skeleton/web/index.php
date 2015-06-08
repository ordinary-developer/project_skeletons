<?php
    namespace base;

    $loader = require_once __DIR__ . '/../vendor/autoload.php';

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>TITLE</title>
    </head>

    <body>
        <?php
            use logic;
            $baseClass = new logic\BaseClass();
            echo $baseClass->getOne();

            use db;
            $dbBaseClass = new db\DBBaseClass();
            echo $dbBaseClass->getOne();
        ?>
    </body>
</html>
