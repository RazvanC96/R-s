<?php
session_start(); // Starting Session 
$error = ''; // Variable To Store Error Message 
if (isset($_POST['submit'])) { 
  if (empty($_POST['username']) || empty($_POST['password'])) { 
    echo "Eroare username sau parola";
    $error = "Username or Password is invalid"; 
  } 
  else{ 
    // Define $username and $password 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
	  $servername = "localhost";
	
    // mysqli_connect() function opens a new connection to the MySQL server. 
    $conn = mysqli_connect("localhost", "root", "root","facultate"); 
	
	if (!$conn) {
    echo "Eroare: Nu a fost posibilă conectarea la MySQL." . PHP_EOL;
    echo "Valoarea errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Valoarea error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
	
    // SQL query to fetch information of registerd users and finds user match. 
    $query = "SELECT user, pass from upt where user=? AND pass=? LIMIT 1"; 
    // To protect MySQL injection for Security purpose 
    $stmt = $conn->prepare($query); 
    $stmt->bind_param("ss", $username, $password); 
	  $stmt->execute(); 
    $stmt->bind_result($username, $password); 
    $stmt->store_result(); 
    if($stmt->fetch()) //fetching the contents of the row { 
      $_SESSION['login_user'] = $username; // Initializing Session 
    header("location: profile.php"); // Redirecting To Profile Page 
  } 
  mysqli_close($conn); // Closing Connection 
} 
?>