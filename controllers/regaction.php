<?php
    require APP.'/src/connect.php';
    $db=connectSqlite('app');

    if (isset($_POST['email'])&&!empty($_POST['email'])
        &&isset($_POST['uname'])&&!empty($_POST['uname']
        &&isset($_POST['passw'])&&!empty($_POST['passw'])
        &&isset($_POST['passw2'])&&!empty($_POST['passw2'])
        ))
        {
        $uname=filter_input(INPUT_POST,'uname',FILTER_SANITIZE_STRING);
        $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
        $pass=filter_input(INPUT_POST,'passw',FILTER_SANITIZE_STRING);
        $pass2=filter_input(INPUT_POST,'passw2',FILTER_SANITIZE_STRING);
        if($pass2===$pass){
           
            $passw=password_hash($pass,PASSWORD_BCRYPT,['cost'=>4]);
            try{
                $stmt=$db->prepare('INSERT INTO users VALUES(null,?,?,?)');
                $stmt->execute([$uname,$email,$passw]);
            }catch(PDOException $e){
                die($e->getMessage());
            }
            header('Location:?url=home');
            

        }
        
        
        //si usuari valid
        if(($_POST['remember']=='on')&& !isset($_COOKIE['remember'])){
            
                $hour = time()+3600 *24 * 30;
                setcookie('email', $row['email'], $hour);
                setcookie('active', 1, $hour);
                
        }

    }