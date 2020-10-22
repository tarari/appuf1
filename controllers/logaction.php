<?php
    require APP.'/src/connect.php';
    $db=connectSqlite('app');
    

    if (isset($_POST['email'])&&!empty($_POST['email'])
        &&isset($_POST['passw'])&&!empty($_POST['passw']))
        {
            $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
            $pass=filter_input(INPUT_POST,'passw',FILTER_SANITIZE_STRING);
            
            try{
            
                $stmt=$db->prepare('SELECT * FROM users WHERE email=:email LIMIT 1');
                $stmt->execute([':email'=>$email]);
                //amb sqlite no funciona
                $count=$stmt->rowCount();
            
                $row=$stmt->fetchAll(PDO::FETCH_ASSOC);
                
                $count=count($row);
                
                if($count==1){
                    
                    
                    $user=$row[0];
                    
                    if (password_verify($pass,$user['passw'])){
                        $_SESSION['uname']=$user['uname'];
                        $_SESSION['email']=$user['email'];
                        //si usuari valid
                        if(($_POST['remember-me']=='on'||$_POST['remember-me']=='1' )&& !isset($_COOKIE['remember'])){
                            $hour = time()+3600 *24 * 30;
                            setcookie('uname', $user['uname'], $hour);
                            setcookie('email', $user['email'], $hour);
                            setcookie('active', 1, $hour);          
                        }
                        header('Location:?url=home');
                    }
                }
                else{
                    header('Location:?url=login');
                }
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        else{
            header('Location:?url=login');
        }
?>