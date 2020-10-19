<?php
    require APP.'/src/connect.php';
    require APP.'/src/render.php';
    $db=connectSqlite('app');
    echo render('register');