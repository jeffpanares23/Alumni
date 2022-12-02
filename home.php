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
  padding-top: 137px;
}

/* Caption text */
.text {
  color: orange;
  font-size: 25px;
  padding: 8px 12px;
  position: absolute;
  bottom: 12px;
  width: 100%;
  text-align: center;
  text-shadow: 2px 2px 5px red;
  background-color: black;
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

.event-list{
cursor: pointer;
}

span.hightlight{
    background: yellow;
}

.banner{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 26vh;
        width: calc(30%);
    }

.banner img{
        width: calc(100%);
        height: calc(100%);
        cursor :pointer;
    }

.event-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
}

.event-list .banner {
    width: calc(40%)
}

.event-list .card-body {
    width: calc(60%)
}

.event-list .banner img {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    min-height: 50vh;
}

span.hightlight{
    background: yellow;
}

.banner{
   min-height: calc(100%)
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin-top: -5px;
  margin-right: 0px;
  margin-left: 0px;
}

.row#in{
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
                          <div class="text">CTU Main Campus</div>
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Argao.png" style="width:100%" >
                          <div class="text">CTU Argao Satellite Campus</div>
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Carmen.png" style="width:100%">
                          <div class="text">CTU Carmen Satellite Campus</div>
                        </div>
                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Daan Bantayan.png" style="width:100%" >
                          <div class="text">CTU Daan Bantayan Satellite Campus</div>
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Danao.jpg" style="width:100%" >
                          <div class="text">CTU Danao Satellite Campus</div>
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Moalboal.png" style="width:100%" >
                          <div class="text">CTU Moalboal Satellite Campus</div>
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Tuburan.png" style="width:100%" >
                          <div class="text">CTU Tuburan Satellite Campus</div>
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Bantayan.png" style="width:100%" >
                          <div class="text">CTU Bantayan Extension Campus</div>
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Dumanjug.png" style="width:100%">
                          <div class="text">CTU Dumanjug Extension Campus</div>
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/ctuginatilan.png" style="width:100%">
                          <div class="text">CTU Ginatilan Extension Campus</div>
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Naga.png" style="width:100%">
                          <div class="text">CTU Naga Extension Campus</div>
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Oslob.png" style="width:100%">
                          <div class="text">CTU Oslob Extension Campus</div>
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Pinamungajan.png" style="width:100%">
                          <div class="text">CTU Pinamungajan Extension Campus</div>
                        </div>

                        <div class="mySlides fade">
                         
                          <img src="assets/img/Campuses/San Fernando.jpg" style="width:100%">
                          <div class="text">CTU San Fernando Extension Campus</div>
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/San Remigio.jpg" style="width:100%">
                          <div class="text">CTU San Remigio Extension Campus</div>
                        </div>

                        <div class="mySlides fade">
                          
                          <img src="assets/img/Campuses/Tabuelan.png" style="width:100%">
                          <div class="text">CTU Tabuelan Extension Campus</div>
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
            <div class="container mt-3 pt-2">
                <h4 class="text-center text-black">Upcoming Events</h4>
                <hr class="divider">
                <?php
                $event = $conn->query("SELECT * FROM events where date_format(schedule,'%Y-%m%-d') >= '".date('Y-m-d')."' order by unix_timestamp(schedule) asc");
                while($row = $event->fetch_assoc()):
                    $trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
                    unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
                    $desc = strtr(html_entity_decode($row['content']),$trans);
                    $desc=str_replace(array("<li>","</li>"), array("",","), $desc);
                ?>
                <div class="card event-list" data-id="<?php echo $row['id'] ?>">
                     <div class='banner'>
                        <?php if(!empty($row['banner'])): ?>
                            <img src="admin/assets/uploads/<?php echo($row['banner']) ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <div class="row  align-items-center justify-content-center text-center h-100" id="in">
                            <div class="">
                                <h3><b class="filter-txt"><?php echo ucwords($row['title']) ?></b></h3>
                                <div><small><p><b><i class="fa fa-calendar"></i> <?php echo date("F d, Y h:i A",strtotime($row['schedule'])) ?></b></p></small></div>
                                <hr>
                                <larger class="truncate filter-txt"><?php echo strip_tags($desc) ?></larger>
                                <br>
                                <hr class="divider"  style="max-width: calc(80%)">
                                <button class="btn btn-primary float-right read_more" data-id="<?php echo $row['id'] ?>">Read More</button>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                <?php endwhile; ?>
                
            </div>


<script>
     $('.read_more').click(function(){
         location.href = "index.php?page=view_event&id="+$(this).attr('data-id')
     })
     $('.banner img').click(function(){
        viewer_modal($(this).attr('src'))
    })
    $('#filter').keyup(function(e){
        var filter = $(this).val()

        $('.card.event-list .filter-txt').each(function(){
            var txto = $(this).html();
            txt = txto
            if((txt.toLowerCase()).includes((filter.toLowerCase())) == true){
                $(this).closest('.card').toggle(true)
            }else{
                $(this).closest('.card').toggle(false)
               
            }
        })
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