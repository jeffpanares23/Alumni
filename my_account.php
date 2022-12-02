<?php 
include 'admin/db_connect.php'; 

?>
<style>
    .masthead{
        min-height: 23vh !important;
        height: 33vh !important;
    }
     .masthead:before{
        min-height: 23vh !important;
        height: 23vh !important;
    }
    img#cimg{
        max-height: 10vh;
        max-width: 6vw;
    }

    .card-body {
    background-color: orange;
    }
</style>
        <header class="masthead">
            <div class="container-fluid h-180">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                    	<h3 class="text-black">Manage Account</h3>
                        <hr class="divider my-4" />

                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>
                    
                </div>
            </div>
        </header>
            <div class="container mt-3 pt-2">
               <div class="col-lg-12">
                   <div class="card mb-4">
                        <div class="card-body">
                            <div class="container-fluid">
                                <!----------------------------------------------------------------FORM PANEL---------------------------------------------------------------------->
                                <div class="col-md-12">
                                    <form action="" id="update_account">
                                        <!------------------------------------------------------------------------------------------>
                                        <label for="" class="control-label"  style="color: black;">PERSONAL DATA</label>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Last Name</label>
                                                <input type="text" class="form-control" name="lastname" value="<?php echo $_SESSION['bio']['lastname'] ?>" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">First Name</label>
                                                <input type="text" class="form-control" name="firstname" value="<?php echo $_SESSION['bio']['firstname'] ?>" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Middle Name</label>
                                                <input type="text" class="form-control" name="middlename" value="<?php echo $_SESSION['bio']['middlename'] ?>" required>
                                            </div>
                                        </div>
                                        <!------------------------------------------------------------------------------------------------------------------------>
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="" class="control-label">Permanent Address</label>
                                                <input type="text" class="form-control" name="address"  value="<?php echo $_SESSION['bio']['address'] ?>" required>
                                            </div>
                                        </div>
                                        <!------------------------------------------------------------------------------------------------------------------------>
                                        <div class="row form-group">    
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Gender</label>
                                                <select class="custom-select" name="gender" >
                                                    <option <?php echo $_SESSION['bio']['gender'] =='Male' ? 'selected' : '' ?>>Male</option>
                                                    <option <?php echo $_SESSION['bio']['gender'] =='Female' ? 'selected' : '' ?>>Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Civil Status</label>
                                                <select class="custom-select" name="civil" >
                                                    <option <?php echo $_SESSION['bio']['civil'] =='Single' ? 'selected' : '' ?>>Single</option>
                                                    <option <?php echo $_SESSION['bio']['civil'] =='Married' ? 'selected' : '' ?>>Married</option>
                                                    <option <?php echo $_SESSION['bio']['civil'] =='Divorced' ? 'selected' : '' ?>>Divorced</option>
                                                    <option <?php echo $_SESSION['bio']['civil'] =='Widowed' ? 'selected' : '' ?>>Widowed</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Contact Number</label>
                                                <input type="text" class="form-control" name="contact"  value="<?php echo $_SESSION['bio']['contact'] ?>" >
                                            </div>
                                        </div>
                                        <!------------------------------------------------------------------------------------------------------------------------>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Date of Birth</label>
                                                <input type="date" id="start" name="dob" value="<?php echo $_SESSION['bio']['dob'] ?>" >
                                            </div>
                                        </div>
                                        <!------------------------------------------------------------------------------------------------------------------------>
                                        <hr>
                                        <!------------------------------------------------------------------------------------------------------------------------>
                                        <label for="" class="control-label"  style="color: black;">EDUCATION AND EMPLOYMENT</label>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Year Graduated</label>
                                                <input type="input" class="form-control datepickerY" name="batch" value="<?php echo $_SESSION['bio']['batch'] ?>" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Course Graduated</label>
                                                <select class="custom-select" name="course_id" required>
                                                    <option></option>
                                                    <?php 
                                                    $course = $conn->query("SELECT * FROM courses order by course asc");
                                                    while($row=$course->fetch_assoc()):
                                                    ?>
                                                        <option value="<?php echo $row['id'] ?>"  <?php echo $_SESSION['bio']['course_id'] ==$row['id'] ? 'selected' : '' ?>><?php echo $row['course'] ?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Professional Examination(s) Passed</label>
                                                <input type="text" class="form-control" name="pep" value="<?php echo $_SESSION['bio']['pep'] ?>" list="mySuggestion"  required>
                                                <datalist id="mySuggestion">
                                                    <option>LICENSURE EXAMINATION FOR TEACHERS</option>
                                                    <option>REGISTERED NURSE</option>
                                                    <option>REGISTERED MECHANICAL ENGINEER</option>
                                                    <option>REGISTERED ELECTRICAL ENGINEER</option>
                                                    <option>REGISTERED CIVIL ENGINEER</option>
                                                    <option>REGISTERED ELECTRONIC AND COMMUNICATION ENGINEER</option>
                                                    <option>CSC SUB1</option>
                                                    <option>CSC SUB2</option>
                                                    <option>NONE</option>
                                                </datalist>
                                            </div>
                                        </div>
                                        <!------------------------------------------------------------------------------------------------------------------------>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="seeAnotherFieldGroup" class="control-label">Employment Status</label>
                                                <select class="form-control" name="connected_to" id="seeAnotherFieldGroup">
                                                    <option><?php echo $_SESSION['bio']['connected_to'] ?></option>
                                                     <option value="Regular">Regular</option>
                                                        <option value="Contractual">Contractual</option>
                                                        <option value="Temporary">Temporary</option>
                                                        <option value="Self-employed">Self-employed</option>
                                                        <option value="Casual">Casual</option>
                                                        <option value="Unemployed">Unemployed</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6" id="otherFieldGroupDiv">
                                                <label for="otherField1" class="control-label">Job Search Method</label>
                                                <select  name="jsm" id="otherField1" class="form-control">
                                                    <option><?php echo $_SESSION['bio']['jsm'] ?></option>
                                                    <option>Job Sites</option>
                                                    <option>Employer's Website</option>
                                                    <option>Social Networking Sites</option>
                                                    <option>Offline Networking</option>
                                                    <option>Newspapers</option>
                                                    <option>Employment Agencies</option>
                                                    <option>Work for Yourself</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!------------------------------------------------------------------------------------------------------------------------>
                                         <div class="form-group" id="otherFieldGroupDiv2">
                                            <div class="row">
                                              <div class="col-6">
                                                <label for="otherField2">Company</label>
                                                <select class="form-control" name="company" id="otherField2" required>
                                                    <option><?php echo $_SESSION['bio']['company'] ?></option>
                                                    <option>GOVERNMENT</option>
                                                    <option>PRIVATE</option>
                                                    <option>SELF-EMPLOYED</option>
                                                </select>
                                              </div>
                                              <div class="col-6">
                                                <label for="otherField3">Monthly Salary</label>
                                                <textarea name="salary" class="form-control" rows="1" placeholder="OPTIONAL" id="otherField3"><?php echo $_SESSION['bio']['salary'] ?></textarea>
                                              </div>
                                            </div>
                                        </div>
                                        <!------------------------------------------------------------------------------------------------------------------------>
                                        <hr>
                                        <!------------------------------------------------------------------------------------------>
                                        <label for="" class="control-label"  style="color: black;">PROFILE PICTURE</label>
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                    <label for="" class="control-label">Image (Files must not be more than 1MB. Accepted file formats are png, jpeg/jpg.)</label>
                                                    <input type="file" class="form-control" name="img" onchange="displayImg(this,$(this))">
                                                    <img src="admin/assets/uploads/<?php echo $_SESSION['bio']['avatar'] ?>" alt="" id="cimg">
                                            </div>
                                        </div>
                                        <!------------------------------------------------------------------------------------------------------------------------>
                                        <hr>
                                        <!------------------------------------------------------------------------------------------>
                                        <label for="" class="control-label"  style="color: black;"  >LOGIN CREDENTIALS</label>
                                        <div class="row">
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Email</label>
                                                <input type="email" class="form-control" name="email"  value="<?php echo $_SESSION['bio']['email'] ?>" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Password</label>
                                                <input type="password" class="form-control" name="password">
                                                <small><i>Leave this blank if you dont want to change your password</i></small>
                                            </div>
                                        </div>
                                        <!------------------------------------------------------------------------------------------------------------------------>
                                        <div id="msg">
                                            
                                        </div>
                                        <hr class="divider">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary">Update Account</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!------------------------------------------------------------END OF FORM PANEL-------------------------------------------------------------------->
                            </div>
                        </div>
                   </div>
               </div>
                
            </div>


