<!--establish the connection to database, and start the session-->
<?php
//hadi ta3 likan dayerha howa
$con = mysqli_connect("localhost", "root", "", "store")or die($mysqli_error($con));
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

// try{
// $dsn = 'mysql:host=localhost;dbname=store';
// $username = 'root';
// $password = '';
// $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
//   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
//   /*CONNECT TO DATABASE*/
//   $con = new PDO($dsn, $username, $password, $options);
//   }catch(Exception $e){
//   die("Erreur <br>".$e->getMessage());
//   } 

//   if(session_status() == PHP_SESSION_NONE){
//     session_start();
// }


?>