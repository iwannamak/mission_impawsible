<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_mimp');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME) or die("Could not connect to database");
 
// Define variables and initialize with empty values
$name = $age = $sex = $animal_species = $race = $color = $place = $size = $health_problems = $id_user = $microchip = $neutering = "";
$name_err = $age_err = $sex_err = $animal_species_err = $race_err = $color_err = $place_err = $size_err = $health_problems_err = $id_user_err = $microchip_err = $neutering_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter the animal's name.";     
    } 
    else{
        $name = trim($_POST["name"]);
    }

    if(empty(trim($_POST["age"]))){
      $age_err = "Please enter age.";     
    } 
    else{
      $age = trim($_POST["age"]);
    } 

    if(empty(trim($_POST["sex"]))){
        $sex_err = "Please enter sex.";     
    } 
    else{
        $sex = trim($_POST["sex"]);
    }

    if(empty(trim($_POST["animal_species"]))){
        $animal_species_err = "Please enter animal species.";     
    } 
    else{
        $animal_species = trim($_POST["animal_species"]);
    }

    if(empty(trim($_POST["race"]))){
        $race_err = "Please enter race.";     
    } 
    else{
        $race = trim($_POST["race"]);
    }

    if(empty(trim($_POST["color"]))){
        $color_err = "Please enter color.";     
    } 
    else{
        $color = trim($_POST["color"]);
    }

    if(empty(trim($_POST["place"]))){
        $place_err = "Please enter place of origin.";     
    } 
    else{
        $place = trim($_POST["place"]);
    }

    if(empty(trim($_POST["size"]))){
        $size_err = "Please enter the size.";     
    } 
    else{
        $size = trim($_POST["size"]);
    }

    if(empty(trim($_POST["health_problems"]))){
        $health_problems_err = "Please enter the health problems.";     
    } 
    else{
        $health_problems = trim($_POST["health_problems"]);
    }

    if(empty(trim($_POST["id_user"]))){
        $id_user_err = "Please enter the owner's user id.";     
    } 
    else{
        $id_user = trim($_POST["id_user"]);
    }

    if(empty(trim($_POST["microchip"]))){
        $microchip_err = "Please enter whether the animal has a microchip.";     
    } 
    else{
        $microchip = trim($_POST["microchip"]);
    }

    if(empty(trim($_POST["neutering"]))){
        $neutering_err = "Please enter whether the animal is neutered.";     
    } 
    else{
        $neutering = trim($_POST["neutering"]);
    }
   
    // Check input errors before inserting in database
    if(empty($name_err) && empty($age_err) && empty($sex_err) && empty($animal_species_err) && empty($race_err) && empty($color_err) && empty($place_err) && empty($size_err) && empty($health_problems_err) && empty($id_user_err) && empty($microchip_err) && empty($neutering_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO animal (name, age, sex, animal_species, race, color, place, size, health_problems, id_user, microchip, neutering) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssssss", $param_name, $param_age, $param_sex, $param_animal_species, $param_race, $param_color, $param_place, $param_size, $param_health_problems , $param_id_user, $param_microchip, $param_neutering);
            
            // Set parameters
            $param_name= $name; 
            $param_age= $age;
            $param_sex= $sex;
            $param_animal_species= $animal_species;
            $param_race= $race;
            $param_color= $color;
            $param_place= $place;
            $param_size=  $size;
            $param_health_problems= $health_problems;
            $param_id_user= $id_user;
            $param_microchip= $microchip;
            $param_neutering= $neutering;
                     
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                header("location: forma_kataxwrhshs.php");
                echo "Το ζώο σας καταχωρήθηκε!";
            } else{
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
            <li><a href="ktiniatroi.html">Κτηνίατροι</a></li>
            <li><a href="ekpaideutes.html">Εκπαιδευτές</a></li>
            <li><a href="donation.html">Δωρεές</a></li>
            <li><a href="forum.html">Forum</a></li>
            <li><a href="draseis.html">Δράσεις</a></li>
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
    <h2>ΦΟΡΜΑ ΚΑΤΑΧΩΡΗΣΗΣ ΝΕΟΥ ΚΑΤΟΙΚΙΔΙΟΥ</h2>
    <br>
    <h4>ΓΙΑ ΝΑ ΚΑΤΑΧΩΡΗΣΕΙΣ ΕΝΑ ΖΩΑΚΙ ΠΡΟΣ ΥΙΟΘΕΣΙΑ ΣΥΜΠΛΗΡΩΣΕ ΤΗΝ ΠΑΡΑΚΑΤΩ ΦΟΡΜΑ ΜΕ ΤΑ ΣΤΟΙΧΕΙΑ ΤΟΥ</h4>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group">
        <label>Όνομα</label>
        <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
        <span class="invalid-feedback"><?php echo $name_err; ?></span>
      </div>
      <div class="form-group">
        <label>Ηλικία</label>
        <input type="number" name="age" class="form-control<?php echo (!empty($age_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $age; ?>">
        <span class="invalid-feedback"><?php echo $age_err; ?></span>
      </div>
      <div class="form-group">
        <label>Φύλο</label>
        <select  name="sex" class="form-control<?php echo (!empty($sex_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sex; ?>">
        <span class="invalid-feedback"><?php echo $sex_err; ?></span>
            <option value="male">αρσενικό</option>
            <option value="female">θυληκό</option>
        </select>
      </div>
      <div class="form-group">
        <label>Είδος ζώου</label>
        <select  name="animal_species" class="form-control<?php echo (!empty($animal_species_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $animal_species; ?>">
        <span class="invalid-feedback"><?php echo $animal_species_err; ?></span>
            <option value="dog">σκύλος</option>
            <option value="cat">γάτα</option>
            <option value="bird">πτηνό</option>
        </select>
      </div> 
      <div class="form-group">
        <label>Ράτσα/Είδος</label>
        <input type="text" name="race" class="form-control<?php echo (!empty($race_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $race; ?>">
        <span class="invalid-feedback"><?php echo $race_err; ?></span>
      </div>
      <div class="form-group">
        <label>Χρώμα</label>
        <select  name="color" class="form-control<?php echo (!empty($color_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $color; ?>">
        <span class="invalid-feedback"><?php echo $color_err; ?></span>
            <option value="white">λευκό</option>
            <option value="black">μαύρο</option>
            <option value="grey">γκρι</option>
            <option value="brown">καφέ</option>
            <option value="misc">ανάμεικτο</option>
        </select>
      </div>  
      <div class="form-group">
        <label>Περιοχή</label>
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
      <div class="form-group">
        <label>Μέγεθος</label>
        <select  name="size" class="form-control<?php echo (!empty($size_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $size; ?>">
        <span class="invalid-feedback"><?php echo $size_err; ?></span>
            <option value="small">μικρό</option>
            <option value="medium">μεσσαίο</option>
            <option value="large">μεγάλο</option>
        </select>
      </div>
      <div class="form-group">
        <label>Προβλήματα Υγείας</label>
        <input type="text" name="health_problems" class="form-control<?php echo (!empty($health_problems_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $health_problems; ?>">
        <span class="invalid-feedback"><?php echo $health_problems_err; ?></span>
      </div>
      <div class="form-group">
        <label>Id χρήστη</label>
        <input type="number" name="id_user" class="form-control <?php echo (!empty($id_user_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $id_user; ?>">
        <span class="invalid-feedback"><?php echo $id_user_err; ?></span>
      </div>
      <div class="form-group">
        <label>Microchip</label>
        <select  name="microchip" class="form-control<?php echo (!empty($microchip_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $microchip; ?>">
        <span class="invalid-feedback"><?php echo $microchip_err; ?></span>
            <option value="yes">ναι</option>
            <option value="no">όχι</option>
        </select>
      </div>
      <div class="form-group">
        <label>Στείρωση</label>
        <select  name="neutering" class="form-control<?php echo (!empty($neutering_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $neutering; ?>">
        <span class="invalid-feedback"><?php echo $neutering_err; ?></span>
            <option value="yes">ναι</option>
            <option value="no">όχι</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Αποστολή</button>
    </form>
</div>

<footer class="container-fluid text-center">
    <a href="forma_kataxwrhshs.php" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Project Τεχνολογίας Λογισμικού 2021</a></p>
  </footer>
  
  <script>
  $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    
    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;
  
        var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
      });
    });
  })
  </script>
</body>