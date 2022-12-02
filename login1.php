
<div class="container-fluid">
	<form action="" id="login-frm">
		<img src="assets/logos/ctulogo.png" class="profile-img">
		<div class="form-group">
			<label for="" class="control-label">School ID</label>
			<input type="text" name="school_id" required="" class="form-control">
		</div>
		<div class="form-group">
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