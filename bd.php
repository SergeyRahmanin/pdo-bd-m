<?php

//   $pdo = new PDO("mysql:host=localhost;dbname=test","root","");
   function spisok(){
       $pdo = new PDO("mysql:host=localhost;dbname=test","root","");
       $sql = 'SELECT * FROM users';
       $statement = $pdo->prepare($sql);
       $statement->execute();
       return $users = $statement->fetchAll(PDO::FETCH_ASSOC);
   }

   function show(){
       $pdo = new PDO("mysql:host=localhost;dbname=test","root","");
       $sql = 'SELECT * FROM users WHERE id=:id';
       $statement = $pdo->prepare($sql);
       $statement->execute($_GET);
       return $users = $statement->fetchAll(PDO::FETCH_ASSOC);
   }

   function stor(){
       $pdo = new PDO("mysql:host=localhost;dbname=test","root","");
       $sql = 'INSERT INTO users (`name`, `email`) VALUES (:name, :email)';
       $statement = $pdo->prepare($sql);
       $statement->execute($_POST);
       header('Location: ./index.php');
   }

   function delete(){
       $pdo = new PDO("mysql:host=localhost;dbname=test","root","");
       $sql = 'DELETE FROM users WHERE id=:id';
       $statement = $pdo->prepare($sql);
       $statement->execute($_GET);
       header('Location: ./index.php');
   }

   function update(){
       $pdo = new PDO("mysql:host=localhost;dbname=test","root","");
       $sql = 'UPDATE users SET name=:name, email=:email WHERE id=:id';
       $statement = $pdo->prepare($sql);
       $statement->execute($_POST);
       header('Location: ./index.php');
   }

   function edit(){
       $pdo = new PDO("mysql:host=localhost;dbname=test","root","");
       $sql = 'SELECT * FROM users WHERE id=:id';
       $statement = $pdo->prepare($sql);
       $statement->execute($_GET);
       return $users = $statement->fetch(PDO::FETCH_ASSOC);
   }