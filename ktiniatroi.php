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
<!-- <nav class="navbar navbar-expand-lg">
      <div class="navbar-header">
        <a class="navbar-brand" href="#myPage">
            <span><img style="height: 300px; width: 300px"    
              src="missionbw.png"/></span>-->
      <!--  </a>
      </div> 
      <div class="justify-content-end">
        <div class="navbar-header">
          <a href="#myPage" class="navbar-left"><img src="missionbw.png"></a>
              <p style = "color: #e90247; font-size: 25pt" > Mission ImPAWssible </p> <br>
              <p style = "color: #000000; font-size: 15pt" > Putting stray paws in a warm home </p>
        </div>
        <ul class = "navbar-nav ml-auto">
        <li><a href="#myPage">Αρχική</a></li>
        <li><a href="#about">Ποιοι είμαστε</a></li>
        <li><a href="#login">Εγγραφή/Σύνδεση</a></li>
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#more">Περισσότερα
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#advice">Χρήσιμες συμβουλές</a></li>
              <li><a href="#vets">Κτηνίατροι</a></li>
              <li><a href="#trainers">Εκπαιδευτές</a></li>
              <li><a href="#donations">Δωρεές</a></li>
            </ul>
          </li> 
        </ul>
      </ul>
      </div>
</nav>
-->
<div class="container-fluid">
  <form>
  </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="./src/whitepuppy.jpg" alt="adopt">
            <div class="carousel-caption">
              <h3 style = "font-size: 25pt"> Θέλεις να μεγαλώσεις την οικογένειά σου με ένα σκυλάκι;</h3>
              <p style = "color: #e90247; font-size: 15pt">Προσάρμοσε τα φίλτρα στις δικές σου ανάγκες και βρες τον τετράποδο φίλο που θα σου αλλάξει τη ζωή!</p>
              <button type="button" class="btn btn-primary-outline">Μάθε περισσότερα</button>
              <button type="button" class="btn btn-primary-outline">
                <span class="glyphicon glyphicon-menu-right"></span>
                </button>
            </div>
          </div>
      
          <div class="item">
            <img src="./src/blackdog.jpg" alt="donations">
            <div class="carousel-caption">
              <h3 style = "font-size: 25pt">Δωρεές</h3>
              <p style = "color: #e90247; font-size: 15pt">Στήριξε το έργο μας κάνοντας μια δωρεά</p>
              <button type="button" class="btn btn-primary-outline">Μάθε περισσότερα</button>
              <button type="button" class="btn btn-primary-outline">
                <span class="glyphicon glyphicon-menu-right"></span>
                </button>
            </div>
          </div>
      
          <div class="item">
            <img src="./src/docdog.jpeg" alt="vets">
            <div class="carousel-caption">
              <h3 style = "font-size: 25pt">Χρειάζεσαι βοήθεια;</h3>
              <p style = "color: #e90247; font-size: 15pt">Έλα σε επικοινωνία με τους συνεργαζόμενους κτηνιάτρους και εκπαιδευτές</p>
              <button type="button" class="btn btn-primary-outline">Μάθε περισσότερα</button>
              <button type="button" class="btn btn-primary-outline">
                <span class="glyphicon glyphicon-menu-right"></span>
                </button>
            </div>
          </div>
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </form>
</div>
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>ΚΤΗΝΙΑΤΡΟΙ</h2><br>
      <p>
          Δεν έχετε δικό σας κτηνίατρο; Μπορούμε να σας προτείνουμε εμείς κάποιον. Δείτε παρακάτω κάποιους από τους 
          συνεργάτες μας, που μπορεί να βρίσκεται και κοντά σας.
      </p>
    </div>
    <div class="col-sm-4">
      <img style="height: 400px; width: 400px" src="./src/missionbw.png" alt="mbw">
    </div>
  </div>
