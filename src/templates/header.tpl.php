<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>App</title>
</head>
<body>
    <header>
   
    <nav class="nav">
        <ul><li><?php 
                if (isset($_SESSION['uname'])){
                   echo '<a href="/logout">Logout</a></li>';
                }
                else{
                    echo '<a href="login">Login</a></li>';
                }
        ?>
            
        <li><a href="register">Register</a></li>
        </ul>
    </nav>
    <hr>
    </header>
