<?php
$username = "root";
$password = "root";
$database = "facultate";

include('session.php'); 

$user_check = $_SESSION['login_user']; 
$mysqli = mysqli_connect("localhost", $username, $password, $database);
 
$query = "SELECT * FROM studenti s, login l where username = '$user_check'";
echo "<b> <center>Database Output</center> </b> <br> <br>";
 
if ($result = $mysqli->query($query)) {
 
    while ($row = $result->fetch_assoc()) {
        $field4name = $row["nume"];
        echo $field4name;
    }
 
/*freeresultset*/
$result->free();
}
?>





$query = "SELECT * FROM studenti s where s.nume='Pop Ion'";

$result = $mysqli->query($query);
$row = $result->fetch_assoc();

// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('Template.docx');
 

$templateProcessor->setValue('name', $row);
$templateProcessor->setValue('name', 'John Doe');
$templateProcessor->setValue(
    ['city', 'street'],
    ['Sunnydale, 54321 Wisconsin', '123 International Lane']);
 
$templateProcessor->saveAs('MyWordFile.docx')
?>