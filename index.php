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
    include('header.php');
    ?>

<style>

header.masthead 
  {
    /*background: url(admin/assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>);*/
    background-repeat: no-repeat;
  	background-size: cover;
    background-position: top;
    padding-top: 0px;
  }
    
  #viewer_modal .btn-close 
  {
    position: absolute;
    z-index: 999999;
    /*right: -4.5em;*/
    background: unset;
    color: white;
    border: unset;
    font-size: 27px;
    top: 0;
  }

#viewer_modal .modal-dialog 
  {
    width: 80%;
    max-width: unset;
    height: calc(90%);
    max-height: unset;
  }

#viewer_modal .modal-content 
  {
    background: black;
    border: unset;
    height: calc(100%);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
#viewer_modal img,#viewer_modal video{
    max-height: calc(100%);
    max-width: calc(100%);
  }

body 
  {
    background: #fff !important;
  }

footer
  {
    background: black !important;
  }

 #mainNav.navbar-scrolled 
  {
      box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%);
      background-color: #800000;
      color: white !important;
  }

a.jqte_tool_label.unselectable 
  {
      height: auto !important;
      min-width: 4rem !important;
      padding:5px
  }

.container 
  {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    background-color: rgb(0 0 0 / 0%);
  }

.card-body, .banner
  {
    background-color: #e9ecef;
  }

.card-body#event
  {
    background-color: #800000;
  }

.text-white 
  {
      color: #ffffff !important;
  }

#selects:active {
  transform: translateY(4px);
}

#login:active {
  transform: translateY(4px);
}

@media (max-width: 991.98px) {
  nav#mainNav .navbar-brand {
    display: none;
  }
  .navbar-light {
    margin-left: -150px;
  }

}
@media (max-width: 991.98px) {
  img#portal {
    display: none;
  }
}

@media (max-width: 900px) {
  .navbar-light {
    margin-left: 0px;
  }

}

@media (max-width: 615px) {
  .navbar-light {
    margin-left: 0px;
  }

}

#portal {
  display: inline-block;
  width: 40%;
  float: left; 
  position: top; 
  margin-top:5px; 
  margin-right: 0px;  
  margin-left: 0px;
}

#mainNav .navbar-nav .nav-item .nav-link {
  color: #000;
  padding-right: 0px;
  margin-right: 0px;
}
#mainNav .navbar-nav .nav-item .nav-link:hover {
  color: whitesmoke;
  transform: translateY(4px);
}
</style>

    <body id="page-top">

      <!-- Navigation-->
      <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>

        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <a class="navbar-brand js-scroll-trigger" href="homepage.php" style="margin-right: 0px;"><img src="assets/logos/ctulogo.png" style=" display: inline-block; width: 90px; float: left; position: top; margin-top:5px; margin-right: 0px;  margin-left: 20px;" class="ctulogo"></a>
            <img src="assets/logos/login-logo.png" id="portal">

              <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php" id="selects">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=alumni_list" id="selects">Alumni</a></li>
                        <?php if(isset($_SESSION['login_id'])): ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=careers" id="selects">Jobs</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=forum" id="selects">Forums</a></li>
                        <?php endif; ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#" id="selects">About</a></li>
                        <?php if(!isset($_SESSION['login_id'])): ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#" id="login" >Login</a></li>
                        <?php else: ?>
                        <li class="nav-item" id="selects">
                          <div class=" dropdown mr-4">
                              <a href="#" class="nav-link js-scroll-trigger"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['bio']['firstname']?>  <?php echo $_SESSION['bio']['lastname']?> <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                                  <a class="dropdown-item" href="profile.php" id="manage_my_account"><i class="fa fa-user"></i> View Advanced Profile</a>
                                  <a class="dropdown-item" href="index.php?page=my_account" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
                                  <a class="dropdown-item" href="admin/ajax.php?action=logout2"><i class="fa fa-power-off"></i> Logout</a>
                                </div>
                          </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
       
        <?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
        ?>
       

      <div class="modal fade" id="confirm_modal" role='dialog'>
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Confirmation</h5>
          </div>
          <div class="modal-body">
            <div id="delete_content"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="uni_modal" role='dialog'>
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <img src="assets/logos/login-logo.png" style=" display: inline-block; width: 100%; float: left; position: top; margin-top:5px; margin-right: 0px;  margin-left: 0px;">
            <h5 class="modal-title"></h5>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="uni_modal_right" role='dialog'>
        <div class="modal-dialog modal-full-height  modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="fa fa-arrow-righ t"></span>
            </button>
          </div>
          <div class="modal-body">
          </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="viewer_modal" role='dialog'>
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
                  <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
                  <img src="" alt="">
          </div>
        </div>
      </div>
      <div id="preloader"></div>
      <footer class=" py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0 text-white">Contact us</h2>
                        <hr class="divider my-4" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div class="text-white"><?php echo $_SESSION['system']['contact'] ?></div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:<?php echo $_SESSION['system']['email'] ?>"><?php echo $_SESSION['system']['email'] ?></a>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
              <div class="small text-center text-muted"><a href="#">DATA PRIVACY STATEMENT</a> | <a href="#">TERMS OF USE</a> | <a href="https://www.facebook.com/groups/301447083752625/" target="_blank">FACEBOOK PAGE</a><br>Copyright © 2022 - <?php echo $_SESSION['system']['name'] ?>
              </div>
            </div>
      </footer>
        
       <?php include('footer.php') ?>
    </body>
    <script type="text/javascript">
      $('#login').click(function(){
        uni_modal("",'login.php')
      })
/*
a.jqte_tool_label.unselectable {
    height: 22px !important;
}*/
    </script>
    <?php $conn->close() ?>

</html>
