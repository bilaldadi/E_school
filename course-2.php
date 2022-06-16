<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>E-Bit</title>
    
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="index.php">
      <img src="assets/images/scramblebit-mob.png" alt="" width="170" height="60" class="d-inline-block align-text-top"></a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li><a href="#section2">About the course</a>
          
        </li>
        
        
        <li><a href="#section6">Contact</a></li>

        <?php

        if (isset($_SESSION["useruid"])) {
            
            echo "<li><a href='logout.inc.php' class='external'>Log out</a></li>";
          }
        else{
          echo " <li><a href='login.php' class='external'>sign in\up</a></li>"; 
        }
      ?>
      </ul>
    </nav>
  </header>

  
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              
              <h2>Welcome the JAVA SCRIPT course</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section3">Start now</a></div>
              </div>
          </div>
      </div>
  </section>
  


  

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>JAVA SCRIPT Course</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="about-course">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam perferendis temporibus inventore consequuntur ratione! Vero facilis quisquam eius architecto magnam praesentium atque deserunt dignissimos reiciendis voluptatibus. Repudiandae quibusdam exercitationem pariatur, amet tempora vitae eos vel architecto quas vero quos sapiente! Voluptatum inventore autem quasi, cum neque tenetur cupiditate labore vitae, itaque dolor tempora odio incidunt eos dolorem quibusdam pariatur repellendus commodi placeat natus et obcaecati rem. Culpa quibusdam placeat voluptates harum tempore eligendi optio dolores odit repellendus deserunt fugit rerum, hic neque a repellat perferendis eum fugiat saepe omnis earum, magni ad nisi ducimus ullam. Similique et perspiciatis temporibus aliquam!</p>

          </div>
          
        </div>
      </div>
    </div>
  </section>


  <section class="section video" data-section="section3">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
          <div class="section-heading ">
            <h2>What are we going to take together</h2>
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>This is a pref about what we are going to take in this course</span>
            <h4>JAVA SCRIPT</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque rem dolorem nam reprehenderit iure voluptas neque quisquam, laudantium ab magni aspernatur minus amet praesentium. Tempore excepturi earum asperiores, delectus magnam quibusdam. Amet pariatur velit beatae. Recusandae enim illum quasi? Debitis sed eligendi ea similique iste earum expedita totam quae consequatur.</p>
            <br>
            
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>JAVASCRIPT Intro</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=afSbBjAaqeM" class="play"><img src="assets/images/js.jpeg"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
          <div class="section-heading ">
            <h2>JAVASCRIPT</h2>
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque rem dolorem nam reprehenderit iure voluptas neque quisquam, laudantium ab magni aspernatur minus amet praesentium. Tempore excepturi earum asperiores, delectus magnam quibusdam. Amet pariatur velit beatae. Recusandae enim illum quasi? Debitis sed eligendi ea similique iste earum expedita totam quae consequatur.</p>
            <br>
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>JAVASCRIPT</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=PkZNo7MFNFg" class="play"><img src="assets/images/js.jpeg"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>


  

  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">
        
        
                    
          <form id="contact" action="https://formspree.io/f/mnqlljwn" method="post">
            <div class="row">
              <div class="col-md-6">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.5237383726962!2d28.83181011503195!3d40.99190852838157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caba23195161a1%3A0x10e4fc4f3ae156a5!2sSCRAMBLEBIT!5e0!3m2!1sen!2str!4v1629277562422!5m2!1sen!2str" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2021 by scramblebit  
          
           
        </div>
      </div>
    </div>
  </footer>

  
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>