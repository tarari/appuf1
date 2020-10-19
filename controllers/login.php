<?php
    
    require APP.'/src/render.php';
    require APP.'/src/connect.php';
    $db=connectSqlite('app');
    echo render('login');
    