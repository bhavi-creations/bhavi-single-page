<?php
// Revalidate HTML so returning visitors receive current inline animation fixes.
header('Cache-Control: no-cache, must-revalidate');
?>
<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>PRception | Brand Architecture & Performance Intelligence</title>

<meta name="description" content="Where Vision Shapes Reality. PRception merges technical precision and creative influence for brands demanding market authority.">

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Anton&family=DM+Sans:wght@400;500;700&family=Instrument+Sans:wght@500;600&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- FontAwesome Icons for WhatsApp and Back to Top Arrow -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Common Stylesheet -->
<link rel="stylesheet" href="assets/css/new_style.css?v=<?= filemtime(__DIR__ . '/assets/css/new_style.css') ?>">

<!-- FIX: grid column was growing to the width of all cards, so there was nothing left to scroll. min-width:0 lets the column keep its size and the cards overflow (GSAP then moves them). -->
<style>
.scene .in > .brand-gallery{min-width:0;overflow:visible}
</style>


<!-- The first frame must remain readable even after a mobile cache restore. -->
<style>
@media(max-width:700px){
  html.hero-at-top .hero > .wrap,
  html.hero-at-top .hero .h{opacity:1!important;visibility:visible!important}
  html.hero-at-top .hero > .wrap{transform:none!important}
}
</style>
<script>
(function(){
  var root=document.documentElement;
  function syncHeroStart(){root.classList.toggle('hero-at-top',window.scrollY<=1)}
  syncHeroStart();
  addEventListener('scroll',syncHeroStart,{passive:true});
  addEventListener('pageshow',syncHeroStart);
})();
</script>

</head>

<body>

<!-- Keep content visible while remote media and animation libraries load. -->

<header>
  <a href="index.php" class="logo-brand-wrapper">
    <img src="assets/img/Bhavi_Creations_Logo_0001.png" 
         alt="Bhavi Creations Logo" 
         class="header-logo-img">
</a>

<!-- <nav id="siteNav"><a href="#">Home</a><a href="#about">About Us</a><a href="#brands">Case Study</a><a href="#how">Who we are</a><a href="#how">Services</a><a href="#cta">Contact</a></nav> -->
 <nav id="siteNav"><a href="#">Home</a><a href="#about">About Us</a><a href="#brands">Case Study</a><a href="#how">Who we are</a>

<div class="nav-dd">
  <a href="#" class="dd-trigger" aria-haspopup="true" aria-expanded="false">Services <i class="fa-solid fa-chevron-down"></i></a>
  <ul class="sub-menu">
    <li><a href="#">Creator Marketing</a></li>
    <li><a href="#">Web Development</a></li>
    <li><a href="#">SEO Services</a></li>
  </ul>
</div>

<a href="#cta">Contact</a></nav>

<!-- <a href="#cta" class="btn">Let's Talk <b>→</b></a> -->
<a href="#cta" class="btn"><span class="bt"><span>Let's Talk</span><span aria-hidden="true">Let's Talk</span></span><b>→</b></a>

<button type="button" class="menu-toggle" id="menuToggle" aria-label="Open menu" aria-expanded="false" aria-controls="siteNav"><span></span><span></span><span></span></button>

</header>