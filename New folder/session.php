<?php
// mysqli_connect() function opens a new connection to the MySQL server. 
$conn = mysqli_connect("localhost", "root", "root", "facultate"); 
session_start();// Starting Session 
// Storing Session 
$user_check = $_SESSION['login_user']; 
// SQL Query To Fetch Complete Information Of User 

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

$query = "SELECT nume from upt where user = '$user_check'"; 
$ses_sql = mysqli_query($conn, $query); 
$row = mysqli_fetch_assoc($ses_sql); 
$login_session = $row['nume'];

$querynume = "SELECT nume from upt where user = '$user_check'";  
$ses_sql1 = mysqli_query($conn, $querynume); 
$row1 = mysqli_fetch_assoc($ses_sql1); 
$login_session1 = $row['nume'];
//echo "<h2>" . $login_session1 . "</h2>";

$querynr = "SELECT distinct nr_matricol from upt where user = '$user_check'";
$ses_sql2 = mysqli_query($conn, $querynr); 
$row2 = mysqli_fetch_assoc($ses_sql2); 
$login_session2 = $row2['nr_matricol'];
//echo "<h2>" . $login_session2 . "</h2>";

$queryan = "SELECT an from upt where user = '$user_check'";
$ses_sql3 = mysqli_query($conn, $queryan); 
$row3 = mysqli_fetch_assoc($ses_sql3); 
$login_session3 = $row3['an'];
//echo "<h2>" . $login_session3 . "</h2>";

$queryfacultate = "SELECT facultate from upt where user = '$user_check'";
$ses_sql4 = mysqli_query($conn, $queryfacultate); 
$row4 = mysqli_fetch_assoc($ses_sql4); 
$login_session4 = $row4['facultate'];
//echo "<h2>" . $login_session3 . "</h2>";

$querysectie = "SELECT sectie from upt where user = '$user_check'";
$ses_sql5 = mysqli_query($conn, $querysectie); 
$row5 = mysqli_fetch_assoc($ses_sql5); 
$login_session5 = $row5['sectie'];

?>