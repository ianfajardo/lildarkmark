  <? include_once("header.php"); ?>

  <div class="main-content"> <!-- start .main-content -->
    <div class="mast-header">
      <div class="overlay"></div>
      <video preload="auto" autoplay loop muted id="bgvid" poster="images/code_top.jpg">
        <source src="video/lildarkmark480.webm" type="video/webm">
        <source src="video/front-header480.mp4" type="video/mp4">
      </video>
      <div id="header-text" class="container">
        <div class="row">
          <div class="blk-12">
            <h1 id="abbv" class="animated flash"><span>L&nbsp;&nbsp;D&nbsp;&nbsp;M</span></h1>
            <h1 id="full" class="animated fadeIn"><span id="ani-1">L</span>IL <span id="ani-2">D</span>ARK <span id="ani-3">M</span>ARK</h1>
          </div>
        </div>
      </div>
    </div>

   <?php include_once('nav.php') ?>
   <div class="page">
      <div class="page-content" style="margin: 0 auto; padding:40px 0;">
        <div class="container">
          <div class="row">
            <div class="blk-12">
     
                  <div style="margin: 0 auto; text-align: center">
                    <div class="img-title">
                      <div class="img-center img-responsive">
                        <img src="images/push_up.jpg" alt="push_up">
                        <h2>VIDEOS</h2>
                      </div>
                    </div>
                    
                    <iframe width="640" height="360" src="//www.youtube.com/embed/FYkyV6BFTCU?list=UUJ3cDX5LBj1GK9nSJbZvfxA" frameborder="0" allowfullscreen></iframe>
                  </div>

            </div>
          </div>
          <div class="row">
            <div class="blk-12">
              <div class="img-title">
                <div class="img-center img-responsive">
                  <img src="images/crossed_tunnel.jpg" alt="tunnel_crossed_arms">
                  <h2>Contact</h2>
                </div>
              </div>
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