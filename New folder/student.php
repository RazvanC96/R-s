<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>



.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  right: auto;
  left : 50%;
}

body {
  font: 13px/20px "Lucida Grande", Tahoma, Verdana, sans-serif;
  color: #404040;
  background: #0ca3d2;
}


a {
  background-color: gray;
  box-shadow: 0 5px 0 darkgray  ;
  color: white;
  padding: 1em 1.5em;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
  right: auto;
}



.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  right: auto;
}

.dropdown a:hover {background-color: #ddd;}

@charset "utf-8";
@import url(http://weloveiconfonts.com/api/?family=fontawesome);



[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

body {
  background: #2c3338;
  color: #606468;
  font: 87.5%/1.5em 'Open Sans', sans-serif;
  margin: 0;
}

input {
  border: none;
  font-family: 'Open Sans', Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5em;
  padding: 0;
  -webkit-appearance: none;
}

p {
  line-height: 1.5em;
}


a:hover {
  cursor: pointer;
}

a:active {
  box-shadow: none;
  top: 5px;
}

after { clear: both; }

input {
    border: 5px solid white; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
}

#login {
  margin: 50px auto;
  width: 320px;
}

#login form {
  margin: auto;
  padding: 22px 22px 22px 22px;
  width: 100%;
  border-radius: 5px;
  background: #282e33;
  border-top: 3px solid #434a52;
  border-bottom: 3px solid #434a52;
}

#login form span {
  background-color: #363b41;
  border-radius: 3px 0px 0px 3px;
  border-right: 3px solid #434a52;
  color: #606468;
  display: block;
  float: left;
  line-height: 50px;
  text-align: center;
  width: 50px;
  height: 50px;
}

#login form input[type="text"] {
  background-color: #3b4148;
  border-radius: 0px 3px 3px 0px;
  color: #a9a9a9;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 235px;
  height: 50px;
}

#login form input[type="password"] {
  background-color: #3b4148;
  border-radius: 0px 3px 3px 0px;
  color: #a9a9a9;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 235px;
  height: 50px;
}

#login form input[type="submit"] {
  background: #b5cd60;
  border: 0;
  width: 100%;
  height: 40px;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  transition: background 0.3s ease-in-out;
}
#login form input[type="submit"]:hover {
  background: #16aa56;
}

.show {display: block;}
</style>
</head>
<body>




<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Meniu</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="info.php">Generare adeverinta student </a>
    <a href="logout.php">Delogare </a>
  </div>
</div>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>

<?php



include('session.php'); 

?>

<h2><font size="20";color="grey"> Informațiile dumneavoastra sunt: </font></h2>
<?php
                echo "<tr>";
                echo "<p><b><font color = gray size=5pt>Nume: <td> $login_session1 </td></b></font></p></th>";
                echo "<p><b><font color = gray size=5pt>Numar matricol: <td> $login_session2 </td></b></font></p></th>";
                echo "<p><b><font color = gray size=5pt>Anul de studiu: <td> $login_session3 </td></b></font></p></th>";
                echo "<p><b><font color = gray size=5pt>Facultatea: <td> $login_session4 </td></b></font></p></th>";
                echo "<p><b><font color = gray size=5pt>Sectie: <td> $login_session5 </td></b></font></p></th>";

?>
</html>