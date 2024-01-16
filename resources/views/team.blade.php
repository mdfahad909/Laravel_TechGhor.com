@extends('layout.viewApp')

@section('content')
<div class="main-content">
    <!--Full width header Start-->
    @include('partials.header')
    <!--Full width header End-->

     <!-- Breadcrumbs Start -->
     <div class="tg-breadcrumbs img1">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">About</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="index.html">Home</a>
                </li>
                <li>About</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div class="tg-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 md-mb-30">
                    <div class="tg-animation-shape">
                        <div class="images">
                           <img src="assets/images/about/about-3.png" alt=""> 
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 pl-60 md-pl-15">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style-bg">About Us</div>
                            <h2 class="title pb-38">
                                We Are Increasing Business Success With Technology
                            </h2>
                            <div class="desc pb-35">
                               Over 13 years working in IT services developing software applications and mobile apps for clients all over the world.
                            </div>
                            <p class="margin-0 pb-15">
                             Techghor serves medium-sized and huge organizations internationally. Significant tech information combined with business understanding permits us to make novel arrangements that power ventures, their workers, and clients consistently. We adhere to the most recent industry patterns and quality prerequisites to convey strong and secure programming that fits professional workplaces impeccably and brings positive client experience.
                            </p>
                        </div>
                        <div class="btn-part">
                            <a class="readon learn-more" href="contact.html">Learn-More</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- About Section End -->

    <!-- Team Section Start -->
    <div class="tg-team pt-120 pb-120 md-pt-80 md-pb-80 xs-pb-54"> 
        <div class="sec-title2 text-center mb-30">
            <span class="sub-text style-bg white-color">Team</span>
            <h2 class="title white-color">
                Expert IT Consultants
            </h2>
        </div>               
        <div class="container">
            <div class="container"> 
                <div class="tg-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="#"><img src="assets/images/team/team-1.jpg" alt="MD Yasin"></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="#">MD Yasin</a></h4>
                            <span class="designation">Founder & CEO, Senior Software Developer</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="#"><img src="assets/images/team/team-2.jpg" alt="MD Fahad"></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="#">MD Fahad</a></h4>
                            <span class="designation">Designer & Developer</span>
                            <ul class="team-social">
                                <li><a target="_blank" href="https://www.facebook.com/mdfahad909/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/md_fahad_909/"><i class="fab fa-instagram"></i></a></li>
                                <li><a target="_blank" href="https://github.com/Fahad909?tab=repositories"><i class="fab fa-github"></i></a></li>
                                <li><a target="_blank" href="https://stackoverflow.com/users/12206027/md-fahad"><i class="fab fa-stack-overflow"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="#"><img src="assets/images/team/team-3.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="#">Janntul Ferdaus Juthi</a></h4>
                            <span class="designation">Managing Director</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="#"><img src="assets/images/team/team-4.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="#">Mehedi Faruk</a></h4>
                            <span class="designation">Developer & Designer</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="#"><img src="assets/images/team/team-5.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="#">Abu Musa Ashari</a></h4>
                            <span class="designation">Designer & Developer</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="#"><img src="assets/images/team/team-6.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="#">Shariful Islam</a></h4>
                            <span class="designation">Designer & Developer</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div> 
    </div>
    <!-- Team Section End -->

    <!-- Process Section Start -->
    <div class="tg-process style2 pt-120 pb-120 md-pt-80 md-pb-73">
        <div class="container">
            <div class="sec-title2 text-center mb-45">
                <span class="sub-text style-bg">Process</span>
                <h2 class="title title2">
                   Our Working Process
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 md-mb-50">
                    <div class="addon-process">
                        <div class="process-wrap">
                            <div class="process-img">
                                <img src="assets/images/workprocess/workp-1.png" alt="">
                            </div>
                            <div class="process-text">
                                <h3 class="title">Discovery</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 md-mb-50">
                    <div class="addon-process">
                        <div class="process-wrap">
                            <div class="process-img">
                                <img src="assets/images/workprocess/workp-2.png" alt="">
                            </div>
                            <div class="process-text">
                                <h3 class="title"> Planning</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="addon-process">
                        <div class="process-wrap">
                            <div class="process-img">
                                <img src="assets/images/workprocess/workp-3.png" alt="">
                            </div>
                            <div class="process-text">
                                <h3 class="title">Execute</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="addon-process">
                        <div class="process-wrap">
                            <div class="process-img">
                                <img src="assets/images/workprocess/workp-4.png" alt="">
                            </div>
                            <div class="process-text">
                                <h3 class="title">Deliver</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Section End -->

    <!-- Counter Section Start -->
    <div class="tg-contact-wrap bg5 pt-120 pb-390 md-pt-80">
       <div class="container">
         <div class="sec-title2 text-center mb-30">
             <span class="sub-text style-bg white-color">Contact</span>
             <h2 class="title white-color">
                Request A Free Consultation
             </h2>
         </div>           
       </div>
    </div>
    <!-- Counter Section End -->

    <!-- Video Section End -->
    <div class="tg-video-wrap style2 inner pb-120 md-pb-80">
        <div class="container">
            <div class="row margin-0 gray-color">
                <div class="col-lg-6 padding-0">
                    <div class="video-item">
                        <div class="tg-videos">
                            <div class="animate-border main-home style2">
                                <a class="popup-border popup-videos" href="https://www.youtube.com/watch?v=YLN1Argi7ik">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-6 padding-0">
                    <div class="tg-requset">                              
                        <div id="form-messages"></div>
                        <form id="contact-form" method="post" action="mailer.php">
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                    </div> 
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                    </div>   
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                    </div>   
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="subject" name="subject" placeholder="Your Subject" required="">
                                    </div>
                              
                                    <div class="col-lg-12 mb-45">
                                        <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                    </div>
                                </div>
                                <div class="btn-part">
                                  <input class="submit sub-small" type="submit" value="Submit Now">
                                </div> 
                            </fieldset>
                        </form> 
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!-- Video Section End -->
    
</div>
    
@endsection