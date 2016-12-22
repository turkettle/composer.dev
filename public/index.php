<?php

    require_once '../vendor/autoload.php';

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    $user = new StdClass();
    $user->id = 10;

    // create a log channel
    $log = new Logger('aston');
    $log->pushHandler(new StreamHandler('../log/aston.log', Logger::WARNING));

    // add records to the log
    $m = "L'utilisateur dont l'ID est " . $user->id . " s'est connecté avec succès.";
    kint::dump($log->error($m));
