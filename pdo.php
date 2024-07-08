<?php



if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $username=$_POST["username"];
    $email=$_POST ["email"];
    $password= $_POST[" password"];
    
    //DB CONNECTION 
    session_start();
    $host="localhost";
    $dbname="furniture palace";
    $username_db="Banny";
    $password_bd="@banny254 ";
  
  
  try{
      $conn=new PDO("mysql:host=$host;","Banny","@banny254");
      $conn ->setAtribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      //echo"Connected successfully";
      //SQL STATEMENT TO INSERT INTO DATA
      $statement=$conn->prepare("INSERT INTO users
      (username,email,password) VALUES(:username,:email,:password)");
      

     //BIND PARAMETERS
      $statement->bindParam(":username",$username);
      $statement->bindParam(":email",$email);
      $statement->bindParam(":password",$password);
      $statement->execute();
      $statement->store_result();


      if ($statement->num_rows >0)
      {
        $statement -> fetch();
        $_SESSION['email']=$username;

        $statement->execute();
        echo "database inserted successfully";
       
      }else{
        $_SESSION['invalid_details']="INVALID USERNAME/PASSWORD Combination!";
      //  header('location :login.php');
      }
     $statement->close();

   }catch(PDOException $e){
      echo "Error:" .$e->getMessage();
   
   $conn=null;
};
};
include_once ("db.inc.php");

     ?>
