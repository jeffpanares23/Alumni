<?php session_start() ?>
<?php 
include 'admin/db_connect.php'; 
include('header.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Welcome! Please Enter Your School ID</title>
    <link rel="stylesheet" href="loginfirst/style.css">
  </head>

  <body>
    <div class="center">
      <h1>Login</h1>
      <form action="" id="login-frm">

        <div class="txt_field">
          <input type="text" name="school_id" required>
          <span></span>
          <label>School ID</label>
        </div>

        <input type="submit" value="Login" id="login">
        <div class="signup_link">
          Not yet Registered? <a href="#">Contact Admin</a>
        </div>

      </form>
    </div>

  </body>
</html>

<script>
  $('#login-frm').submit(function(e){
    e.preventDefault()
    $('#login-frm button[type="submit"]').attr('disabled',true).html('Logging in...');
    if($(this).find('.alert-danger').length > 0 )
      $(this).find('.alert-danger').remove();
    $.ajax({
      url:'admin/ajax.php?action=login1',
      method:'POST',
      data:$(this).serialize(),
      error:err=>{
        console.log(err)
    $('#login-frm button[type="submit"]').removeAttr('disabled').html('Login');

      },
      success:function(resp){
        if(resp == 1){
                location.replace('index.php?page=signup');
        }else if(resp == 2){
          $('#login-frm').prepend('<div class="alert alert-danger">Your account is not yet added. Please contact admin.</div>')
          $('#login-frm button[type="submit"]').removeAttr('disabled').html('Login');
        }else{
          $('#login-frm').prepend('<div class="alert alert-danger">Email or password is incorrect.</div>')
          $('#login-frm button[type="submit"]').removeAttr('disabled').html('Login');
        }
      }
    })
  })
</script>
