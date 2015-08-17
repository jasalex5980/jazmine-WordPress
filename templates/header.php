<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo@2x.png" alt="Jazmine Logo" />
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-navbar-collapse">
      <ul class="nav navbar-nav main-nav">
        <li><a href="#">Features</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Company</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#" class="icon first"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/facebook_icon@2x.png" alt="facebook icon" /></a></li>
        <li><a href="#" class="icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/twitter_icon@2x.png" alt="twitter icon" /></a></li>
        <li><a href="#" class="icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/youtube_icon@2x.png" alt="youtube icon" /></a></li>
        <li><a href="#" class="icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/google_plus_icon@2x.png" alt="google plus icon" /></a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="callout-btn">Sign Up</a></li>
        <li><a href="#">Log In</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<section id="intro-cover" class="container-fluid clearfix">
  <div class="row">
    <div class="col-xs-12">
      <h1>Jazmine keeps all of your important information in one place.</h1>
      <h2>Organized. Secure. Easily Accessible.</h2>
    </div>
  </div>
  <div class="row">
    <form class="col-xs-12 cover-create-account" action="index.html" method="post">
      <input type="text" name="email" placeholder="All it take is an email address" />
      <button type="submit" name="submit" class="submit">Try Our Wallet Organizer for FREE</button>
    </form>
  </div>
  <div class="row">
    <div class="col-xs-12 ">
      <ul class="cover-features">
        <li>Wallet</li>
        <li>Legal Documents</li>
        <li>Financial Records</li>
        <li>Health Records</li>
        <li class="last">+ Much More</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 cover-screenshot">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/cover-screenshot@2x.png" alt="Jazmine App Screenshot" />
    </div>
  </div>
</section>
