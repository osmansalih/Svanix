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
<div class="container">

  <div class="row">

  <div style="margin-top: 250px; margin-left: 35px;">
    <div class="col-6">
      <h1 style="color: white; font-size: 48px;">SOCIAL</h1>
      <h1 style="color: #3b84c9; font-weight: bold; font-size: 56px;">PLATFORM</h1>
      <h1 style="color: #888; font-weight: 100; font-size: 20px;">COMING SOON</h1>
    </div> <!-- COL-6 -->
  </div> <!-- MARGIN DIV -->


  </div> <!-- ROW -->
</div> <!-- CONTAINER -->
<?php
require('components/footer.php');
?>