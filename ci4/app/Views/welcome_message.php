<!DOCTYPE html>
<html lang="en">
<link href="C:\wamp64\www\lab3\ci4\public\css\mystyles.css" rel="stylesheet" type="text/css">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<!-- CSS SCRIPT-->

<style>
  /**
* Template Name: iPortfolio - v3.10.0
* Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  color: #272829;
}

a {
  color: #149ddd;
  text-decoration: none;
}

a:hover {
  color: #37b3ed;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Raleway", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  background: #149ddd;
  width: 40px;
  height: 40px;
  border-radius: 50px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 28px;
  color: #fff;
  line-height: 0;
}

.back-to-top:hover {
  background: #2eafec;
  color: #fff;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  width: 300px;
  transition: all ease-in-out 0.5s;
  z-index: 9997;
  transition: all 0.5s;
  padding: 0 15px;
  background: #040b14;
  overflow-y: auto;
}

#header .profile img {
  margin: 15px auto;
  display: block;
  width: 120px;
  border: 8px solid #2c2f3f;
}

#header .profile h1 {
  font-size: 24px;
  margin: 0;
  padding: 0;
  font-weight: 600;
  -moz-text-align-last: center;
  text-align-last: center;
  font-family: "Poppins", sans-serif;
}

#header .profile h1 a,
#header .profile h1 a:hover {
  color: #fff;
  text-decoration: none;
}

#header .profile .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #212431;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#header .profile .social-links a:hover {
  background: #149ddd;
  color: #fff;
  text-decoration: none;
}

#main {
  margin-left: 300px;
}

@media (max-width: 1199px) {
  #header {
    left: -300px;
  }

  #main {
    margin-left: 0;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
.nav-menu {
  padding: 30px 0 0 0;
}

.nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu>ul>li {
  position: relative;
  white-space: nowrap;
}

.nav-menu a,
.nav-menu a:focus {
  display: flex;
  align-items: center;
  color: #a8a9b4;
  padding: 12px 15px;
  margin-bottom: 8px;
  transition: 0.3s;
  font-size: 15px;
}

.nav-menu a i,
.nav-menu a:focus i {
  font-size: 24px;
  padding-right: 8px;
  color: #6f7180;
}

.nav-menu a:hover,
.nav-menu .active,
.nav-menu .active:focus,
.nav-menu li:hover>a {
  text-decoration: none;
  color: #fff;
}

.nav-menu a:hover i,
.nav-menu .active i,
.nav-menu .active:focus i,
.nav-menu li:hover>a i {
  color: #149ddd;
}

/* Mobile Navigation */
.mobile-nav-toggle {
  position: fixed;
  right: 15px;
  top: 15px;
  z-index: 9998;
  border: 0;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  background-color: #149ddd;
  color: #fff;
  width: 40px;
  height: 40px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  line-height: 0;
  border-radius: 50px;
  cursor: pointer;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active #header {
  left: 0;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 100vh;
  background: url("../img/hero-bg.jpg") top center;
  background-size: cover;
}

#hero:before {
  content: "";
  background: rgba(5, 13, 24, 0.3);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1;
}

#hero .hero-container {
  position: relative;
  z-index: 2;
  min-width: 300px;
}

#hero h1 {
  margin: 0 0 10px 0;
  font-size: 64px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
}

#hero p {
  color: #fff;
  margin-bottom: 50px;
  font-size: 26px;
  font-family: "Poppins", sans-serif;
}

#hero p span {
  color: #fff;
  padding-bottom: 4px;
  letter-spacing: 1px;
  border-bottom: 3px solid #149ddd;
}

@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }

  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background: #f5f8fd;
}

.section-title {
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
  color: #173b6c;
}

.section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: #149ddd;
  bottom: 0;
  left: 0;
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about .content h3 {
  font-weight: 700;
  font-size: 26px;
  color: #173b6c;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  margin-bottom: 20px;
  display: flex;
  align-items: center;
}

.about .content ul strong {
  margin-right: 10px;
}

.about .content ul i {
  font-size: 16px;
  margin-right: 5px;
  color: #149ddd;
  line-height: 0;
}

