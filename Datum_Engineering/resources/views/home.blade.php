
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Datum Engineering Ltd.</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Infinitude Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="css/diamond.css" rel="stylesheet">
    <link href="css/diamonds.css" rel="stylesheet">

</head>
<body>
    <!-- home -->
    <div id="home">
        <!--/top-nav -->
        <div class="top_w3pvt_main container">
            <!--/header -->
            <header class="nav_w3pvt text-center ">
                <!-- nav -->
                <nav class="wthree-w3ls">
                    <div id="logo">
                          <a class="navbar-brand" href=""><img width="150" height= "250" src="/images/datum.jpeg" ></a>
                            </a>
                        </h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mr-auto">
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle toggle-2">Business<span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="{{route('services')}}">Business<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li class="active"><a href="{{route('services')}}" class="drop-text">Design Division</a></li>
                                    <li><a href="{{route('construction')}}" class="drop-text">Construction Division</a></li>
                                    <li><a href="{{route('developing')}}" class="drop-text">Developing Division</a></li>
                                    <li><a href="{{route('survey')}}" class="drop-text">Survey/GIS Division</a></li>
                                    <li><a href="{{route('soiltest')}}" class="drop-text">Soil testing & Investigation</a></li>
                                    <li><a href="{{route('mep')}}" class="drop-text">MEP</a></li>
                                </ul>
                        </li>
                        <li><a href="#gallery">Projects</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>

                        <li class="social-icons ml-lg-3"><a href="#" class="p-0 social-icon"><span class="fa fa-facebook-official" aria-hidden="true"></span>
                                <div class="tooltip">Facebook</div>
                            </a> </li>
                        <li class="social-icons"><a href="#" class="p-0 social-icon"><span class="fa fa-google-plus" aria-hidden="true"></span>
                                <div class="tooltip">Google</div>
                            </a> </li>
                    </ul>
                </nav>
                <!-- //nav -->
            </header>
            <!--//header -->
        </div>
        <!-- //top-nav -->
        <!-- banner slider -->
        <div id="homepage-slider" class="st-slider">
            <input type="radio" class="cs_anchor radio" name="slider" id="play1" checked="" />
            <input type="radio" class="cs_anchor radio" name="slider" id="slide1" />
            <input type="radio" class="cs_anchor radio" name="slider" id="slide2" />
            <input type="radio" class="cs_anchor radio" name="slider" id="slide3" />
            <div class="images">
                <div class="images-inner">
                    <div class="image-slide">
                        <div class="banner-w3pvt-1">
                            <div class="overlay-w3ls">

                            </div>

                        </div>
                    </div>
                    <div class="image-slide">
                        <div class="banner-w3pvt-2">
                            <div class="overlay-w3ls">

                            </div>
                        </div>
                    </div>
                    <div class="image-slide">
                        <div class="banner-w3pvt-3">
                            <div class="overlay-w3ls">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="labels">
                <div class="fake-radio">
                    <label for="slide1" class="radio-btn"></label>
                    <label for="slide2" class="radio-btn"></label>
                    <label for="slide3" class="radio-btn"></label>
                </div>
            </div>
            <!-- banner-hny-info -->
           <div class="banner-hny-info">
                <h3>We Provide Architectural
                    <br> & Structural Solutions</h3>

            <!-- //banner-hny-info -->
        </div>
        <!-- //banner slider -->
    </div>
    <!-- //banner -->

    <!-- //home -->

    <!-- about -->
    <section class="about py-5">
        <div class="container p-md-5">
            <div class="about-hny-info text-left px-md-5">
                <h3 class="tittle-w3ls mb-3"><span class="pink">We</span> Design & Build</h3>
                <p class="sub-tittle mt-3 mb-4">Datum Engineering Limited (DEL) is a fast growing multidisciplinary engineering (consultancy & Construction) organization engaged in the areas of civil and structural engineering, geotechnical engineering, urban planning and design, construction and project management services. Datum Engineering has started its journey since 2017 and finally registered as a limited company on July 2019 with the vision “safety & thrifty in the world of infrastructure". DEL has been providing services to the government, private and international organizations. DEL offers a full range of services starting from project conception right up to completion.
                   </p>
                <a class="btn more black" href="{{route('single')}}" role="button">Read More</a>
            </div>
        </div>
    </section>
    <!-- //about -->
    <!--/ab-->
