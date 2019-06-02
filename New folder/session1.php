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

$query = "SELECT user from secretara where user = '$user_check'"; 
$ses_sql = mysqli_query($conn, $query); 
$row = mysqli_fetch_assoc($ses_sql); 
$login_session = $row['user'];
?>