</div>
<!-- Container (Services Section) -->
<!--<div id="services" class="container-fluid text-center">
  <h2>Οι εκπαιδευτες μας</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <img style="height: 300px; width: 300px" src="./src/corgo.jpg" alt="adopt">
      <h4>Υιοθεσία</h4>
      <p>Ακολούθησε τα βήματα και υιοθέτησε ένα σκύλο.</p>
    </div>
    <div class="col-sm-4">
      <img style="height: 300px; width: 300px" src="./src/obedient.jpg" alt="train">
      <h4>Εκπαίδευση</h4>
      <p>Μάθε ό,τι χρειάζεσαι σχετικά με την εκπαίδευση του σκύλου σου ή βρες έναν πιστοποιημένο εκπαιδευτή.</p>
    </div>
    <div class="col-sm-4">
      <img style="height: 300px; width: 300px" src="./src/dogtor.jpeg" alt="care">
      <h4>Φροντίδα</h4>
      <p>Μάθε τα πάντα σχετικά με τη φροντίδα του σκύλου σου και βρες τον κοντινότερο κτηνίατρο σε εσένα.</p>
    </div>
  </div>
</div> -->
<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>οι κτηνιατροι μας</h2><br>
  <h4>Κτηνίατροι που συνεργαζόμαστε και σίγουρα μπορούν να σας βοηθήσουν</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="./src/karaggeli.jpg" alt="karaggeli" width="300" height="300">
        <p><strong>Έλενα Καραγγελή</strong></p>
        <p>Αθήνα, Αττική</p>
        <a href="https://www.karagelivet.gr/">Επισκεφτείτε την ιστοσελίδα του!</a> 
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="./src/petmedicalcare.jpg" alt="petmedicalcare" width="300" height="300">
        <p><strong>Pet Medical Care</strong></p>
        <p>Γαλάτσι, Αττική</p>
        <a href="https://petmedicalcare.gr/">Επισκεφτείτε την ιστοσελίδα του!</a> 
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="./src/medicalanimal.jpg" alt="medicalanimal" width="300" height="300">
        <p><strong>Medical Animal Clinic</strong></p>
        <p>Νέα Σμύρνη, Αττική</p>
        <a href="https://www.medicanimal.gr/">Επισκεφτείτε την ιστοσελίδα του!</a> 
      </div>
    </div>
  </div><br>
  
  <!--<h2>Τι ειπαν οι χρηστες μας</h2> -->
 <!-- <div id="myCarousel" class="carousel slide text-center" data-ride="carousel"> -->
    <!-- Indicators -->
  <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->
    <!-- Wrapper for slides -->
  <!--  <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Υιοθέτησα μια σκυλίτσα από το Mission ImPAWssible και είναι 2 χρόνια τώρα αγαπημένο μέλος της οικογένειάς μας"<br><span>Αγγελική Κούρου, Μελίσσια</span></h4>
      </div>
      <div class="item">
        <h4>"Μέσω της σελίδας βρήκα τον τωρινό κτηνίατρό μου. Εγώ και ο Μπούμπι δεν τον αλλάζουμε με τίποτα! Μπράβο M.I!"<br><span>Μαρία Παπαδοπούλου, Πάτρα</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this site?"<br><span>Chandler Bing, Κάτω Πατήσια</span></h4>
      </div>
    </div> -->
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container">
    <h2>ΚΤΗΝΙΑΤΡΟΙ ΚΟΝΤΑ ΣΑΣ</h2>
    <br>
    <h4>Βρείτε κτηνίατρους κοντά σας</h4>
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
      $sql = "SELECT firstname, lastname, email, phone, address FROM vet INNER JOIN user ON vet_id = id WHERE user.place = '$place' ";
      $result = mysqli_query($db, $sql);

      if(mysqli_num_rows($result) > 0 ){
          // output data of each row
          while($row = mysqli_fetch_assoc($result)){
        echo "Όνομα: " . $row["firstname"]. "<br>" ;
        echo "Επίθετο: " . $row["lastname"]. "<br>" ;
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
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">ΕΠΙΚΟΙΝΩΝΙΑ</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Επικοινωνήστε μαζί μας για επιπλέον πληροφορίες</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> 25ης Μαρτίου 7, Κάτω Καστρίτσι</p>
      <p><span class="glyphicon glyphicon-phone"></span> 210 12345678</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@missionimp.gr</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Image of location/map -->
<img src="./src/location.png" class="w3-image w3-greyscale-min" style="width:100%">
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
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
</html>