<!--
    <section class="banner_bottom py-5">
        <div class="container py-md-5">
            <div class="row inner_sec_info">

                <div class="col-md-6 banner_bottom_grid help">
                    <img src="images/g10.jpg" alt=" " class="img-fluid">
                </div>
                <div class="col-md-6 banner_bottom_left mt-lg-0 mt-4">
                    <h4><a class="link-hny" href="services.html">
                            We’re Changing the Way You Work with Agencies</a></h4>
                    <p>Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
                        pulvinar neque pharetra ac.</p>
                    <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
                        pulvinar neque pharetra ac.</p>
                    <a class="btn more black mt-3" href="services.html" role="button">Services Info</a>

                </div>
            </div>
           
           
    </section>
    <!--//ab-->

    <!--/services-->
    <section class="services" id="services">
       <div class="over-lay-blue py-5">
         <div class="row my-4">
            <div class="container py-md-5">
                    <div class="col-lg-5 services-innfo pr-5">
      <h3 class="tittle-w3ls two mb-3 text-center"><span class="pink">What</span> We Provide</h3>
            
              
              <div class="diamond-grid ml-xl-5">
                  <div class="itam"><img src="images/soiltest.jpg"><div class="txt">Soil Test</h5></div></div>
                  <div class="itam"><img src="images/arc.jpg"></div>
                  <div class="itam"><img src="images/const.jpg"></div>
                  <div class="itam"><img src="images/rsz_banner.jpg"></div>
                  <div class="itam"><img src="images/rsz_5.jpg"></div>
                  <div class="itam"><img src="images/rsz_gis.jpg"></div>
                  <div class="itam"><img src="images/rsz_lb4.jpg"></div>
                  <div class="itam"><img src="images/101.jpg"></div>
              </div>
   
           </div>
        </div>
    </section>

    <!--//services-->
    <!-- /projects -->
    <section class="projects py-5" id="gallery">
        <div class="container py-md-5">
            <h3 class="tittle-w3ls text-left mb-5"><span class="pink">Our</span> Projects</h3>
            <div class="row news-grids mt-md-5 mt-4 text-center">
                <div class="col-md-4 gal-img">
                    <a href="#gal1"><img src="images/g10.jpg" alt="w3pvt" height="" width="" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>View Project<span class="decription">Website</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal2"><img src="images/g11.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>View Project<span class="decription">Website</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal3"><img src="images/rsz_101.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>View Project<span class="decription">Website</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal4"><img src="images/rsz_5.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>View Project<span class="decription">Website</span></h5>
                    </div>
                </div>

                <div class="col-md-4 gal-img">
                    <a href="#gal5"><img src="images/rsz_build7.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>View Project<span class="decription">Website</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal6"><img src="images/rsz_cons.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>View Project<span class="decription">Website</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal7"><img src="images/rsz_banner.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>View Project<span class="decription">Website</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal8"><img src="images/rsz_lb4.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>View Project<span class="decription">Website</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal9"><img src="images/g9.jpg" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <h5>View Project<span class="decription">Website</span></h5>
                    </div>
                </div>

            </div>
            <!-- popup-->
            <div id="gal1" class="pop-overlay">
                <div class="popup">
                    <img src="images/g10.jpg" alt="Popup Image"  class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal2" class="pop-overlay">
                <div class="popup">
                    <img src="images/g11.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal3" class="pop-overlay">
                <div class="popup">
                    <img src="images/rsz_101.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup3 -->
            <!-- popup-->
            <div id="gal4" class="pop-overlay">
                <div class="popup">
                    <img src="images/rsz_5.jpg" alt="Popup Image" class="img-fluid" />
                    <h5>View Project</h5>
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal5" class="pop-overlay">
                <div class="popup">
                    <img src="images/rsz_4.jpg" alt="Popup Image" class="img-fluid" />
                    <h5 class="mt-3">View Project</h5>
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal6" class="pop-overlay">
                <div class="popup">
                    <img src="images/rsz_cons.jpg" alt="Popup Image" class="img-fluid" />
                    <h5 class="mt-3">View Project</h5>
                    <p>Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal7" class="pop-overlay">
                <div class="popup">
                    <img src="images/rsz_banner.jpg" alt="Popup Image" class="img-fluid" />
                    <h5 class="mt-3">View Project</h5>
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal8" class="pop-overlay">
                <div class="popup">
                    <img src="images/rsz_lb4.jpg" alt="Popup Image" class="img-fluid" />
                    <h5 class="mt-3">View Project</h5>
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal9" class="pop-overlay">
                <div class="popup">
                    <img src="images/g9.jpg" alt="Popup Image" class="img-fluid" />
                    <h5 class="mt-3">View Project</h5>s
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
        </div>
    </section>
    <!-- //projects -->

  
    <!--//mid-->

    <!--/services-->
 
    <section class="testmonials" id="test">
        <div class="over-lay-blue py-5">
            <div class="container py-md-5">
                <h3 class="tittle-w3ls two text-center mb-5">Our Testimonials</h3>
                <div class="row my-4">
                    <div class="col-lg-4 testimonials_grid mt-3">
                        <div class="p-lg-5 p-4 testimonials-gd-vj">
                            <p class="sub-test"><span class="fa fa-quote-left s4" aria-hidden="true"></span> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.
                            </p>
                            <div class="row mt-4">
                                <div class="col-3 testi-img-res">
                                    <img src="images/t1.jpg" alt=" " class="img-fluid">
                                </div>
                                <div class="col-9 testi_grid">
                                    <h5 class="mb-2">Thomas Carl</h5>
                                    <p>Add xxxx</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 testimonials_grid mt-3">
                        <div class="p-lg-5 p-4 testimonials-gd-vj">
                            <p class="sub-test"><span class="fa fa-quote-left s4" aria-hidden="true"></span>Quisque sagittis lacus eu lorem , cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod possimus.
                            </p>
                            <div class="row mt-4">
                                <div class="col-3 testi-img-res">
                                    <img src="images/t2.jpg" alt=" " class="img-fluid">
                                </div>
                                <div class="col-9 testi_grid">
                                    <h5 class="mb-2">Adam Ster</h5>
                                    <p>Add xxxx</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 testimonials_grid mt-3">
                        <div class="p-lg-5 p-4 testimonials-gd-vj">
                            <p class="sub-test"><span class="fa fa-quote-left s4" aria-hidden="true"></span> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.
                            </p>
                            <div class="row mt-4">
                                <div class="col-3 testi-img-res">
                                    <img src="images/t1.jpg" alt=" " class="img-fluid">
                                </div>
                                <div class="col-9 testi_grid">
                                    <h5 class="mb-2">Dane Walker</h5>
                                    <p>Add xxxx</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//testimonials-->




    <!-- footer -->
    <footer class="py-lg-5 py-4">
        <div class="container py-sm-3">
            <div class="row footer-grids">
                <div class="col-lg-4 mt-4">

                    <h2> <a class="navbar-brand px-0 mx-0 mb-4" href="{{route('home')}}">Datum Engineering Ltd.
                        </a>
                    </h2>
                    <p class="mb-3">DEL has been providing services to the government, private and international organizations. DEL offers a full range of services starting from project conception right up to completion.</p>
                    <h5>Trusted by <span>500+ People</span> </h5>
                    <div class="icon-social mt-4">
                        <a href="#" class="button-footr">
                            <span class="fa mx-2 fa-facebook"></span>
                        </a>
                        <a href="#" class="button-footr">
                            <span class="fa mx-2 fa-google-plus"></span>
                        </a>

                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                  <!--  <h4 class="mb-4">Quick Links</h4>-->
                    <div class="links-wthree d-flex">
                     <!--   <ul class="list-info-wthree">
                            <li><a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span> Online Websites</a></li>
                            <li><a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span> Free Application</a></li>
                            <li><a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span> Support Helpline</a></li>
                            <li><a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span> Privacy Ploicy</a></li>
                            <li><a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span> Ready to Build</a></li>
                            <li><a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span> Free Application</a></li>
                        </ul>-->
                        <ul class="list-info-wthree ml-5">
                            <li>
                                <a href="{{route('home')}}"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{route('about')}}"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="{{route('single')}}"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Details
                                </a>
                            </li>
                            <li>
                                <a href="{{route('team')}}"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Team
                                </a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 ad-info">
                    <h4 class="mb-4">Contact Info</h4>
                    <p><span class="fa fa-map-marker"></span>90 nsequursu dsdesdc,
                        xxx Honey Street 049436.<span>Newyork, NY.</span></p>
                    <p class="phone"><span class="fa fa-phone"></span> +1(12) 123 456 789 </p>
                    <p class="phone"><span class="fa fa-fax"></span> +1(12) 123 456 789 </p>
                    <p><span class="fa fa-envelope"></span><a href="mailto:info@example.com">info@example.com</a></p>
                </div>

            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copy_right p-3 d-flex">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9 copy_w3pvt">
                    <p class="text-lg-left text-center">© 2019 Datum Engineering Ltd. All rights reserved | Design by
                        <a href="http://www.deshisysltd.com//" target="_blank">Deshi Systems Limited</a></p>

                </div>
                <!-- move top -->
                <div class="col-lg-3 move-top text-lg-right text-center">
                    <a href="#home" class="move-top">
                        <span class="fa fa-angle-double-up mt-3" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- move top -->
            </div>
        </div>

    </div>
    <!-- //copyright -->
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="js/jquery.diamonds.js"></script>
    <script>
        $(".diamond-grid").diamonds({
            size : 230, // Size of diamonds in pixels. Both width and height. 


            gap :6, // Pixels between each square.

            hideIncompleteRow : false, // Hide last row if there are not enough items to fill it completely.
            autoRedraw : true, // Auto redraw diamonds when it detects resizing.
            itemSelector : ".itam" // the css selector to use to select diamonds-items.
});
    </script>
   
</body>

</html>
