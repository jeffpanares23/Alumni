<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include('admin/db_connect.php');
    ob_start();
        $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
         foreach ($query as $key => $value) {
          if(!is_numeric($key))
            $_SESSION['system'][$key] = $value;
        }
    ob_end_flush();
    
    ?>

  <head>
    <title>Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="admin/assets/uploads/<?php echo $_SESSION['bio']['avatar'] ?>" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-orange">
            <h1><?php echo $_SESSION['login_name'] ?></h1>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION['bio']['connected_to'] ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION['bio']['address'] ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION['bio']['email'] ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION['bio']['contact'] ?></p>

          <p><i class="fa fa-venus-mars fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION['bio']['gender'] ?></p>
          <p><i class="fa fa-users fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION['bio']['civil'] ?></p>
          <p><i class="fa fa-calendar fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION['bio']['dob'] ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION['bio']['contact'] ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p>Adobe Photoshop</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-orange" style="width:90%">90%</div>
          </div>
          <p>Photography</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-orange" style="width:80%">80%</div>
          </div>
          <p>Illustrator</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-orange" style="width:75%">75%</div>
          </div>
          <p>Media</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-orange" style="width:50%">50%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-orange" style="height:24px;width:100%"></div>
          </div>
          <p>Spanish</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-orange" style="height:24px;width:55%"></div>
          </div>
          <p>German</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-orange" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-orange "></i>Work Experience <a class="w3-button w3-round-xxlarge w3-small w3-light-grey" style="float: right;" href="index.php">Exit</a> <!-- End footer --></h2>

        <div class="w3-container">
          <h5 class="w3-opacity"><b>Front End Developer</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $_SESSION['bio']['batch'] ?> - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>Under Development</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Web Developer</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $_SESSION['bio']['batch'] ?></h6>
          <p>Under Development</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Graphic Designer</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $_SESSION['bio']['batch'] ?></h6>
          <p>Under Development</p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-orange"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Web Dev</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>CEBU TECHNOLOGICAL UNIVERSITY</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $_SESSION['bio']['batch'] ?></h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $_SESSION['bio']['batch'] ?></h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->
<footer class="w3-container w3-black w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <p class="w3-medium">“Always remember that you are absolutely unique. Just like everyone else.”</p>
 <a class="w3-button w3-round-xxlarge w3-small w3-light-grey w3-margin-bottom" href="index.php">Close</a> <!-- End footer -->
 </footer>

</body>
<?php $conn->close() ?>
</html>