<script>
   $('.datepickerY').datepicker({
        format: " yyyy", 
        viewMode: "years", 
        minViewMode: "years"
   })
   $('.select2').select2({
    placeholder:"Please Select Here",
    width:"100%"
   })
   function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$('#update_account').submit(function(e){
    e.preventDefault()
    start_load()
    $.ajax({
        url:'admin/ajax.php?action=update_account',
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        success:function(resp){
            if(resp == 1){
                alert_toast("Account successfully updated.",'success');
                setTimeout(function(){
                 location.reload()
                },700)
            }else{
                $('#msg').html('<div class="alert alert-danger">email already exist.</div>')
                end_load()
            }
        }
    })
})


$("#seeAnotherFieldGroup").change(function() {
  if ($(this).val() == "") {
   
  }
  else if ($(this).val() == "Regular") {
    $('#otherFieldGroupDiv').show();
    $('#otherField1').attr('required', '');
    $('#otherField1').attr('data-error', 'This field is required.');
    
  }
  else if ($(this).val() == "Contractual") {
    $('#otherFieldGroupDiv').show();
    $('#otherField1').attr('required', '');
    $('#otherField1').attr('data-error', 'This field is required.');
    
  }else if ($(this).val() == "Temporary") {
    $('#otherFieldGroupDiv').show();
    $('#otherField1').attr('required', '');
    $('#otherField1').attr('data-error', 'This field is required.');
    
  }
  else if ($(this).val() == "Self-employed") {
    $('#otherFieldGroupDiv').show();
    $('#otherField1').attr('required', '');
    $('#otherField1').attr('data-error', 'This field is required.');
    
  }
  else if ($(this).val() == "Casual") {
    $('#otherFieldGroupDiv').show();
    $('#otherField1').attr('required', '');
    $('#otherField1').attr('data-error', 'This field is required.');
    
  }else {
    $('#otherFieldGroupDiv').hide();
    $('#otherField1').removeAttr('required');
    $('#otherField1').removeAttr('data-error');
  }
});

