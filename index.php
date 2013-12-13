<?php $pagename="Home";?>
<?php include ("includes-php/header.php"); ?>


    <!-- Header -->
  <div class="container">
    <!-- HEADER -->
      <header id="header">

          <div class="logo">
            <a href="#"><img src="images/logos/logo.png"alt="Smiley face" height="150"></a>
          </div>

          <a href="donate.php" class="donatebutton">DONATE</a>
        
      </header>
   <!-- Navigation -->
        <?php include ("includes-php/nav.php"); ?>

   <!-- 
    space for slider -->
        <!--  Outer wrapper for presentation only, this can be anything you like -->
          <div id="banner-fade">

            <!-- start Basic Jquery Slider -->
            <ul class="bjqs">
              <li><img src="images/slider-01.png" title="notfarfromthetree.org"></li>
              <li><img src="images/slider-02.png" title="notfarfromthetree.org"></li>
              <li><img src="images/slider-03.png" title="notfarfromthetree.org"></li>
            </ul>
            <!-- end Basic jQuery Slider -->
             <div class="button">
                <a href="donate.php"><img src="images/button_01.png" onmouseover="this.src='images/white_03.png'" onmouseout="this.src='images/button_01.png'" alt="donate" height="74"></a>
                <a href="getinvolved.php"><img src="images/button_02.png" onmouseover="this.src='images/white_05.png'" onmouseout="this.src='images/button_02.png'"alt="getinvolved" height="74"></a>
            </div>
        </div>
          <!-- End outer wrapper -->

          
    
        <!-- <div class="buttons-part">
          
        </div> -->

<!-- 
    // -->
    <!-- Blog page -->
    <section id="latest-blog">
        <div class="title">
          <h2>Latest News from Blog</h2>
        </div>

        <div class="post">
            <a href="#"><img src="images/blog/blog-01.png"></a>
            <h2>Nov 25 2013</h2>
            <p>Not down with the hustle and bustle that comes along with the holiday season? With the crowded malls and folks just.</p>
            <a href="blog.php" class="more">Read more</a>
        </div>

        <div class="post">
            <a href="#"><img src="images/blog/blog-02.png"></a>
            <h2>Nov 22 2013</h2>
            <p>People have been harvesting apples for millennia and enjoying apple cider for almost as long! Cider has a long history in parts of England (where it remains a popular treat) and</p>
            <a href="blog.php" class="more">Read more</a>
        </div>

        <div class="post">
            <a href="#"><img src="images/blog/blog-03.png"></a>
            <h2>Nov 20 2013</h2>
            <p>You’re walking down the street and you just happen to walk by a beautiful tree with little ornamental balls of colourful fruit.</p>
            <a href="blog.php" class="more">Read more</a>
        </div>

     </section>

    <!-- Events -->
      <aside id="events">
          <div class="title">
            <h2>Events</h2>
          </div>

           <img src="images/blog/event_2.png" height="80" width="80" />
           <a href="events.php" class="more">The 3rd Annual city cider</a>
      </aside>
    <!-- email-updates -->

      <aside id="email-updates">
            <div class="title">
                <h2>Sign up  for E-mail updates</h2>
            </div>
           <form action="form.php">
              <input type="text" name="fname" class="email" required>

              <input type="submit" value="Submit" class="submit">

           </form> 
      </aside>

 <?php include ("includes-php/footer.php"); ?>


