<!doctype html>
<html lang="en">
   
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- favicon -->
      <link rel="icon" type="image/png" href="assets/images/favicon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
      <!-- jquery-ui css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
      <!-- modal video css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
      <!-- light box css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/lightbox/dist/css/lightbox.min.css">
      <!-- slick slider css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <!-- <title>Tourist Centres in Nigeria </title> -->
      <?php require 'php/getSiteInfo.php'; echo '<title>' . $siteInfoData['siteName'] . '</title>'; ?>
   </head>
   <body class="home">
      <div id="siteLoader" class="site-loader">
         <div class="preloader-content">
            <img src="assets/images/loader1.gif" alt="">
         </div>
      </div>
      <div id="page" class="full-page">
         <header id="masthead" class="site-header header-primary">
            <!-- header html start -->
            <div class="top-header">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 d-none d-lg-block">
                        <div class="header-contact-info">
                           <ul>
                              <li>
                                 <a href="#"><i class="fas fa-phone-alt"></i> +01 (977) 2599 12</a>
                              </li>
                              <li>
                                 <a href="https://demo.bosathemes.com/cdn-cgi/l/email-protection#721b1c141d3226001304171e5c111d1f"><i class="fas fa-envelope"></i> <span class="__cf_email__" data-cfemail="bad9d5d7cadbd4c3faded5d7dbd3d494d9d5d7">[email&#160;protected]</span></a>
                              </li>
                              <li>
                                 <i class="fas fa-map-marker-alt"></i> 3146 Koontz Lane, California
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                        <div class="header-social social-links">
                           <ul>
                              <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                        <div class="header-search-icon">
                           <button class="search-icon">
                              <i class="fas fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom-header"></div>
            <div class="mobile-menu-container"></div>
         </header>
         <main id="content" class="site-main">
            <!-- Home slider html start -->
            <section class="home-slider-section">
               <div class="home-slider">
                  <div class="home-banner-items">
                     <div class="banner-inner-wrap" style="background-image: url(assets/images/banner.jpg);"></div>
                        <div class="banner-content-wrap">
                           <div class="container">
                              <div class="banner-content text-center">
                                 <h2 class="banner-title">TRAVELLING AROUND NIGERIA</h2>
                                 <p>Taciti quasi, sagittis excepteur hymenaeos, id temporibus hic proident ullam, eaque donec delectus tempor consectetur nunc, purus congue? Rem volutpat sodales! Mollit. Minus exercitationem wisi.</p>
                                 <a href="blog-archive-left.html" class="button-primary">CONTINUE READING</a>
                              </div>
                           </div>
                        </div>
                     <div class="overlay"></div>
                  </div>
                  <div class="home-banner-items">
                     <div class="banner-inner-wrap" style="background-image: url(assets/images/Obudu-3.jpg);"></div>
                        <div class="banner-content-wrap">
                           <div class="container">
                              <div class="banner-content text-center">
                                 <h2 class="banner-title">EXPERIENCE THE NATURE'S BEAUTY</h2>
                                 <p>Taciti quasi, sagittis excepteur hymenaeos, id temporibus hic proident ullam, eaque donec delectus tempor consectetur nunc, purus congue? Rem volutpat sodales! Mollit. Minus exercitationem wisi.</p>
                                 <a href="#" class="button-primary">CONTINUE READING</a>
                              </div>
                           </div>
                        </div>
                     <div class="overlay"></div>
                  </div>
               </div>
            </section>
            <!-- slider html start -->
            <!-- Home search field html start -->
            <div class="trip-search-section shape-search-section">
               <div class="slider-shape"></div>
               <div class="container">
                  <div class="trip-search-inner white-bg d-flex">
                     <div class="input-group">
                        <label> Search Destination* </label>
                        <input type="text" name="s" placeholder="Enter Destination">
                     </div>
                     <div class="input-group">
                        <label> Pax Number* </label>
                        <input type="text" name="s" placeholder="No.of People">
                     </div>
                     <div class="input-group width-col-3">
                        <label> Checkin Date* </label>
                        <i class="far fa-calendar"></i>
                        <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                     </div>
                     <div class="input-group width-col-3">
                        <label> Checkout Date* </label>
                        <i class="far fa-calendar"></i>
                        <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                     </div>
                     <div class="input-group width-col-3">
                        <label class="screen-reader-text"> Search </label>
                        <input type="submit" name="travel-search" value="INQUIRE NOW">
                     </div>
                  </div>
               </div>
            </div>
            <!-- search search field html end -->
            <section class="destination-section">
               <div class="container">
                  <div class="section-heading">
                     <div class="row align-items-end">
                        <div class="col-lg-7">
                           <h5 class="dash-style">POPULAR DESTINATION</h5>
                           <h2>TOP NOTCH DESTINATION</h2>
                        </div>
                        <div class="col-lg-5">
                           <div class="section-disc">
                               Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu. Nostrud. Aut nostrum, ornare quas provident laoreet nesciunt.
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="destination-inner destination-three-column">
                     <div class="row">
                        <div class="col-lg-7">
                           <div class="row topNotchPortrait">
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <div class="row topNotchLandscape">
                           </div>
                        </div>
                     </div>
                     <div class="btn-wrap text-center">
                        <a href="destination.html" class="button-primary">MORE DESTINATION</a>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Home packages section html start -->
            <section class="package-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">EXPLORE GREAT PLACES</h5>
                           <h2>POPULAR PACKAGES</h2>
                           <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="package-inner">
                     <div class="row popularPackages">
                     </div>
                     <div class="btn-wrap text-center">
                        <a href="tour-packages.html" class="button-primary">VIEW ALL PACKAGES</a>
                     </div>
                  </div>
               </div>
            </section>
            <!-- packages html end -->
            <!-- Home callback section html start -->
            <section class="callback-section">
               <div class="container">
                  <div class="row no-gutters align-items-center">
                     <div class="col-lg-5">
                        <div class="callback-img" style="background-image: url(assets/images/img8.jpg);">
                           <div class="video-button">
                              <a id="video-container" data-video-id="IUN664s7N-c">
                                 <i class="fas fa-play"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-7">
                        <div class="callback-inner">
                           <div class="section-heading section-heading-white">
                              <h5 class="dash-style">CALLBACK FOR MORE</h5>
                              <h2>GO TRAVEL. DISCOVER. REMEMBER US!!</h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend.</p>
                           </div>
                           <div class="callback-counter-wrap">
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon1.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">500</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon2.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">250</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon3.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">15</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon4.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">10</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="support-area">
                              <div class="support-icon">
                                 <img src="assets/images/icon5.png" alt="">
                              </div>
                              <div class="support-content">
                                 <h4>Our 24/7 Emergency Phone Services</h4>
                                 <h3>
                                    <a href="#">Call: 123-456-7890</a>
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- callback html end -->
            <!-- Home activity section html start -->
            <section class="activity-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">TRAVEL BY ACTIVITY</h5>
                           <h2>ADVENTURE & ACTIVITY</h2>
                           <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="activity-inner row">
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon6.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Adventure</a>
                              </h4>
                              <p>15 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon10.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Trekking</a>
                              </h4>
                              <p>12 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon9.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Camp Fire</a>
                              </h4>
                              <p>7 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon8.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Off Road</a>
                              </h4>
                              <p>15 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon7.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Camping</a>
                              </h4>
                              <p>13 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon11.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Exploring</a>
                              </h4>
                              <p>25 Destination</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- activity html end -->
            <!-- Home special section html start -->
            <section class="special-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">TRAVEL OFFER & DISCOUNT</h5>
                           <h2>SPECIAL TRAVEL OFFER</h2>
                           <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="special-inner">
                     <div class="row specialOffer">
                     </div>
                  </div>
               </div>
            </section>
            <!-- special html end -->
            <!-- Home special section html start -->
            <section class="best-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-5">
                        <div class="section-heading">
                           <h5 class="dash-style">OUR TOUR GALLERY</h5>
                           <h2>BEST TRAVELER'S SHARED PHOTOS</h2>
                           <p>Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu. Nostrud. Esse? Aut nostrum, ornare quas provident laoreet nesciunt odio voluptates etiam, omnis.</p>
                        </div>
                        <figure class="gallery-img">
                           <img src="assets/images/img12.jpg" alt="">
                        </figure>
                     </div>
                     <div class="col-lg-7">
                        <div class="row">
                           <div class="col-sm-6">
                              <figure class="gallery-img">
                                 <img src="assets/images/img13.jpg" alt="">
                              </figure>
                           </div>
                           <div class="col-sm-6">
                              <figure class="gallery-img">
                                 <img src="assets/images/img14.jpg" alt="">
                              </figure>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <figure class="gallery-img">
                                 <img src="assets/images/img15.jpg" alt="">
                              </figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- best html end -->
            <!-- Home client section html start -->
            <div class="client-section">
               <div class="container">
                  <div class="client-wrap client-slider secondary-bg">
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo1.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo2.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo3.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo4.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo5.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo2.png" alt="">
                        </figure>
                     </div>
                  </div>
               </div>
            </div>
            <!-- client html end -->
            <!-- Home subscribe section html start -->
            <section class="subscribe-section" style="background-image: url(assets/images/img16.jpg);">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="section-heading section-heading-white">
                           <h5 class="dash-style">HOLIDAY PACKAGE OFFER</h5>
                           <h2>HOLIDAY SPECIAL 25% OFF !</h2>
                           <h4>Sign up now to recieve hot special offers and information about the best tour packages, updates and discounts !!</h4>
                           <div class="newsletter-form">
                              <form>
                                 <input type="email" name="s" placeholder="Your Email Address">
                                 <input type="submit" name="signup" value="SIGN UP NOW!">
                              </form>
                           </div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend temporibus occaecat luctus eleifend tempo ribus.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- subscribe html end -->
            <!-- Home blog section html start -->
            <section class="blog-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">FROM OUR BLOG</h5>
                           <h2>OUR RECENT POSTS</h2>
                           <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/img17.jpg" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Life is a beautiful journey not a destination</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Demoteam</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 17, 2021</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/img18.jpg" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Take only memories, leave only footprints</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Demoteam</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 17, 2021</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/img19.jpg" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Journeys are best measured in new friends</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Demoteam</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 17, 2021</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                  </div>
               </div>
            </section>
             <!-- blog html end -->
             <!-- Home testimonial section html start -->
            <div class="testimonial-section" style="background-image: url(assets/images/img23.jpg);">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-10 offset-lg-1">
                        <div class="testimonial-inner testimonial-slider">
                           <div class="testimonial-item text-center">
                              <figure class="testimonial-img">
                                 <img src="assets/images/img20.jpg" alt="">
                              </figure>
                              <div class="testimonial-content">
                                 <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!? Corporis condi mentum acpri! "</p>
                                 <cite>
                                    Johny English
                                    <span class="company">Travel Agent</span>
                                 </cite>
                              </div>
                           </div>
                           <div class="testimonial-item text-center">
                              <figure class="testimonial-img">
                                 <img src="assets/images/img21.jpg" alt="">
                              </figure>
                              <div class="testimonial-content">
                                 <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!? Corporis condi mentum acpri! "</p>
                                 <cite>
                                    William Housten
                                    <span class="company">Travel Agent</span>
                                 </cite>
                              </div>
                           </div>
                           <div class="testimonial-item text-center">
                              <figure class="testimonial-img">
                                 <img src="assets/images/img22.jpg" alt="">
                              </figure>
                              <div class="testimonial-content">
                                 <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!? Corporis condi mentum acpri! "</p>
                                 <cite>
                                    Alison Wright
                                    <span class="company">Travel Guide</span>
                                 </cite>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- testimonial html end -->
            <!-- Home contact details section html start -->
            <section class="contact-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="contact-img" style="background-image: url(assets/images/img24.jpg);">
                        </div>
                     </div>
                     <div class="col-lg-8">
                        <div class="contact-details-wrap">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="assets/images/icon12.png" alt="">
                                    </div>
                                    <ul>
                                       <li>
                                          <a href="#"><span class="__cf_email__" data-cfemail="21525451514e535561464c40484d0f424e4c">[email&#160;protected]</span></a>
                                       </li>
                                       <li>
                                          <a href="#"><span class="__cf_email__" data-cfemail="a3cacdc5cce3c7cccec2cacd8dc0ccce">[email&#160;protected]</span></a>
                                       </li>
                                       <li>
                                          <a href="#"><span class="__cf_email__" data-cfemail="4e202f232b0e2d21233e2f2037602d2123">[email&#160;protected]</span></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="assets/images/icon13.png" alt="">
                                    </div>
                                    <ul>
                                       <li>
                                          <a href="#">+132 (599) 254 669</a>
                                       </li>
                                       <li>
                                          <a href="#">+123 (669) 255 587</a>
                                       </li>
                                       <li>
                                          <a href="#">+01 (977) 2599 12</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="assets/images/icon14.png" alt="">
                                    </div>
                                    <ul>
                                       <li>
                                          3146 Koontz, California
                                       </li>
                                       <li>
                                          Quze.24 Second floor
                                       </li>
                                       <li>
                                          36 Street, Melbourne
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="contact-btn-wrap">
                           <h3>LET'S JOIN US FOR MORE UPDATE !!</h3>
                           <a href="#" class="button-primary">LEARN MORE</a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!--  contact details html end -->
         </main>
         <footer id="colophon" class="site-footer footer-primary">
            <div class="top-footer">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_text">
                           <h3 class="widget-title">
                              About Travel
                           </h3>
                           <div class="textwidget widget-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                           </div>
                           <div class="award-img">
                              <a href="#"><img src="assets/images/logo6.png" alt=""></a>
                              <a href="#"><img src="assets/images/logo2.png" alt=""></a>
                           </div>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_text">
                           <h3 class="widget-title">CONTACT INFORMATION</h3>
                           <div class="textwidget widget-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              <ul>
                                 <li>
                                    <a href="#">
                                       <i class="fas fa-phone-alt"></i>
                                       +01 (977) 2599 12
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <i class="fas fa-envelope"></i>
                                       <span class="__cf_email__" data-cfemail="04676b6974656a7d44606b69656d6a2a676b69">[email&#160;protected]</span>
                                    </a>
                                 </li>
                                 <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    3146  Koontz, California
                                 </li>
                              </ul>
                           </div>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_recent_post">
                           <h3 class="widget-title">Latest Post</h3>
                           <ul>
                              <li>
                                 <h5>
                                    <a href="#">Life is a beautiful journey not a destination</a>
                                 </h5>
                                 <div class="entry-meta">
                                    <span class="post-on">
                                       <a href="#">August 17, 2021</a>
                                    </span>
                                    <span class="comments-link">
                                       <a href="#">No Comments</a>
                                    </span>
                                 </div>
                              </li>
                              <li>
                                 <h5>
                                    <a href="#">Take only memories, leave only footprints</a>
                                 </h5>
                                 <div class="entry-meta">
                                    <span class="post-on">
                                       <a href="#">August 17, 2021</a>
                                    </span>
                                    <span class="comments-link">
                                       <a href="#">No Comments</a>
                                    </span>
                                 </div>
                              </li>
                           </ul>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_newslatter">
                           <h3 class="widget-title">SUBSCRIBE US</h3>
                           <div class="widget-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                           </div>
                           <form class="newslatter-form">
                              <input type="email" name="s" placeholder="Your Email..">
                              <input type="submit" name="s" value="SUBSCRIBE NOW">
                           </form>
                        </aside>
                     </div>
                  </div>
               </div>
            </div>
            <div class="buttom-footer">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-5">
                        <div class="footer-menu">
                           <ul>
                              <li>
                                 <a href="#">Privacy Policy</a>
                              </li>
                              <li>
                                 <a href="#">Term & Condition</a>
                              </li>
                              <li>
                                 <a href="#">FAQ</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-2 text-center">
                        <div class="footer-logo">
                           <a href="#"><img src="assets/images/travele-logo.png" alt=""></a>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="copy-right text-right">Copyright © 2021 Travele. All rights reserveds</div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
         </a>
         <!-- custom search field html -->
            <div class="header-search-form">
               <div class="container">
                  <div class="header-search-container">
                     <form class="search-form" role="search" method="get" >
                        <input type="text" name="s" placeholder="Enter your text...">
                     </form>
                     <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                     </a>
                  </div>
               </div>
            </div>
         <!-- header html end -->
      </div>

      <!-- JavaScript -->
      <script src="assets/js/index.js"></script>
      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.js"></script>
      <script src="../../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
      <script src="assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
      <script src="assets/js/jquery.counterup.js"></script>
      <script src="assets/vendors/modal-video/jquery-modal-video.min.js"></script>
      <script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
      <script src="assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
      <script src="assets/vendors/slick/slick.min.js"></script>
      <script src="assets/js/jquery.slicknav.js"></script>
      <script src="assets/js/custom.min.js"></script>
   <script>(function(){if (!document.body) return;var js = "window['__CF$cv$params']={r:'883608e62889d5b8',t:'MTcxNTYzODgxNi4xMTIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/1b3559406bc8/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vedd3670a3b1c4e178fdfb0cc912d969e1713874337387" integrity="sha512-EzCudv2gYygrCcVhu65FkAxclf3mYM6BCwiGUm6BEuLzSb5ulVhgokzCZED7yMIkzYVg65mxfIBNdNra5ZFNyQ==" data-cf-beacon='{"rayId":"883608e62889d5b8","version":"2024.4.1","r":1,"token":"2aaac9563824454ba89abdea91540009","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from demo.bosathemes.com/html/travele/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 May 2024 22:21:23 GMT -->
</html>