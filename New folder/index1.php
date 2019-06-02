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
}

body {
  font: 13px/20px "Lucida Grande", Tahoma, Verdana, sans-serif;
  color: #404040;
  background: #0ca3d2;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
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


p.small {
  line-height: 0.7;
}

p.big {
  line-height: 1.8;
}

div.d {
  line-height: 200%;
}


after { clear: both; }

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
    <a href="index.php">Logare ca student</a>
    <a href="forgot.php">Am uitat parola</a>
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
</html>


<?php
include('login1.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile1.php"); // Redirecting To Profile Page
}
?> 
<!DOCTYPE html>
<html>
<head>
  <title>Pagina Login administrator</title>
 
</head>
<body>
 <div id="login">
  <h2><font size="20";color="grey"><center> Pagină login </center></font></h2>
  <h2><font size="20";color="grey"><center> membrii  </center></font></h2>
  <form action="" method="post">
   <label><font size="5" color="white"> utilizator : </font></label>
   <input id="name" name="username"  placeholder="username" type="text">
   <label><font size="5" color="white"> parola : </font></label>
   <input id="password" name="password" placeholder="**********" type="password"><br><br>
   <input name="submit" type="submit" value=" Login ">
</form>
   <span><?php echo $error; ?></span>
  </form>
 </div>
</body>
</html>