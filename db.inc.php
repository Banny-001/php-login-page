<?php
    session_start();
    $host="localhost";
    $dbname="furniture palace";
    $username_db="Banny";
    $password_bd="@banny254 ";
  

//  try{
$conn=new PDO("mysql:host=localhost;dbname=furniture palace","Banny","@banny254");
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// $sql ="CREATE DATABASE furniture palace";
// $conn -> exec($sql);
// }catch(PDOException $error){
// echo ("An error occured".$error);

//  }
//  echo ("Connected successfuly!");
try {
    $sql="CREATE DATABASE IF NOT EXISTS DBNAME";
  
    $conn ->exec($sql);
}catch(PDOException $error){
    echo("An error occurred". $error ->getMessage());
}
// echo("inserted into db successfully!")
// $sql_tst ="IF EXIST users ";

// if($conn->exec($sql_tst))
// if($SESSION["time"]===now())
// {
    // public function initDB(){

// create a condition to skip this piece of code 
// if ($_COOKIE['init'] ==0){
//     try{
//         $sql="CREATE TABLE users(
//             id INT(11) NOT NULL AUTO_INCREMENT,
//             name VARCHAR(100)NOT NULL,
//             email VARCHAR (100) NOT NULL,
//             password VARCHAR (100) NOT NULL,
//             PRIMARY KEY (id) )
//             ENGINE =innoDB";
//             $conn ->exec($sql);    
//     }catch(PDOException $error){
//         echo ("An error occurred".
//         $error->getMessage());
//     }
//     echo ("inserted into batabase successfully!");

// }

// else{
//     echo "databse created already skippping initialization";
// }
?>