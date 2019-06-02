




<!DOCTYPE html>
<html>
<head>
 <title>Pagina principala</title>
 
</head>
<body>
 <div id="profile">
 <b id="welcome"><font color="red" size="10"> Cererile pentru adeverinÈ›e sunt :</font> </b>
 </div>
 </body>
 </html>

 <!DOCTYPE html>
<html>
<head>
 <title>Your Home Page</title>
 
</head>
<body>
 <div id="profile">
 <b id="welcome"><font color="red"> 
 Bine ai venit : </font><i><?php echo "<p> <font color= red size=10pt> $login_session </font></p>"; ?></i></b>

</form>
 <b id="logout"><a href="logout.php">Log Out</a></b>
 </div>
 </body>



<!DOCTYPE html>
<form action="#" method="post">
<?php
//header('Location: '.$_SERVER['REQUEST_URI']);

if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 5;
$offset = ($pageno-1) * $no_of_records_per_page;


require_once 'bootstrap.php';
error_reporting(0);
$error1 = '';
include('session1.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: index1.php"); // Redirecting To Home Page 
}


$conn = mysqli_connect("localhost", "root", "root", "facultate"); 
session_start();// Starting Session 
// Storing Session 
$user_check = $_SESSION['login_user']; 
// SQL Query To Fetch Complete Information Of User 

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    $total_pages_sql = "SELECT COUNT(*) FROM adev";
    $result = mysqli_query($conn,$total_pages_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);


    $sql = "SELECT * FROM adev limit $offset, $no_of_records_per_page ";
    ?>



<?php



    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                echo "<th><p><font color = red size=5pt><center> id &nbsp </center></font></p></th>";
                    echo "<th><p><font color = red size=5pt><center> nume &nbsp </center></font></p></th>";
                    echo "<th><p><font color = red size=5pt><center> nr_matricol &nbsp </center></font></p></th>";
                    echo "<th><p><font color = red size=5pt><center> an &nbsp </center></font></p></th>";
                    echo "<th><p><font color = red size=5pt><center> facultate &nbsp </center></font></p></th>";
                    echo "<th><p><font color = red size=5pt><center> sectie &nbsp </center></font></p></th>";
                    echo "<th><p><font color = red size=5pt><center> motiv &nbsp </center></font></p></th>";
                ?>
        
                
                <?php
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";

                ?>

                    <tr>
						<td><input type="checkbox" value="<?php echo $row['id']; ?>" name="id[]"></td>
						<td><?php echo $row['nume']; ?></td>
						<td><?php echo $row['nr_matricol'] ; ?></td>
						<td><?php echo $row['an']; ?></td>
                        <td><?php echo $row['facultate']; ?></td>
                        <td><?php echo $row['sectie']; ?></td>
                        <td><?php echo $row['motiv']; ?></td>
					</tr>
                  <?php
            }
            

             

                 
            }
        
        }

    ?>