.about .content p:last-child {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Facts
--------------------------------------------------------------*/
.facts {
  padding-bottom: 30px;
}

.facts .count-box {
  padding: 30px;
  width: 100%;
}

.facts .count-box i {
  display: block;
  font-size: 44px;
  color: #149ddd;
  float: left;
  line-height: 0;
}

.facts .count-box span {
  font-size: 48px;
  line-height: 40px;
  display: block;
  font-weight: 700;
  color: #050d18;
  margin-left: 60px;
}

.facts .count-box p {
  padding: 15px 0 0 0;
  margin: 0 0 0 60px;
  font-family: "Raleway", sans-serif;
  font-size: 14px;
  color: #122f57;
}

.facts .count-box a {
  font-weight: 600;
  display: block;
  margin-top: 20px;
  color: #122f57;
  font-size: 15px;
  font-family: "Poppins", sans-serif;
  transition: ease-in-out 0.3s;
}

.facts .count-box a:hover {
  color: #1f5297;
}

/*--------------------------------------------------------------
# Akills
--------------------------------------------------------------*/
.skills .progress {
  height: 60px;
  display: block;
  background: none;
  border-radius: 0;
}

.skills .progress .skill {
  padding: 0;
  margin: 0 0 6px 0;
  text-transform: uppercase;
  display: block;
  font-weight: 600;
  font-family: "Poppins", sans-serif;
  color: #050d18;
}

.skills .progress .skill .val {
  float: right;
  font-style: normal;
}

.skills .progress-bar-wrap {
  background: #dce8f8;
  height: 10px;
}

.skills .progress-bar {
  width: 1px;
  height: 10px;
  transition: 0.9s;
  background-color: #149ddd;
}

/*--------------------------------------------------------------
# Resume
--------------------------------------------------------------*/
.resume .resume-title {
  font-size: 26px;
  font-weight: 700;
  margin-top: 20px;
  margin-bottom: 20px;
  color: #050d18;
}

.resume .resume-item {
  padding: 0 0 20px 20px;
  margin-top: -2px;
  border-left: 2px solid #1f5297;
  position: relative;
}

.resume .resume-item h4 {
  line-height: 18px;
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
  color: #050d18;
  margin-bottom: 10px;
}

.resume .resume-item h5 {
  font-size: 16px;
  background: #e4edf9;
  padding: 5px 15px;
  display: inline-block;
  font-weight: 600;
  margin-bottom: 10px;
}

.resume .resume-item ul {
  padding-left: 20px;
}

.resume .resume-item ul li {
  padding-bottom: 10px;
}

.resume .resume-item:last-child {
  padding-bottom: 0;
}

.resume .resume-item::before {
  content: "";
  position: absolute;
  width: 16px;
  height: 16px;
  border-radius: 50px;
  left: -9px;
  top: 0;
  background: #fff;
  border: 2px solid #1f5297;
}

/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 auto 35px auto;
  list-style: none;
  text-align: center;
  background: #fff;
  border-radius: 50px;
  padding: 2px 15px;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 10px 15px 8px 15px;
  font-size: 14px;
  font-weight: 600;
  line-height: 1;
  text-transform: uppercase;
  color: #272829;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
}

.portfolio #portfolio-flters li:hover,
.portfolio #portfolio-flters li.filter-active {
  color: #149ddd;
}

.portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}

.portfolio .portfolio-wrap {
  transition: 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
}

.portfolio .portfolio-wrap::before {
  content: "";
  background: rgba(255, 255, 255, 0.5);
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  transition: all ease-in-out 0.3s;
  z-index: 2;
  opacity: 0;
}

.portfolio .portfolio-wrap .portfolio-links {
  opacity: 1;
  left: 0;
  right: 0;
  bottom: -60px;
  z-index: 3;
  position: absolute;
  transition: all ease-in-out 0.3s;
  display: flex;
  justify-content: center;
}

.portfolio .portfolio-wrap .portfolio-links a {
  color: #fff;
  font-size: 28px;
  text-align: center;
  background: rgba(20, 157, 221, 0.75);
  transition: 0.3s;
  width: 50%;
}

.portfolio .portfolio-wrap .portfolio-links a:hover {
  background: rgba(20, 157, 221, 0.95);
}

.portfolio .portfolio-wrap .portfolio-links a+a {
  border-left: 1px solid #37b3ed;
}

.portfolio .portfolio-wrap:hover::before {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 1;
}

.portfolio .portfolio-wrap:hover .portfolio-links {
  opacity: 1;
  bottom: 0;
}