/*<!------------------------------------------------------------------------------------------>*/

$("#seeAnotherFieldGroup").change(function() {
  if ($(this).val() == "") {
    
    
  }
  else if ($(this).val() == "Regular") {
    $('#otherFieldGroupDiv2').show();
    $('#otherField2').attr('', '');
    $('#otherField2').attr('data-error', 'This field is .');
    $('#otherField3').attr('', '');
    $('#otherField3').attr('data-error', 'This field is .');
    
  }
  else if ($(this).val() == "Contractual") {
    $('#otherFieldGroupDiv2').show();
    $('#otherField2').attr('', '');
    $('#otherField2').attr('data-error', 'This field is .');
    $('#otherField3').attr('', '');
    $('#otherField3').attr('data-error', 'This field is .');
    
  }else if ($(this).val() == "Temporary") {
    $('#otherFieldGroupDiv2').show();
    $('#otherField2').attr('', '');
    $('#otherField2').attr('data-error', 'This field is .');
    $('#otherField3').attr('', '');
    $('#otherField3').attr('data-error', 'This field is .');
    
  }
  else if ($(this).val() == "Self-employed") {
    $('#otherFieldGroupDiv2').show();
    $('#otherField2').attr('', '');
    $('#otherField2').attr('data-error', 'This field is .');
    $('#otherField3').attr('', '');
    $('#otherField3').attr('data-error', 'This field is .');
    
  }
  else if ($(this).val() == "Casual") {
    $('#otherFieldGroupDiv2').show();
    $('#otherField2').attr('', '');
    $('#otherField2').attr('data-error', 'This field is .');
    $('#otherField3').attr('', '');
    $('#otherField3').attr('data-error', 'This field is .');
    
  }else {
    $('#otherFieldGroupDiv2').hide();
    $('#otherField2').removeAttr('');
    $('#otherField2').removeAttr('data-error');
    $('#otherField3').removeAttr('');
    $('#otherField3').removeAttr('data-error');
  }
});

$("#seeAnotherFieldGroup").trigger("change");

</script>