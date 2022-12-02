<?php session_start() ?>
<div class="container-fluid">
	<form action="" id="login-frm">
		<img src="assets/logos/ctulogo.png" class="profile-img">
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="email" name="username" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Password</label>
			<input type="password" name="password" required="" class="form-control">
			<br>
			<a href="index.php?page=signup" class="button btn btn-info float-right">Create New Account</a>
			<button class="button btn btn-info">Login</button>
			<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
		</div>
	</form>
</div>

<style>
	#uni_modal .modal-footer{
		display:none;
	}

	.form-control:hover {
		background-color: lightgray;
	}
	a #new_account:hover {
		text-decoration: none;
		color: white;
	}
</style>

<script>
	$('#login-frm').submit(function(e){
		e.preventDefault()
		$('#login-frm button[type="submit"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=login2',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-frm button[type="submit"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='<?php echo isset($_GET['redirect']) ? $_GET['redirect'] : 'profile.php' ?>';
				}else if(resp == 2){
					$('#login-frm').prepend('<div class="alert alert-danger">Your account is not yet verified.</div>')
					$('#login-frm button[type="submit"]').removeAttr('disabled').html('Login');
				}else{
					$('#login-frm').prepend('<div class="alert alert-danger">Email or password is incorrect.</div>')
					$('#login-frm button[type="submit"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>