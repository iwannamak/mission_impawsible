<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_mimp');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME) or die("Could not connect to database");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mission ImPAWssible Forum</title>
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
    margin-top:20px;
    text-align: left;
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

.btn-default
 
{
 
background-color: #fff;
 
color:#e90247;
 
border-color: #e90247;
 
} 
   
.inner-wrapper {
    position: relative;
    height: calc(100vh - 3.5rem);
    transition: transform 0.3s;
}
@media (min-width: 992px) {
    .sticky-navbar .inner-wrapper {
        height: calc(100vh - 3.5rem - 48px);
    }
}

.inner-main,
.inner-sidebar {
    position: absolute;
    top: 0;
    bottom: 0;
    display: flex;
    flex-direction: column;
}
.inner-sidebar {
    left: 0;
    width: 235px;
    border-right: 1px solid #fff;
    background-color: #fff;
    z-index: 1;
}
.inner-main {
    right: 0;
    left: 235px;
}
.inner-main-footer,
.inner-main-header,
.inner-sidebar-footer,
.inner-sidebar-header {
    height: 3.5rem;
    border-bottom: 1px solid #fff;
    display: flex;
    align-items: center;
    padding: 0 1rem;
    flex-shrink: 0;
}
.inner-main-body,
.inner-sidebar-body {
    padding: 1rem;
    overflow-y: auto;
    position: relative;
    flex: 1 1 auto;
}
.inner-main-body .sticky-top,
.inner-sidebar-body .sticky-top {
    z-index: 999;
}
.inner-main-footer,
.inner-main-header {
    background-color: #fff;
}
.inner-main-footer,
.inner-sidebar-footer {
    border-top: 1px solid #fff;
    border-bottom: 0;
    height: auto;
    min-height: 3.5rem;
}
@media (max-width: 767.98px) {
    .inner-sidebar {
        left: -235px;
    }
    .inner-main {
        left: 0;
    }
    .inner-expand .main-body {
        overflow: hidden;
    }
    .inner-expand .inner-wrapper {
        transform: translate3d(235px, 0, 0);
    }
}

#divheight {
  height: 150px;
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

.nav .show>.nav-link.nav-link-faded, .nav-link.nav-link-faded.active, .nav-link.nav-link-faded:active, .nav-pills .nav-link.nav-link-faded.active, .navbar-nav .show>.nav-link.nav-link-faded {
    color: #e90247;
    background-color: #fff;
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #e90247;
}
.nav-link.has-icon {
    display: flex;
    align-items: center;
}
.nav-link.active {
    color: #e90247;
}
.nav-pills .nav-link {
    border-radius: .25rem;
}
.nav-link {
    color: #4a5568;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}
</style>
</head>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="mipstart.html"><img style="height: 250px; width: 250px" src="./src/missionbw.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="mipstart.html">Αρχική</a></li>
      <li><a href="mipstart.html">Ποιοι είμαστε</a></li>
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
  </div>
</nav>

    <!-- Container (Services Section) -->
<div class="container">
    <h2>ΦΙΛΟΖΩΙΚΕΣ ΚΟΝΤΑ ΣΑΣ</h2>
    <br>
    <h4>Βρείτε φιλοζωικές κοντά σας</h4>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group">
        <label>Διαλέξτε Περιοχή</label>
        <select  name="place" class="form-control<?php echo (!empty($place_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $place; ?>">
        <span class="invalid-feedback"><?php echo $place_err; ?></span>
            <option value="Ανατολική Μακεδονία και Θράκη">Ανατολική Μακεδονία και Θράκη</option>
            <option value="Κεντρική Μακεδονία">Κεντρική Μακεδονία</option>
            <option value="Δυτική Μακεδονία">Δυτική Μακεδονία</option>
            <option value="Ήπειρος">Ήπειρος</option>
            <option value="Θεσσαλία">Θεσσαλία</option>
            <option value="Ιόνιοι Νήσοι">Ιόνιοι Νήσοι</option>
            <option value="Δυτική Ελλάδα">Δυτική Ελλάδα</option>
            <option value="Στερεά Ελλάδα">Στερεά Ελλάδα</option>
            <option value="Αττική">Αττική</option>
            <option value="Πελοπόννησος">Πελοπόννησος</option>
            <option value="Βόρειο Αιγαίο">Βόρειο Αιγαίο</option>
            <option value="Νότιο Αιγαίο">Νότιο Αιγαίο</option>
            <option value="Κρήτη">Κρήτη</option>
        </select>
      </div>  
 
      <button type="submit" class="btn btn-primary">Αποστολή</button>
    </form>
    </form>
</div>

<?php
// Define variables and initialize with empty values
$place = "";
$place_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(empty(trim($_POST["place"]))){
        $place_err = "Please enter your location.";     
    } 
    else{
        $place = trim($_POST["place"]);
    }
    
    // Check input errors before inserting in database
    if(empty($place_err)){
        
        // Prepare an insert statement
        $sql = "SELECT shelter_name, email, place, phone, address FROM animal_shelter  WHERE place = '$place' ";
        $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result) > 0 ){
            // output data of each row
            while($row = mysqli_fetch_assoc($result)){
          echo "Όνομα: " . $row["shelter_name"]. "<br>" ;
          echo "email:  " . $row["email"]. "<br>" ;
          echo "Διεύθυνση: " . $row["address"]. "<br>";
          echo "Τηλέφωνο: " . $row["phone"]. "<br>"; 
          echo "<br>";
         }
        } 
        else {
          echo "0 results";
         }
      }
         
    }
    
    // Close connection
    mysqli_close($db);

?>
