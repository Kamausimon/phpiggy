<?php


include __DIR__ . "/../src/App/functions.php"; //this is a not so strict way of importing the file

$app = include __DIR__ . "/../src/App/bootstrap.php"; //the bootstrap file is being imported and assigned to app


$app->run();//depending on what is in the bootstrap file we can use run to get the app started
