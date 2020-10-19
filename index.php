<?php
    //configuracion entorno
    session_start();
    define('APP',__DIR__);
    require APP.'/src/route.php';
    //enrutamiento
    $controller=getRoute();
    //redirigir a ruta capturada
    require APP.'/controllers/'.$controller.'.php';
    