<?php

include('session.php'); 

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    


require_once 'bootstrap.php';
$username = "root";
$passwod = "root";
$database = "facultate";

$error1 = '';
//include('session.php'); 

if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}


$mysqli = mysqli_connect("localhost", $username, $passwod, $database);


 // echo "<h2>" . $login_session2  . "</h2>";
 // echo "<h2>" . $login_session3 . "</h2>";
 // echo "<h2>" . $login_session4  . "</h2>";
 // echo "<h2>" . $login_session5 . "</h2>";
 

 $query = "SELECT * from adev where motiv = '$_POST[utilitate]'"; 
 if($result=mysqli_query($mysqli,$query))
 {
 
 if(mysqli_num_rows($result)>0){
 
    echo "<p><font color = red size=10pt> O adeverinta pentru acelasi motiv a fost deja generata </font></p>";
    
  }else{
  $sql="INSERT INTO adev (nume, nr_matricol,an,facultate,sectie,motiv)
  VALUES
  ('$login_session1','$login_session2','$login_session3','$login_session4','$login_session5','$_POST[utilitate]')" ;
  
  if (!mysqli_query($mysqli,$sql))
    {
    die('Error: ' . mysqli_error($mysqli));
    }
  echo "<p> <font color = red size=10pt> Adeverinta a fost generata si trimisa la secretariat </font></p>";

  mysqli_close($mysqli);

 }
 
 }


  ?>

<!DOCTYPE html>
<html>
<head>
 </head>
<body>
 <b id="logout"><font size="10"> <a href="logout.php">Log Out</a> </font></b>
 <link href="style1.css" rel="stylesheet" type="text/css">
 </div>


</body>
</html>
