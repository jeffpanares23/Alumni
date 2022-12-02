<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <title>Alumni Tracking System</title>
  </head>
<style>
  div.text {
  text-align: justify;
}
</style>
  <body>
  <section class="showcase">
    <header>
      <h2 class="logo">Welcome!</h2>
    </header>
    
    <video src="assets/uploads/Alumniii.mp4" muted loop autoplay></video>
    
    <div class="overlay"></div>
    <div class="text">
      <h3>“Congratulations on taking the next step in your career! We see great things in your future — that’s why you are here. We hope you’ll ask questions, make small or big steps and try new things, so we’ll all reach new heights together.”</h3>
      <h4><p>We hope you’ll always feel free to speak up, share your thoughts and challenge us. We’re all going to grow together here, and we look forward to it!</p></h4>
      <a href="login_in.php">CONTINUE TO THE SITE</a>
    </div>
    <ul class="social">
      <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
  <!--
  <div class="menu">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">News</a></li>
      <li><a href="#">Destination</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
-->
  <script>
    const menuToggle = document.querySelector('.toggle')
    const showcase = document.querySelector('.showcase')

    menuToggle.addEventListener('click', () => {
      menuToggle.classList.toggle('active')
      showcase.classList.toggle('active')
    })
  </script>
  </body>
</html>
