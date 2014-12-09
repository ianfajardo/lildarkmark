  <? include_once("header.php"); ?>

  <div class="main-content"> <!-- start .main-content -->
    <div class="mast-header">
      <div class="overlay"></div>
      <div id="header-text">
          <h1 class="animated fadeInLeft">LIL DARKMARK</h1>
      </div>
    </div>

   <?php include_once('nav.php') ?>
   <div class="page">
      <div class="page-content" style="margin: 0 auto;">

        <div id="shows" class="page-section">
          <div class="overlay"></div>
          <div class="container" style="position: relative; z-index:4">
            <div class="row">
              <div class="blk-12">
                <h2 style="text-align:center; padding-bottom:35px;">UPCOMING SHOWS</h2>
              </div>
            </div>
            <div class="row">
              <div class="blk-12">
                <div class="show-block">
                  <img src="images/social/calendar.png" alt="calendar">
                  <span class="show-date">DEC 27, 2014 at 8PM PM // </span>
                  <span class="show-location">PEABODY'S NIGHTCLUB</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="videos" class="page-section">
          <div class="container">
            <div class="row">
              <div class="blk-2"></div>
              <div class="blk-8">
                <h2 style="color:#181818; text-align:center;">VIDEOS</h2>
                <div class="embed-container">
                  <iframe width="640" height="360" src="//www.youtube.com/embed/FYkyV6BFTCU?list=UUJ3cDX5LBj1GK9nSJbZvfxA" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="blk-12">
     
              <div style="margin: 0 auto; text-align: center">
                <div class="img-title">
                  <div class="img-center img-responsive">
                    
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="blk-12">
              <h2 class="text-center">Contact</h2>
              <form class="text-center" name="Contact" method="post" action="#contact">
                <div class="top-form">
                <div id="email-form" >
                  <input name="Email" type="email" placeholder="E-Mail" required/>
                </div>
                <div  id="name-form">
                  <input name="Name" type="text" placeholder="Name/Company"/>
                </div>
                </div>
                <textarea id="f_message" name="Message" rows="8" placeholder="Your Message" required></textarea>
                <input name="Submit" type="submit" value="Send"/>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div> <!-- end .main-content -->


  <? include_once("footer.php"); ?>