<?php 
require_once __DIR__ . '/../conection/dp.php';

  if ($_SERVER['REQUEST_METHOD'] !== 'POST')
   { 
    header("Location: reg.php");
     exit; 
     }
      $name = trim($_POST['name'] ?? ''); 
      $email = trim($_POST['email'] ?? '');
       $password = $_POST['password'] ?? '';
        // Validation 
        if ($name === '') { die("Name is required"); } 
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { die("Invalid email"); }
         if (strlen($password) < 8) { die("Password must be at least 8 characters"); }
          // Hash password
           $hash = password_hash($password, PASSWORD_DEFAULT); 
           // Insert using PDO
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        $stmt->execute( [ ':name' => $name, ':email' => $email, ':password' => $hash ]);
            header("Location:log.php"); 
            exit; 
            
            
     ?>