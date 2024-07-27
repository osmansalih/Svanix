<?php
// Requirements
require('include/config.php');
require('components/header.php');

if($theme == 'dark'){
    require('components/dark/nav.php');
}else{
    require('components/light/nav.php');
}
?>
<!-- FontAwesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-qlUXP9WcZyDXBc+zt0GikL1Iz02lfb0+Pc2QXRaQO+M1bo+GVIZz20O85jlsb3RpU5f4LlpcgDzMYCP37n8lPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Section 1: Top Section (Call to Action and Image) -->
<div id="section1" class="section section-gradient">
  <div class="container">
    <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 35px;">
      <h1 style="color: white; font-size: 48px;">SOCIAL</h1>
      <h1 style="color: #3b84c9; font-weight: bold; font-size: 56px;" class="highlight">PLATFORM</h1>
      <h1 style="color: #888; font-weight: 100; font-size: 20px;">COMING SOON</h1>
      <br>
      <div class="cta-row">
        <input class="cta-input" type="email" placeholder="Enter your email address"></input>
        <button class="cta-button" data-text="Sign Up">Sign Up</button>
      </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <img src="assets/images/main/social.png" style="width: 70%; margin-left: 150px;">
        </div>
      </div>
  </div>
</div>

<!-- Section 2: Features Section (Full Width) -->
<div id="section2" class="section section-white section-full-width">
  <div class="row">
    <div class="col-12 text-center">
      <h2 style="color: #3b84c9; font-size: 36px;">Features</h2>
      <p style="color: #888; font-size: 18px;">What makes our platform unique</p>
    </div>
    <div class="col-3">
      <div class="card">
        <h3><i class="fas fa-users"></i> Find Friends</h3>
        <p>Detail about feature 1.</p>
      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <h3><i class="fas fa-shield-alt"></i> 100% Privacy</h3>
        <p>Detail about feature 2.</p>
      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <h3><i class="fas fa-comments"></i> Share your opinion</h3>
        <p>Detail about feature 3.</p>
      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <h3><i class="fas fa-rocket"></i> More Features</h3>
        <p>Sign up and discover it.</p>
      </div>
    </div>
  </div>
</div>

<!-- Section 3: Special Features Section -->
<div id="section3" class="section section-gradient">
  <div class="row">
    <div class="col-12 text-center">
      <h2 style="color: #3b84c9; font-size: 36px;">Why Choose Us?</h2>
      <p style="color: #888; font-size: 18px;">Discover the unique aspects of our platform</p>
    </div>
    <div class="col-6">
      <div class="card">
        <h3><i class="fas fa-star"></i> Special Feature 1</h3>
        <p>Detail about special feature 1.</p>
      </div>
    </div>
    <div class="col-6">
      <div class="card">
        <h3><i class="fas fa-heart"></i> Special Feature 2</h3>
        <p>Detail about special feature 2.</p>
      </div>
    </div>
  </div>
</div>

<!-- Section 4: Testimonials Section (Full Width) -->
<div id="section4" class="section section-white section-full-width">
  <div class="row">
    <div class="col-12 text-center">
      <h2 style="color: #3b84c9; font-size: 36px;">What People Are Saying</h2>
      <p style="color: #888; font-size: 18px;">Hear from our satisfied users</p>
    </div>
    <div class="col-4">
      <div class="testimonial-card">
        <p><i class="fas fa-quote-left"></i> "This platform is amazing!" - User A</p>
      </div>
    </div>
    <div class="col-4">
      <div class="testimonial-card">
        <p><i class="fas fa-quote-left"></i> "I love the features and design." - User B</p>
      </div>
    </div>
    <div class="col-4">
      <div class="testimonial-card">
        <p><i class="fas fa-quote-left"></i> "A game-changer in social media." - User C</p>
      </div>
    </div>
  </div>
</div>

<!-- Section 5: Footer CTA -->
<div id="section5" class="section section-gradient">
  <div class="row">
    <div class="col-12 text-center">
      <h2 style="color: #3b84c9; font-size: 36px;">Join Us Today!</h2>
      <p style="color: #888; font-size: 18px;">Sign up now and be the first to experience our platform.</p>
      <br>
      <center>
        <button class="cta-button" data-text="Sign Up">Sign Up</button>
      </center>
    </div>
  </div>
</div>

<?php
require('components/footer.php');
?>
