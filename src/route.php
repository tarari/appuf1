<?php
    //
    function getRoute()
    {
        switch ($_SERVER['REQUEST_URI'] ?? '/'){
            case '/login': 
                return 'login';
            case '/register': 
                return 'register';
            case '/regaction': 
                return "regaction";
            case '/logaction': 
                return "logaction";
            case '/logout': 
                return "logout";
            default: 
                return 'home';
        }
            
    }