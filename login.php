<?php 

session_start();

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_mimp');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME) or die("Could not connect to database");

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: mipstart.html");
  echo '1';
  exit;
}

//Define Login Variables + Error Variables.
$username = $password = "";
$username_err = $password_err = $login_err = "";

//SQL Statements

//$sql = "SELECT id, username, password FROM users WHERE username = ?";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  echo '2';
  // Check if username is empty
  if(empty(trim($_POST["username"]))){
      $username_err = "Please enter username.";
      echo '3';
  } else{
      $username = trim($_POST["username"]);
      echo '4';
  }

  // Check if password is empty
  if(empty(trim($_POST["password"])))
  {
    $password_err = "Please enter your password.";
    echo '5';
  } else
  {
    $password = trim($_POST["password"]);
    echo '6';
  }

  // Validate credentials
  if(empty($username_err) && empty($password_err))
  {
    echo '7';
    $sql = "SELECT id, username, password FROM user WHERE username = ?";
    if($stmt = mysqli_prepare($db, $sql))
    {
      mysqli_stmt_bind_param($stmt, "s", $param_username);
      echo '8';

      // Set parameters
      $param_username = $username;

      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt))
      {
        // Store result
        mysqli_stmt_store_result($stmt);
        echo '9';

        // Check if username exists, if yes then verify password
        if(mysqli_stmt_num_rows($stmt) == 1)
        {                    
          // Bind result variables
          mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
          echo '10';

          if(mysqli_stmt_fetch($stmt))
          {
            if(password_verify($password, $hashed_password))
            {
                // Password is correct, so start a new session
                session_start();
                echo '11';
                // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;                            
                
                // Redirect user to welcome page
                header("location: mipstart.html");
                echo '12';
            } 
            else
            {
                // Password is not valid, display a generic error message
                $login_err = "Invalid username or password.";
            }
          }
        } 
        else
        {
          // Username doesn't exist, display a generic error message
          $login_err = "Invalid username or password.";
        }
      } 
      else
      {
        echo "Oops! Something went wrong. Please try again later.";
      }
      // Close statement
      mysqli_stmt_close($stmt);
    }
  }

  // Close connection
  mysqli_close($db);
}
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
        <a class="navbar-brand" href="#myPage"><img style="height: 250px; width: 250px" src="./src/missionbw.png"><p style="font-size: 25pt">Mission ImPAWssible</p></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">

        <li><a href="#myPage">Αρχική</a></li>
        <li><a href="#about">Ποιοι είμαστε</a></li>
        <li><a href="login.html">Εγγραφή/Σύνδεση</a></li>
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#more">Περισσότερα
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="advice.html">Χρήσιμες συμβουλές</a></li>
              <li><a href="ktiniatroi.html">Κτηνίατροι</a></li>
              <li><a href="ekpaideutes.html">Εκπαιδευτές</a></li>
              <li><a href="donation.html">Δωρεές</a></li>
              <li><a href="forum.html">Forum</a></li>
              <li><a href="draseis.html">Δράσεις</a></li>
              
            </ul>
          </li> 
        </ul>
        </ul>
      </div>
      <form class="navbar-form navbar-right" action="/action_page.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
    </div>
  </nav>

<div class="container">
  <br>
  <h2 style="text-transform: none;">Login Form</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
        <span class="invalid-feedback"><?php echo $username_err; ?></span>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" placeholder="Enter Password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
      <span class="invalid-feedback"><?php echo $password_err; ?></span>
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <input type="submit" class="btn btn-primary" value="Login">
    <span class="invalid-feedback"><?php echo $login_err; ?></span>
    <button type="button" class="btn btn-default"><a href="file:///C:/xampp/htdocs/mission_impawsible/register_xr.php">I don't have an account</a></button>
    <button type="button" class="btn btn-link">I forgot my password</button>
  </form>
</div>

</body> 
</html>