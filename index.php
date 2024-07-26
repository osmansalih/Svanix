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










<?php
require('components/footer.php');
?>