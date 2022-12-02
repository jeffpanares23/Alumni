    <?php 
include 'admin/db_connect.php'; 
?>
<!------------------------------------------------------------------------------------------>
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
<!------------------------------------------------------------------------------------------>
        <header class="masthead">
            <div class="container-fluid h-180">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                    	<h3 class="text-black">Create Account</h3>
                        <hr class="divider my-4" />

                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>
                    
                </div>
            </div>
        </header>
<!------------------------------------------------------------------------------------------>
            <div class="container mt-3 pt-2">
               <div class="col-lg-12">
                   <div class="card mb-4">
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="col-md-12">

                                    <!---------------------------------FORM PANEL--------------------------------------->

                                    <form action="" id="create_account" method="post"   enctype="multipart/form-data">

                                        <label for="" class="control-label"  style="color: black;">PERSONAL DATA</label>
                                        <!---------------------------------------------------------------------------------------->
                                        <div class="row form-group">

                                            <div class="col-md-4">
                                                <label for="" class="control-label">Last Name</label>
                                                <input type="text" class="form-control" name="lastname" autocomplete="off" required >
                                            </div>

                                            <div class="col-md-4">
                                                <label for="" class="control-label">First Name</label>
                                                <input type="text" class="form-control" name="firstname" required>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="" class="control-label">Middle Name</label>
                                                <input type="text" class="form-control" name="middlename" required>
                                            </div>

                                        </div>
                                        <!------------------------------------------------------------------------------------------>
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="" class="control-label">Permanent Address</label>
                                                <input type="text" class="form-control" name="address" placeholder="Street, Brgy., City/Municipality, Province" required>
                                            </div>
                                        </div>
                                        <!------------------------------------------------------------------------------------------>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Gender</label>
                                                <select class="custom-select" name="gender" required>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Civil Status</label>
                                                <select class="custom-select" name="civil" required >
                                                    <option>Single</option>
                                                    <option>Married</option>
                                                    <option>Divorced</option>
                                                    <option>Widowed </option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Contact Number</label>
                                                <input type="text" class="form-control" name="contact" placeholder="Tel or Mobile #" required>
                                            </div>
                                        </div>
                                        <!------------------------------------------------------------------------------------------>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Date of Birth</label>
                                                <input type="date" id="start" name="dob" value="yyyy-mm-dd" min="1970-01-01" max="2022-12-31" required>
                                            </div>
                                        </div>
                                        <!------------------------------------------------------------------------------------------>
                                        <hr>
                                        <!------------------------------------------------------------------------------------------>
                                        <label for="" class="control-label"  style="color: black;">EDUCATION AND EMPLOYMENT</label>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Year Graduated</label>
                                                <input type="input" class="form-control datepickerY" name="batch" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Course Graduated</label>
                                                <select class="custom-select" name="course_id" required>
                                                    <option> </option>
                                                    <?php 
                                                    $course = $conn->query("SELECT * FROM courses order by course asc");
                                                    while($row=$course->fetch_assoc()):
                                                    ?>
                                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['course'] ?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Professional Examination(s) Passed</label>
                                                <input type="text" class="form-control" name="pep" placeholder="Others: Please specify" list="mySuggestion"  required>
                                                <datalist id="mySuggestion">
                                                    <option> </option>
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
                                       
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="add_fields_placeholder">Employment Status</label>
                                                <select class="form-control" name="connected_to" id="add_fields_placeholder">
                                                        <option> </option>
                                                        <option value="Unemployed">Unemployed</option>
                                                        <option value="Regular">Regular</option>
                                                        <option value="Contractual">Contractual</option>
                                                        <option value="Temporary">Temporary</option>
                                                        <option value="Self-employed">Self-employed</option>
                                                        <option value="Casual">Casual</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6" id="add_fields_placeholderValue">
                                                 <label>Job Search Method</label>
                                                <select  class="form-control" name="jsm" id="add_fields_placeholderValue">
                                                    <option> </option>
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
                                        <!------------------------------------------------------------------------------------------>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6" id="add_fields_placeholderValue2">
                                                <label>Company</label>
                                                <select  class="form-control" name="company" id="add_fields_placeholderValue2">
                                                    <option selected value disabled>Company</option>
                                                    <option>GOVERNMENT</option>
                                                    <option>PRIVATE</option>
                                                    <option>SELF-EMPLOYED</option>
                                                </select>
                                                </div>

                                                <div class="col-6" id="add_fields_placeholderValue3">
                                                    <label>Monthly Salary</label>
                                                    <textarea name="salary" class="form-control" rows="1" placeholder="OPTIONAL" id="add_fields_placeholderValue3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row form-group">
                                            <div class="col-md-12" id="add_fields_placeholderValue4">
                                                <label for="" class="control-label">Please upload any of these (COE, ID, Contract) as proof of employment. File must be in PDF format</label>
                                                <input id="pdf" type="file" name="pdf" value=""  id="add_fields_placeholderValue4" required>
                                                <input id="upload" type="submit" name="submit" value="Upload">
                                                <?php
                                                    if (isset($_POST['submit'])) {
                                                      $pdf=$_FILES['pdf']['name'];
                                                      $pdf_type=$_FILES['pdf']['type'];
                                                      $pdf_size=$_FILES['pdf']['size'];
                                                      $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
                                                      $pdf_store="pdf/".$pdf;

                                                      move_uploaded_file($pdf_tem_loc,$pdf_store);

                                                      $sql="INSERT INTO alumnus_bio(pdf) values('$pdf')";
                                                      $query=mysqli_query($conn,$sql);
                                                      }
                                                    ?>

                                                <br><br>
                                            </div>  
                                        </div>
                                        
                                        <!------------------------------------------------------------------------------------------>
                                        <hr>
                                        <!------------------------------------------------------------------------------------------>
                                        <label for="" class="control-label"  style="color: black;">PROFILE PICTURE</label>
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="" class="control-label">Image (Files must not be more than 1MB. Accepted file formats are png, jpeg/jpg.)</label>
                                                <input type="file" class="form-control" name="img" onchange="displayImg(this,$(this))">
                                                <img src="" alt="" id="cimg">
                                            </div>  
                                        </div>
                                        <!------------------------------------------------------------------------------------------>
                                        <hr>
                                        <!------------------------------------------------------------------------------------------>
                                        <label for="" class="control-label"  style="color: black;"  >LOGIN CREDENTIALS</label>
                                        <!------------------------------------------------------------------------------------------>
                                        <div class="row">
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Email</label>
                                                <input type="email" class="form-control" name="email" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Password</label>
                                                <input type="password" value="" id="myInput" class="form-control" name="password" required>
                                                
                                            </div>
                                        </div>
                                        <!------------------------------------------------------------------------------------------>
                                        <div id="msg">
                                        </div>
                                        <!------------------------------------------------------------------------------------------>
                                        <hr class="divider">
                                        <!------------------------------------------------------------------------------------------>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary" type="submit" name="submit">Create Account</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-------------------------------------------------------------END OF FORM PANEL---------------------------------------------------->
                                </div>
                            </div>
                        </div>
                   </div>
               </div>               
            </div>

