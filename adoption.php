<?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_mimp');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME) or die("Could not connect to database");
$age = $sex = $size = "";



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Mission ImPAWssible</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }

  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #fff;
  }
  .carousel-indicators li {
    border-color: #fff;
  }
  .carousel-indicators li.active {
    background-color: #fff;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #000000;
    color: #818181;
  }
  .navbar {
    height: 270px;
    margin-bottom: 0;
    background-color: #fff;
    z-index: 9999;
    border: 0;
    font-size: 20px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
 .navbar li a, .navbar .navbar-brand {
    color: rgb(0, 0, 0) !important;
    right: 2px;
  } 
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #e90247 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: rgb(14, 4, 4) !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #818181;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  .btn-primary-outline {
  font-size: 20px;
  background-color: transparent;
  border-color: #ccc;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="mipstart.html"><img style="height: 250px; width: 250px" src="./src/missionbw.png"><p style="font-size: 25pt">Mission ImPAWssible</p></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="mipstart.html">Αρχική</a></li>
          <li><a href="#about">Ποιοι είμαστε</a></li>
          <li><a href="login.php">Εγγραφή/Σύνδεση</a></li>
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#more">Περισσότερα
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="advice.html">Χρήσιμες συμβουλές</a></li>
                <li><a href="ktiniatroi.php">Κτηνίατροι</a></li>
                <li><a href="ekpaideutes.php">Εκπαιδευτές</a></li>
                <li><a href="donation.html">Δωρεές</a></li>
                <li><a href="forum.html">Forum</a></li>
                <li><a href="draseis.html">Δράσεις</a></li>
                <li><a href="shelters.php">Φιλοζωικές Κοντά Σας</a></li>
            </ul>
          </li> 
        </ul>
        <a href="logout.php" class="btn btn-info">
        <span class="glyphicon glyphicon-log-out"></span> Log out
      </a>
        </ul>
      </div>
      <form class="navbar-form navbar-right" action="./src/action_page.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
    </div>
  </nav>
  <div class="container">
    <div class="item active">
        <a href><img style="height: 700px;"src="./src/whitepuppy.jpg" alt="adopt"> </a>
    <br>
    <h3 style = "font-size: 25pt"> Θέλεις να μεγαλώσεις την οικογένειά σου με ένα σκυλάκι;</h3>
    <p style = "color: #e90247; font-size: 15pt">Προσάρμοσε τα φίλτρα στις δικές σου ανάγκες και βρες τον τετράποδο φίλο που θα σου αλλάξει τη ζωή!</p>
    </div>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    
          <b> Ηλικία: </b>
          <br>
          <input type="radio" name="age" <?php if (isset($age) && $age=="01") echo "checked";?> value="01">0-1
          <br>
          <input type="radio" name="age" <?php if (isset($age) && $age=="12") echo "checked";?> value="12">1-2
          <br>
          <input type="radio" name="age" <?php if (isset($age) && $age=="25") echo "checked";?> value="25">2-5
          <br>
          <input type="radio" name="age" <?php if (isset($age) && $age=="5") echo "checked";?> value="5">5+     
            
         
          
          <br>

          <b> Μέγεθος: </b>
          <br>
          <input type="radio" name="size" <?php if (isset($size) && $size=="small") echo "checked";?> value="small">μικρό (λιγότερο από 10kg)
          <br>
          <input type="radio" name="size" <?php if (isset($size) && $size=="medium") echo "checked";?> value="medium">μεσσαίο (λιγότερο από 25kg)
          <br>
          <input type="radio" name="size" <?php if (isset($size) && $size=="large") echo "checked";?> value="large">μεγάλο (μεγαλύτερο από 25kg)
            
          <br>
          <b>Φύλο:</b>
          <br>
          <input type="radio" name="sex" <?php if (isset($sex) && $sex=="female") echo "checked";?> value="female">Θηλυκό
          <br>
          <input type="radio" name="sex" <?php if (isset($sex) && $sex=="male") echo "checked";?> value="male">Αρσενικό
          <br>

          
          <br>
          <input type="submit" name="submit" value="Αναζήτηση">
        </form>
          <?php
          
          
          
          echo "Τα αποτελέσματα της αναζήτησής σας";
          echo "<br>" ;
          echo "<br>";

          if($_SERVER["REQUEST_METHOD"] == "POST"){
    
            if(empty($_POST["age"])&&empty($_POST["sex"])&&empty($_POST["size"])){
              $sql = "SELECT * FROM animal"; 
              $result = mysqli_query($db, $sql);

                  if(mysqli_num_rows($result) > 0 ){
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)){
                echo "Όνομα: " . $row["name"]. "<br>" ;
                echo "Ηλικία:  " . $row["age"]. "<br>" ;
                echo "Μέγεθος: " . $row["size"]. "<br>";
                echo "Φύλο: " . $row["sex"]. "<br>"; 
                echo "Περιοχή: " . $row["place"]."<br>";
                echo "<br>";
               }
              } 
              else {
                echo "0 results";
               }
            }
            
            elseif(!empty($_POST["age"])){
              if ($_POST["age"] =="01"){
                $sql = "SELECT * FROM animal WHERE age<=1";
                $result = mysqli_query($db, $sql);

                if(mysqli_num_rows($result) > 0 ){
                // output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                      }
                  }
                  else {
                    echo "0 results";
                   }
              }
              elseif ($_POST["age"] =="12"){
                $sql = "SELECT * FROM animal WHERE age<=2 AND age>1";
                $result = mysqli_query($db, $sql);

                if(mysqli_num_rows($result) > 0 ){
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                     }
                  }
                  else {
                    echo "0 results";
                   }
              }
              elseif ($_POST["age"] =="25"){
                $sql = "SELECT * FROM animal WHERE age<=5 AND age>2";
                $result = mysqli_query($db, $sql);

                if(mysqli_num_rows($result) > 0 ){
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                     }
                  }
                  else {
                    echo "0 results";
                   }
              }
              elseif ($_POST["age"] == "5"){
                $sql = "SELECT * FROM animal WHERE age>5";
                $result = mysqli_query($db, $sql);

                if(mysqli_num_rows($result) > 0 ){
                // output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                     }
                  } 
                  else {
                    echo "0 results";
                   }
              }
            }
            
            elseif(!empty($_POST["sex"])){
              if ($_POST["sex"] == "male"){
              $sql = "SELECT * FROM animal WHERE sex = 'male' ";
              }
              elseif($_POST["sex"] == "female"){
                $sql = "SELECT * FROM animal WHERE sex = 'female' ";
              }
              $result = mysqli_query($db, $sql);

                if(mysqli_num_rows($result) > 0 ){
                // output data of each row
                 while($row = mysqli_fetch_assoc($result)){
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                     }
                  }
                  else {
                    echo "0 results";
                   }
            }
            elseif(!empty($_POST["size"])){
              if ($_POST["size"] == "small"){
                $sql = "SELECT * FROM animal WHERE  size='small'";
                }
                elseif($_POST["size"] == "medium"){
                  $sql = "SELECT * FROM animal WHERE  size='medium'";
              }
              elseif($_POST["size"] == "large"){
                $sql = "SELECT * FROM animal WHERE  size='large'";
                }
            }
              
              $result = mysqli_query($db, $sql);

                if(mysqli_num_rows($result) > 0 ){
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                     }
                  }
                  else {
                    echo "0 results";
                   }
            }
            elseif (!empty($_POST["sex"])&&!empty($_POST["size"])){
              if ($_POST["sex"] == "male"){
                if ($_POST["size"] == "small"){
                  $sql = "SELECT * FROM animal WHERE sex = 'male' AND size='small'";
                  }
                  elseif($_POST["size"] == "medium"){
                    $sql = "SELECT * FROM animal WHERE sex = 'male' AND size='medium'";
                }
                elseif($_POST["size"] == "large"){
                  $sql = "SELECT * FROM animal WHERE sex = 'male' AND size='large'";
                }
              }
              elseif($_POST["sex"] == "female"){
                if ($_POST["size"] == "small"){
                  $sql = "SELECT * FROM animal WHERE sex = 'female' AND size='small'";
                  }
                  elseif($_POST["size"] == "medium"){
                    $sql = "SELECT * FROM animal WHERE sex = 'female' AND size='medium'";
                }
                elseif($_POST["size"] == "large"){
                  $sql = "SELECT * FROM animal WHERE sex = 'female' AND size='large'";
                  }
              }
              $result = mysqli_query($db, $sql);

                if(mysqli_num_rows($result) > 0 ){
                // output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                      }
                  }
                  else {
                    echo "0 results";
                   }
            }
            elseif (!empty($_POST["age"])&&!empty($_POST["size"])){
              if ($_POST["age"] =="01"){
                if ($_POST["size"] == "small"){
                  $sql = "SELECT * FROM animal WHERE age<=1 AND size='small'";
                  }
                  elseif($_POST["size"] == "medium"){
                    $sql = "SELECT * FROM animal WHERE age<=1 AND size='medium'";
                }
                elseif($_POST["size"] == "large"){
                  $sql = "SELECT * FROM animal WHERE age<=1 AND size='large'";
                  }
              
                $result = mysqli_query($db, $sql);
  
                  if(mysqli_num_rows($result) > 0 ){
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                    }
                  }
                  else {
                    echo "0 results";
                   }
              }
              elseif ($_POST["age"] =="12"){
                if ($_POST["size"] == "small"){
                  $sql = "SELECT * FROM animal WHERE age<=2 AND age>1 AND size='small'";
                  }
                  elseif($_POST["size"] == "medium"){
                    $sql = "SELECT * FROM animal WHERE age<=2 AND age>1 AND size='medium'";
                }
                elseif($_POST["size"] == "large"){
                  $sql = "SELECT * FROM animal WHERE age<=2 AND age>1 AND size='large'";
                  }

                $result = mysqli_query($db, $sql);
  
                  if(mysqli_num_rows($result) > 0 ){
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)){
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                    }
                  }
                  else {
                    echo "0 results";
                   }
              }
              elseif ($_POST["age"] =="25"){
                if ($_POST["size"] == "small"){
                  $sql = "SELECT * FROM animal WHERE age<=5 AND age>2 AND size='small'";
                  }
                  elseif($_POST["size"] == "medium"){
                    $sql = "SELECT * FROM animal WHERE age<=5 AND age>2 AND size='medium'";
                }
                elseif($_POST["size"] == "large"){
                  $sql = "SELECT * FROM animal WHERE age<=5 AND age>2 AND size='large'";
                  }
                $result = mysqli_query($db, $sql);
  
                  if(mysqli_num_rows($result) > 0 ){
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                     }
                  }
                  else {
                    echo "0 results";
                   }
              }
              elseif ($_POST["age"] == "5"){
                if ($_POST["size"] == "small"){
                  $sql = "SELECT * FROM animal WHERE age>5 AND size='small'";
                  }
                  elseif($_POST["size"] == "medium"){
                    $sql = "SELECT * FROM animal WHERE age>5 AND size='medium'";
                }
                elseif($_POST["size"] == "large"){
                  $sql = "SELECT * FROM animal WHERE age>5 AND size='large'";
                  } 
                $result = mysqli_query($db, $sql);
  
                  if(mysqli_num_rows($result) > 0 ){
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                   }
                  }
                  else {
                    echo "0 results";
                   }
              }
            }
            elseif (!empty($_POST["age"])&&!empty($_POST["sex"])){
              if ($_POST["age"] =="01"){
                if ($_POST["sex"] == "male"){
                  $sql = "SELECT * FROM animal WHERE age<=1 AND sex = 'male' ";
                  }
                  elseif($_POST["sex"] == "female"){
                    $sql = "SELECT * FROM animal WHERE age<=1 AND sex = 'female' ";
                  }
                 
                $result = mysqli_query($db, $sql);
  
                  if(mysqli_num_rows($result) > 0 ){
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                    }
                  }
                  else {
                    echo "0 results";
                   }
              }
              elseif ($_POST["age"] =="12"){
                if ($_POST["sex"] == "male"){
                  $sql = "SELECT * FROM animal WHERE age<=2 AND age>1 AND sex = 'male' ";
                  }
                  elseif($_POST["sex"] == "female"){
                    $sql = "SELECT * FROM animal WHERE age<=2 AND age>1 AND sex = 'female' ";
                  }
                 
                $result = mysqli_query($db, $sql);
  
                  if(mysqli_num_rows($result) > 0 ){
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                    }
                  }
                  else {
                    echo "0 results";
                   }
              }
              elseif ($_POST["age"] =="25"){
                if ($_POST["sex"] == "male"){
                  $sql = "SELECT * FROM animal WHERE age<=5 AND age>2 AND sex = 'male' ";
                  }
                  elseif($_POST["sex"] == "female"){
                    $sql = "SELECT * FROM animal WHERE age<=5 AND age>2 AND sex = 'female' ";
                  }
                  
                $result = mysqli_query($db, $sql);
  
                  if(mysqli_num_rows($result) > 0 ){
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result))  {
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                    }
                  }
                  else {
                    echo "0 results";
                   }
              }
              elseif ($_POST["age"] == "5"){
                if ($_POST["sex"] == "male"){
                  $sql = "SELECT * FROM animal WHERE age>5 AND sex = 'male' ";
                  }
                  elseif($_POST["sex"] == "female"){
                    $sql = "SELECT * FROM animal WHERE age>5 AND sex = 'female' ";
                  }

                $result = mysqli_query($db, $sql);
  
                  if(mysqli_num_rows($result) > 0 ){
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result))  {
                  echo "Όνομα: " . $row["name"]. "<br>" ;
                  echo "Ηλικία:  " . $row["age"]. "<br>" ;
                  echo "Μέγεθος: " . $row["size"]. "<br>";
                  echo "Φύλο: " . $row["sex"]. "<br>"; 
                  echo "Περιοχή: " . $row["place"]."<br>";
                  echo "<br>";
                 }
                }
                else {
                  echo "0 results";
                 }
              }
            }
            elseif (!empty($_POST["age"])&&!empty($_POST["sex"])&&!empty($_POST["size"])){
              if ($_POST["age"] =="01"){
                if ($_POST["sex"] == "male"){
                  if ($_POST["size"] == "small"){
                    $sql = "SELECT * FROM animal WHERE age<=1  AND sex = 'male' AND size='small'";
                    }
                    elseif($_POST["size"] == "medium"){
                      $sql = "SELECT * FROM animal WHERE  age<=1  ANDsex = 'male' AND size='medium'";
                  }
                  elseif($_POST["size"] == "large"){
                    $sql = "SELECT * FROM animal WHERE age<=1  AND sex = 'male' AND size='large'";
                  }
                }
                elseif($_POST["sex"] == "female"){
                  if ($_POST["size"] == "small"){
                    $sql = "SELECT * FROM animal WHERE age<=1  AND sex = 'female' AND size='small'";
                    }
                    elseif($_POST["size"] == "medium"){
                      $sql = "SELECT * FROM animal WHERE age<=1  AND sex = 'female' AND size='medium'";
                  }
                  elseif($_POST["size"] == "large"){
                    $sql = "SELECT * FROM animal WHERE age<=1  AND sex = 'female' AND size='large'";
                    }
                }
                
                $result = mysqli_query($db, $sql);
  
                  if(mysqli_num_rows($result) > 0 ){
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result))  {
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                   }
                  }
                  else {
                    echo "0 results";
                   }
              }
              elseif ($_POST["age"] =="12"){
                if ($_POST["sex"] == "male"){
                  if ($_POST["size"] == "small"){
                    $sql = "SELECT * FROM animal WHERE age<=2 AND age>1  AND sex = 'male' AND size='small'";
                    }
                    elseif($_POST["size"] == "medium"){
                      $sql = "SELECT * FROM animal WHERE age<=2 AND age>1  ANDsex = 'male' AND size='medium'";
                  }
                  elseif($_POST["size"] == "large"){
                    $sql = "SELECT * FROM animal WHERE age<=2 AND age>1  AND sex = 'male' AND size='large'";
                  }
                }
                elseif($_POST["sex"] == "female"){
                  if ($_POST["size"] == "small"){
                    $sql = "SELECT * FROM animal WHERE age<=2 AND age>1 AND sex = 'female' AND size='small'";
                    }
                    elseif($_POST["size"] == "medium"){
                      $sql = "SELECT * FROM animal WHERE age<=2 AND age>1 AND sex = 'female' AND size='medium'";
                  }
                  elseif($_POST["size"] == "large"){
                    $sql = "SELECT * FROM animal WHERE age<=2 AND age>1 AND sex = 'female' AND size='large'";
                    }
                }
                 $result = mysqli_query($db, $sql);
  
                  if(mysqli_num_rows($result) > 0 ){
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                    }
                  }
                  else {
                    echo "0 results";
                   }
              }
              elseif ($_POST["age"] =="25"){
                if ($_POST["sex"] == "male"){
                  if ($_POST["size"] == "small"){
                    $sql = "SELECT * FROM animal WHERE age<=5 AND age>2  AND sex = 'male' AND size='small'";
                    }
                    elseif($_POST["size"] == "medium"){
                      $sql = "SELECT * FROM animal WHERE age<=5 AND age>2  ANDsex = 'male' AND size='medium'";
                  }
                  elseif($_POST["size"] == "large"){
                    $sql = "SELECT * FROM animal WHERE age<=5 AND age>2  AND sex = 'male' AND size='large'";
                  }
                }
                elseif($_POST["sex"] == "female"){
                  if ($_POST["size"] == "small"){
                    $sql = "SELECT * FROM animal WHERE age<=5 AND age>2 AND sex = 'female' AND size='small'";
                    }
                    elseif($_POST["size"] == "medium"){
                      $sql = "SELECT * FROM animal WHERE age<=5 AND age>2 AND sex = 'female' AND size='medium'";
                  }
                  elseif($_POST["size"] == "large"){
                    $sql = "SELECT * FROM animal WHERE age<=5 AND age>2 AND sex = 'female' AND size='large'";
                    }
                }
                  $result = mysqli_query($db, $sql);
  
                  if(mysqli_num_rows($result) > 0 ){
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                   }
                  }
                  else {
                    echo "0 results";
                   }
              }
              elseif ($_POST["age"] == "5"){
                if ($_POST["sex"] == "male"){
                  if ($_POST["size"] == "small"){
                    $sql = "SELECT * FROM animal WHERE age>5  AND sex = 'male' AND size='small'";
                    }
                    elseif($_POST["size"] == "medium"){
                      $sql = "SELECT * FROM animal WHERE age>5 AND sex = 'male' AND size='medium'";
                  }
                  elseif($_POST["size"] == "large"){
                    $sql = "SELECT * FROM animal WHERE age>5 AND sex = 'male' AND size='large'";
                  }
                }
                elseif($_POST["sex"] == "female"){
                  if ($_POST["size"] == "small"){
                    $sql = "SELECT * FROM animal WHERE age>5 AND sex = 'female' AND size='small'";
                    }
                    elseif($_POST["size"] == "medium"){
                      $sql = "SELECT * FROM animal WHERE age>5 AND sex = 'female' AND size='medium'";
                  }
                  elseif($_POST["size"] == "large"){
                    $sql = "SELECT * FROM animal WHERE age>5 AND sex = 'female' AND size='large'";
                    }
                }
                 $result = mysqli_query($db, $sql);
  
                  if(mysqli_num_rows($result) > 0 ){
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result))  {
                    echo "Όνομα: " . $row["name"]. "<br>" ;
                    echo "Ηλικία:  " . $row["age"]. "<br>" ;
                    echo "Μέγεθος: " . $row["size"]. "<br>";
                    echo "Φύλο: " . $row["sex"]. "<br>"; 
                    echo "Περιοχή: " . $row["place"]."<br>";
                    echo "<br>";
                     }
                  } 
                  else {
                    echo "0 results";
                   }
              }
            }
            
        
        
          ?>
    </div>
  </body>
</html>