<input type="submit" name="submit" value="Submit">     
        </form>
        </div>
        <div>
            <h2>You Selected:</h2>
            <?php
                if (isset($_POST['submit'])){

                    //items = array();
                    //$items2 = array();


 
                    foreach ($_POST['id'] as $id){
                    
                    //$array= array();
                    //$arrayN=array();
                    //$arraynr = array();
                    //$arrayan = array();        

                    $query = "SELECT nume from adev where id = '$id'"; 
                    $ses_sql = mysqli_query($conn, $query); 
                    $row = mysqli_fetch_assoc($ses_sql);         
                    $login_session = $row['nume'];
                    $arrayN[]=$login_session;
                   // $aaa=$login_session;
                    
                   $sql = "DELETE FROM adev where id= '$id' limit 1";


                    //$days = implode(' ', $_POST['id']);
                    //$days2 = implode(' ', $login_session);   
                    
                    
                    $querynr = "SELECT nr_matricol from adev where id = '$days'";
                    $ses_sql2 = mysqli_query($conn, $querynr); 
                    $row2 = mysqli_fetch_assoc($ses_sql2); 
                    $login_session2 = $row2['nr_matricol'];
                    $arraynr[]=$login_session2;
                    
                    $queryan = "SELECT an from adev where id = '$id'";
                    $ses_sql3 = mysqli_query($conn, $queryan); 
                    $row3 = mysqli_fetch_assoc($ses_sql3); 
                    $login_session3 = $row3['an'];        
                    $arrayan[]=$login_session3;
                    
                    $queryfacultate = "SELECT facultate from adev where id = '$id'";
                    $ses_sql4 = mysqli_query($conn, $queryfacultate); 
                    $row4 = mysqli_fetch_assoc($ses_sql4); 
                    $login_session4 = $row4['facultate'];
                    $arrayfacultate[]=$login_session4;
                    
                    $querysectie = "SELECT sectie from adev where id = '$id'";
                    $ses_sql5 = mysqli_query($conn, $querysectie); 
                    $row5 = mysqli_fetch_assoc($ses_sql5); 
                    $login_session5 = $row5['sectie'];
                    $arraysectie[]=$login_session5;


                    $querymotiv = "SELECT motiv from adev where id = '$id'";
                    $ses_sql6 = mysqli_query($conn, $querymotiv); 
                    $row6 = mysqli_fetch_assoc($ses_sql6); 
                    $login_session6 = $row6['motiv'];
                    $arraymotiv[]=$login_session6;



                    

                if ($conn->query($sql) === TRUE) {
                //echo "Record deleted successfully";
                } else {
                    //echo "Error deleting record: " . $conn->error;
                }

                    
                    

                    }

                }

                
                 for ($i=0;$i<count($arrayN);$i++) {
                 echo $arrayN[$i]. "<br>";
                 echo $arraymotiv[$i]. "<br>";
                 echo $arrayfacultate[$i]. "<br>";
                 echo $arrayan[$i]. "<br>";
                 echo $arraysectie[$i]. "<br>";
                 
                 //echo $arrayN[$i]. "<br>";
                 }
                 
                 //echo $arrayan[$i]. "<br>";
                 //echo $arrayfacultate[$i]. "<br>";
                 //echo $arraysectie[$i]. "<br>";
                 //echo $arraymotiv[$i]. "<br>";
                
                
                /*
                for ($i=0;$i<count($arraynr);$i++) {
                echo $arraynr[i]. "<br>";
                }    
                */
                /*
                $query7 = "SELECT nume from adev where id = '$id'"; 
                $ses_sql7 = mysqli_query($conn, $query7); 
                $row7 = mysqli_fetch_assoc($ses_sql7);         
                $login_session7 = $row7['nume'];

                */


                for ($i=0;$i<count($arrayN);$i++) {                
                $phpWord = new \PhpOffice\PhpWord\PhpWord();

            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor("Template2.docx");

            $templateProcessor->setValue('name', "$arrayN[$i]");
            $templateProcessor->setValue('facultate', "$arrayfacultate[$i]");
            $templateProcessor->setValue('an', "$arrayan[$i]");
            $templateProcessor->setValue('numar_matricol', "$arraynr[$i]");
            $templateProcessor->setValue('utilitate', "$arraymotiv[$i]");
            $templateProcessor->setValue('sectie', "$arraysectie[$i]");
 
            //for ($x = 0; $x <= 10; $x++); 

            //$templateProcessor->setValue('dataa', date("Y/m/d"));
            $templateProcessor->saveAs("$arrayN[$i] $arraymotiv[$i].docx");




                //echo $login_session7;
               
                }
            
            ?>
        </div>
        </html>


<?php   

    /*
        } else{
            echo "\n";            
            echo "\n Nu exista cereri pentru adeverinte";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    } 
    // Close connection
    */

?>





<ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
</body>
</html>