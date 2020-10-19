<?php

    function schemaGenerator(PDO $db,string $driver=null){
        if($driver='mysql'){
            $command='CREATE TABLE IF NOT EXISTS users(
                id INT AUTO_INCREMENT PRIMARY KEY,
                uname VARCHAR(100) NOT NULL,
                email VARCHAR(100) NOT NULL,
                passw VARCHAR(100) NOT NULL
                )';
        }else{
            $command='
            CREATE TABLE IF NOT EXISTS users(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            uname VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            passw VARCHAR(100) NOT NULL
        )';
        }
        
        try{
            $db->exec($command);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }