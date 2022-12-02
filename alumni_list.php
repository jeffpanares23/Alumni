<?php 
include 'admin/db_connect.php'; 
?>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
  padding-top: 137px;   
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: none;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 2.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.alumni-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
}
.alumni-img {
    width: calc(30%);
    max-height: 17vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.alumni-list .card-body{
    width: calc(70%);
}
.alumni-img img {
    border-radius: 10%;
    max-height: calc(100%);
    max-width: calc(100%);
    background-color: #9e9e9e;
}
span.hightlight{
    background: yellow;
}
.carousel,.carousel-inner,.carousel-item{
   min-height: calc(100%)
}
header.masthead,header.masthead:before {
        min-height: 50vh !important;
        height: 82vh !important
    }
.row-items{
    position: relative;
}
.card-left{
    left:0;
}
.card-right{
    right:0;
}
.rtl{
    direction: rtl ;
}
.alumni-text{
    justify-content: center;
    align-items: center ;
}
.masthead{
        min-height: 23vh !important;
        height: 23vh !important;
    }
     .masthead:before{
        min-height: 23vh !important;
        height: 23vh !important;
    }
.alumni-list p {
	margin:unset;
}

.card-body#search {
    padding-top: 0px;
    padding-bottom: 0px;
    background-color: transparent;
}

.card-body#alu {
    border-radius: 0.5rem;
    background-color: orange;
}

@media (max-width: 991.98px) {
.slideshow-container{
    padding-top: 72px;
  }
}
</style>
        <header class="masthead">
            <!-- CREDITS TO CTU MAIN WEBSITE FOR THE CTU CAMPUSES BACKGROUND IMAGES -->
                    <div class="slideshow-container" style="width:100%">
                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Main.png" style="width:100%" >
                          
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Argao.png" style="width:100%" >
                          
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Carmen.png" style="width:100%">
                          
                        </div>
                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Daan Bantayan.png" style="width:100%" >
                          
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Danao.jpg" style="width:100%" >
                          
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Moalboal.png" style="width:100%" >
                          
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Tuburan.png" style="width:100%" >
                          
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Bantayan.png" style="width:100%" >
                          
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Dumanjug.png" style="width:100%">
                          
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/ctuginatilan.png" style="width:100%">
                          
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Naga.png" style="width:100%">
                          
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Oslob.png" style="width:100%">
                          
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Pinamungajan.png" style="width:100%">
                          
                        </div>

                        <div class="mySlides fade">
                         
                          <img src="assets/img/Campuses/San Fernando.jpg" style="width:100%">
                          
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/San Remigio.jpg" style="width:100%">
                          
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Tabuelan.png" style="width:100%">
                          
                        </div>
                    <br>
                        <div style="text-align:center">
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                          <span class="dot"></span>
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                          <span class="dot"></span>
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                          <span class="dot"></span>
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                          <span class="dot"></span>
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                          <span class="dot"></span>
                        </div>
                        
                            
                       
                    </div>            
        </header>
        	<div class="container">
        		<div class="cd mb-4 mt-4">
		          <div class="card-body" id="search">
		            <div class="row">
		                <div class="col-md-8">
		                    <div class="input-group mb-3">
		                      <div class="input-group-prepend">
		                        <span class="input-group-text" id="filter-field"><i class="fa fa-search"></i></span>
		                      </div>
		                      <input type="text" class="form-control" id="filter" placeholder="Filter name,course, etc." aria-label="Filter" aria-describedby="filter-field">
		                    </div>
		                </div>
    		                <div class="col-md-4">
    		                    <button class="btn btn-primary btn-block btn-sm" id="search">Search</button>
    		                </div>
		            </div>
		            
		        </div>
                <h3 class="row h-100 align-items-center justify-content-center text-center text-black">Alumnus/Alumnae List</h3>
		    </div>
        	</div>	
            <div class="container-fluid mt-3 pt-2">
               
                <div class="row-items">
                <div class="col-lg-12">
                    <div class="row">
                <?php
                $fpath = 'admin/assets/uploads';
                $alumni = $conn->query("SELECT a.*,c.course,Concat(a.lastname,', ',a.firstname,' ',a.middlename) as name from alumnus_bio a inner join courses c on c.id = a.course_id order by Concat(a.lastname,', ',a.firstname,' ',a.middlename) asc");
                while($row = $alumni->fetch_assoc()):
                ?>
                <div class="col-md-4 item">
                <div class="card alumni-list" data-id="<?php echo $row['id'] ?>">
                        <div class="alumni-img" card-img-top>

                            <img src="<?php echo $fpath.'/'.$row['avatar'] ?>" alt="">
                        </div>
                    <div class="card-body" id="alu">
                        <div class="row align-items-center h-100">
                            <div class="">
                                <div>
                                <p class="filter-txt"><b><?php echo $row['name'] ?></b></p>
                                <hr class="divider w-100" style="max-width: calc(100%)">
                                <p class="filter-txt">Email: <b><?php echo $row['email'] ?></b></p>
                                <p class="filter-txt">Course: <b><?php echo $row['course'] ?></b></p>
                                <p class="filter-txt">Batch: <b><?php echo $row['batch'] ?></b></p>
                                <p class="filter-txt">Currently working in/as <b><?php echo $row['connected_to'] ?></b></p>
                                    <br>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                </div>
                <?php endwhile; ?>
                </div>
                </div>
                </div>
            </div>


<script>
    // $('.card.alumni-list').click(function(){
    //     location.href = "index.php?page=view_alumni&id="+$(this).attr('data-id')
    // })
    $('.book-alumni').click(function(){
        uni_modal("Submit Booking Request","booking.php?alumni_id="+$(this).attr('data-id'))
    })
    $('.alumni-img img').click(function(){
        viewer_modal($(this).attr('src'))
    })
     $('#filter').keypress(function(e){
    if(e.which == 13)
        $('#search').trigger('click')
   })
    $('#search').click(function(){
        var txt = $('#filter').val()
        start_load()
        if(txt == ''){
        $('.item').show()
        end_load()
        return false;
        }
        $('.item').each(function(){
            var content = "";
            $(this).find(".filter-txt").each(function(){
                content += ' '+$(this).text()
            })
            if((content.toLowerCase()).includes(txt.toLowerCase()) == true){
                $(this).toggle(true)
            }else{
                $(this).toggle(false)
            }
        })
        end_load()
    })

    let slideIndex = 0;

    showSlides();
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
</script>