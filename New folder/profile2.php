<!DOCTYPE html>
<html>
<head>
 <title>Pagina Adeverinta</title>
 </head>
 </html>


<?php

$error1 = '';
include('profile1.php'); 
//include('session1.php');


require_once 'bootstrap.php';
//$conn = mysqli_connect("localhost", "root", "root", "facultate"); 
//session_start();// Starting Session 
// Storing Session 
//$user_check = $_SESSION['login_user']; 
// SQL Query To Fetch Complete Information Of User 
/*
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

$query = "SELECT nume from adev where nr_matricol= '$_POST[numarmatricol]'"; 
$ses_sql = mysqli_query($conn, $query); 
$row = mysqli_fetch_assoc($ses_sql); 
$login_session = $row['nume'];

$query1 = "SELECT facultate from adev where nr_matricol= '$_POST[numarmatricol]'"; 
$ses_sql1 = mysqli_query($conn, $query1); 
$row1 = mysqli_fetch_assoc($ses_sql1); 
$login_session1 = $row1['facultate'];

$query2 = "SELECT an from adev where nr_matricol= '$_POST[numarmatricol]'"; 
$ses_sql2 = mysqli_query($conn, $query2); 
$row2 = mysqli_fetch_assoc($ses_sql2); 
$login_session2 = $row2['an'];

$query3 = "SELECT nr_matricol from adev where nr_matricol= '$_POST[numarmatricol]'"; 
$ses_sql3 = mysqli_query($conn, $query3); 
$row3 = mysqli_fetch_assoc($ses_sql3); 
$login_session3 = $row3['nr_matricol'];

$query4 = "SELECT motiv from adev where nr_matricol= '$_POST[numarmatricol]'"; 
$ses_sql4 = mysqli_query($conn, $query4); 
$row4 = mysqli_fetch_assoc($ses_sql4); 
$login_session4 = $row4['motiv'];

$query5 = "SELECT sectie from adev where nr_matricol= '$_POST[numarmatricol]'"; 
$ses_sql5 = mysqli_query($conn, $query5); 
$row5 = mysqli_fetch_assoc($ses_sql5); 
$login_session5 = $row5['sectie'];


//echo "<h2> $login_session </h2>";


// Creating the new document...

*/

//for ($i=0;$i<=count($arrayN);$i++) {

$phpWord = new \PhpOffice\PhpWord\PhpWord();

$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor("T.docx");

$templateProcessor->setValue('name', "$login_session");
//$templateProcessor->setValue('facultate', $arrayfacultate[0]);
//$templateProcessor->setValue('anul', $arrayan[0]);
//$templateProcessor->setValue('numar', $arraynr[0]);
//$templateProcessor->setValue('motiv', $arraymotiv[0]);
//$templateProcessor->setValue('sectia', $arraysectie[0]);
 
//for ($x = 0; $x <= 10; $x++); 

//$templateProcessor->setValue('dataa', date("Y/m/d"));
$templateProcessor->saveAs("aasadasd.docx");

//}


/*

$phpWord = new PhpOffice\PhpWord\PhpWord();

                $textrun->addText($login_session);

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('MyDocument.docx');    

*/
/*
?>
<!DOCTYPE html>
<html>
<body>
<head>
<link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>
<p> <font color = "red" size="10"> Adeverința a fost generată </font></p>
<b id="adeverinta" > <font color = "red" size="10"> </font></b>

</div>
</body>
</html>


<?php

//echo "Adeverinta pentru $login_session a fost generata";

//mysqli_query($con,"DELETE FROM student WHERE id='$id'");

$sql = "DELETE FROM adev where nr_matricol= '$_POST[numarmatricol]' limit 1";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
} else {
    //echo "Error deleting record: " . $conn->error;
}

$conn->close();
*/

//$query7 = "delete from adev where nr_matricol= '$_POST[numarmatricol]'"; 
//$ses_sql = mysqli_query($conn, $query);
//mysqli_close($conn); 
//$row = mysqli_fetch_assoc($ses_sql); 
//$login_session = $row['nume'];
/*

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <div id="profile2">
 <b id="logout"><a href="logout.php">Log Out</a></b>
 <link href="style.css" rel="stylesheet" type="text/css">
 </div>

 <div id="profile2">
 <b id="pagina"><a href="profile1.php">Revenire la pagina anterioară</a></b>
 <link href="style.css" rel="stylesheet" type="text/css">
 </div>

</body>
</html>

*/