<script>

   $('.datepickerY').datepicker({
        autoclose: true,
        format: " yyyy", 
        viewMode: "years", 
        minViewMode: "years"
   })
   $('.select2').select2({
    placeholder:"Select",
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
$('#create_account').submit(function(e){
    e.preventDefault()
    start_load()
    $.ajax({
        url:'admin/ajax.php?action=signup',
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        success:function(resp){
            if(resp == 1){
                location.replace('index.php')
            }else{
                $('#msg').html('<div class="alert alert-danger">Email already exist.</div>')
                end_load()
            }
        }
    })
})

  
/*-------------------------------------------------------------------------------------------------------------------
$("#seeAnotherFieldGroup").change(function() {
  if ($(this).val() == "Unemployed") {
  $('#otherFieldGroupDiv').hide();
    $('#otherField1').removeAttr('required');
    $('#otherField1').removeAttr('data-error');
    
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

-------------------------------------------------------------------------------------------------------------------*/


$(document).ready(function()
                  {
                  $("#add_fields_placeholder").change(function()
        {
            if($(this).val() == "Unemployed")
        {
            
            $("#add_fields_placeholderValue").hide();
            $("#add_fields_placeholderValue2").hide();
            $("#add_fields_placeholderValue3").hide();
            $("#add_fields_placeholderValue4").hide();
        }
        else
        {
            $("#add_fields_placeholderValue").show();
            $("#add_fields_placeholderValue2").show();
            $("#add_fields_placeholderValue3").show();
             $("#add_fields_placeholderValue4").show();
        }
            });
            $("#add_fields_placeholderValue").hide();
            $("#add_fields_placeholderValue2").hide();
            $("#add_fields_placeholderValue3").hide();
             $("#add_fields_placeholderValue4").hide();
})
</script>