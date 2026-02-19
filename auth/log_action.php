<?php 
session_start(); 
require_once __DIR__ .'/../conection/dp.php';
     if($_SERVER['REQUEST_METHOD']!=='POST'){
         header("location:log.php");
          exit;
           }
            $email=trim($_POST['email']??'');
             $password=$_POST['password']??'';
              if ($email === '' || $password === '') {
                 header("Location: log.php?error=missing");
                  exit; 
                  } 
                  if(!filter_var($email,FILTER_VALIDATE_EMAIL ))
                  { header("location:log.php?error=email");
                  exit;
                  };



                  $stmt=$conn->prepare("SELECT id,name,email,password,role FROM users WHERE email=:email LIMIT 1" );
                   $stmt->execute([':email'=>$email]);
                    $user=$stmt->fetch(PDO::FETCH_ASSOC); 


                   if ( !$user || !password_verify($password, $user['password'])) 
                   { header("Location: log.php?error=invalid"); 
                   exit; } 
                   session_regenerate_id(true); // مهم لمنع session fixation 
                   $_SESSION['user'] =
                    [ 'id' => (int)$user['id'],
                     'name' => $user['name'],
                      'email' => $user['email'],
                       'role' => $user['role'],
                        ];
                        
                        header("Location: /smart_note/dashboard.php");
                         exit; 
                         ?>
                        