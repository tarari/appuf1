<?php
    require 'src/connect.php';
    require 'src/schema.php';

    $db=connectSqlite('app');
    schemaGenerator($db);