/*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
  padding-top: 40px;
}

.portfolio-details .portfolio-details-slider img {
  width: 100%;
}

.portfolio-details .portfolio-details-slider .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #149ddd;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #149ddd;
}

.portfolio-details .portfolio-info {
  padding: 30px;
  box-shadow: 0px 0 30px rgba(5, 13, 24, 0.08);
}

.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-details .portfolio-info ul li+li {
  margin-top: 10px;
}

.portfolio-details .portfolio-description {
  padding-top: 30px;
}

.portfolio-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
  padding: 0;
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services .icon-box {
  margin-bottom: 20px;
}

.services .icon {
  float: left;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 54px;
  height: 54px;
  background: #149ddd;
  border-radius: 50%;
  transition: 0.5s;
  border: 1px solid #149ddd;
}

.services .icon i {
  color: #fff;
  font-size: 24px;
  line-height: 0;
}

.services .icon-box:hover .icon {
  background: #fff;
}

.services .icon-box:hover .icon i {
  color: #149ddd;
}

.services .title {
  margin-left: 80px;
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.services .title a {
  color: #343a40;
}

.services .title a:hover {
  color: #149ddd;
}

.services .description {
  margin-left: 80px;
  line-height: 24px;
  font-size: 14px;
}

/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonials .testimonials-carousel,
.testimonials .testimonials-slider {
  overflow: hidden;
}

.testimonials .testimonial-item {
  box-sizing: content-box;
  text-align: center;
  min-height: 320px;
}

.testimonials .testimonial-item .testimonial-img {
  width: 90px;
  border-radius: 50%;
  margin: 0 auto;
}

.testimonials .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #111;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #999;
  margin: 0;
}

.testimonials .testimonial-item .quote-icon-left,
.testimonials .testimonial-item .quote-icon-right {
  color: #c3e8fa;
  font-size: 26px;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 15px 15px 15px;
  padding: 20px;
  background: #fff;
  position: relative;
  margin-bottom: 35px;
  border-radius: 6px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.testimonials .testimonial-item p::after {
  content: "";
  width: 0;
  height: 0;
  border-top: 20px solid #fff;
  border-right: 20px solid transparent;
  border-left: 20px solid transparent;
  position: absolute;
  bottom: -20px;
  left: calc(50% - 20px);
}

.testimonials .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #149ddd;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #149ddd;
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact {
  padding-bottom: 130px;
}

.contact .info {
  padding: 30px;
  background: #fff;
  width: 100%;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .info i {
  font-size: 20px;
  color: #149ddd;
  float: left;
  width: 44px;
  height: 44px;
  background: #dff3fc;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #050d18;
}

.contact .info p {
  padding: 0 0 10px 60px;
  margin-bottom: 20px;
  font-size: 14px;
  color: #173b6c;
}

.contact .info .email p {
  padding-top: 5px;
}

.contact .info .social-links {
  padding-left: 60px;
}

.contact .info .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #333;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  margin-right: 10px;
}

.contact .info .social-links a:hover {
  background: #149ddd;
  color: #fff;
}

.contact .info .email:hover i,
.contact .info .address:hover i,
.contact .info .phone:hover i {
  background: #149ddd;
  color: #fff;
}

.contact .php-email-form {
  width: 100%;
  padding: 30px;
  background: #fff;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form .form-group {
  margin-bottom: 15px;
}

.contact .php-email-form label {
  padding-bottom: 8px;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 15px;
}

.contact .php-email-form button[type=submit] {
  background: #149ddd;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
}

.contact .php-email-form button[type=submit]:hover {
  background: #37b3ed;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 20px 0;
  background: #f9f9f9;
}

.breadcrumbs h2 {
  font-size: 26px;
  font-weight: 300;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 15px;
}

.breadcrumbs ol li+li {
  padding-left: 10px;
}

.breadcrumbs ol li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: #0e2442;
  content: "/";
}

@media (max-width: 768px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }

  .breadcrumbs ol {
    display: block;
  }

  .breadcrumbs ol li {
    display: inline-block;
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  padding: 15px;
  color: #f4f6fd;
  font-size: 14px;
  position: fixed;
  left: 0;
  bottom: 0;
  width: 300px;
  z-index: 9999;
  background: #040b14;
}

#footer .copyright {
  text-align: center;
}

#footer .credits {
  padding-top: 5px;
  text-align: center;
  font-size: 13px;
  color: #eaebf0;
}

@media (max-width: 1199px) {
  #footer {
    position: static;
    width: auto;
    padding-right: 20px 15px;
  }
}
</style>

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">RAM BALOIS</a></h1>
        <div class="social-links mt-3 text-center">
          <a href= https://www.facebook.com/nathanram24/ class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href= https://www.instagram.com/uknowram/ class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href= https://www.linkedin.com/in/nathan-rameses-balois-42875918b/ class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Ram Balois</h1>
      <p>I'm a <span class="typed" data-typed-items="CS Student, Gamer, Developer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Hi there! My name is Nathan Rameses Balois and I am currently a computer science student, eager to learn and expand my knowledge in the field. 
            Although I have limited experience in this area, I am dedicated to learning and growing as a professional.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Bachelor of Science in Computer Science with specialization in Software and Systems</h3>
            <p class="fst-italic">
              
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>March 2003</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>localhost</li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>09123456789</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Paranaque, City</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>19</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>College:</strong> <span>Asia Pacific College</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>nlbalois@student.apc.edu.ph</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Discord:</strong> <span>Ram#2430</span></li>
                </ul>
              </div>
            </div>
            <p>
              
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Interest</h2>
          <p> In my free time, I enjoy unwinding by playing video games and watching Netflix. am a quick learner and have a passion for technology and problem-solving, which I believe will make me a valuable asset to any team I join. 
            My ultimate goal is to use my skills and knowledge to make a positive impact in the tech industry.</p>
        </div>


          

        </div>

      </div>
    </section><!-- End Facts Section -->


    <!-- JS SCRIPT-->
   <script>
    (function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos,
      behavior: 'smooth'
    })
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('body').classList.toggle('mobile-nav-active')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let body = select('body')
      if (body.classList.contains('mobile-nav-active')) {
        body.classList.remove('mobile-nav-active')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Hero type effect
   */
  const typed = select('.typed')
  if (typed) {
    let typed_strings = typed.getAttribute('data-typed-items')
    typed_strings = typed_strings.split(',')
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  /**
   * Skills animation
   */
  let skilsContent = select('.skills-content');
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: '80%',
      handler: function(direction) {
        let progress = select('.progress .progress-bar', true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute('aria-valuenow') + '%'
        });
      }
    })
  }

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();

})()
   </script>

          
  


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>