<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title> Contact </title>
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
    <style>
        #map{
            height: 500px;
            width: 100%;
        }
    </style>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->

</head>

<body>
    <!--/home -->
    <div id="home" class="inner-w3pvt-page">
        <div class="overlay-innerpage">
            <!--/top-nav -->
            <div class="top_w3pvt_main container">
                <!--/header -->
                <header class="nav_w3pvt text-center">
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
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toggle-2">Business<span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                <a href="{{route('services')}}">Business  <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li class="active"><a href="{{route('services')}}" class="drop-text">Design</a></li>
                                    <li><a href="{{route('construction')}}" class="drop-text">Construction</a></li>
                                    <li><a href="{{route('developing')}}" class="drop-text">Developing</a></li>
                                    <li><a href="{{route('survey')}}" class="drop-text">Survey/GIS</a></li>
                                    <li><a href="{{route('soiltest')}}" class="drop-text">Soil testing & Investigation</a></li>
                                    <li><a href="{{route('mep')}}" class="drop-text">MEP</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('home')}}">Projects</a></li>
                            <li class="active"><a href="{{route('contact')}}">Contact</a></li>

                             <li class="social-icons ml-lg-3"><a href="https://www.facebook.com/Datum55/" class="p-0 social-icon"><span class="fa fa-facebook-official" aria-hidden="true"></span>
                                <div class="tooltip">Facebook</div>
                            </a> </li>
                        <li class="social-icons"><a href="mailto:datam5555@gmail.com" class="p-0 social-icon"><span class="fa fa-google-plus" aria-hidden="true"></span>
                                <div class="tooltip">Google</div>
                            </a> </li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                </header>
                <!--//header -->

                <!--/breadcrumb-->
                <div class="inner-w3pvt-page-info">
                    <ol class="breadcrumb d-flex">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>

                </div>
                <!--//breadcrumb-->
            </div>
            <!-- //top-nav -->
        </div>
    </div>
    <!-- //home -->

    <!-- Contact -->
    <section class="about-info py-5 px-lg-5">
        <div class="content-w3ls-inn px-lg-5">
            <div class="container py-md-5 py-3">
                <div class="px-lg-5">
                    <h3 class="tittle-w3ls mb-lg-5 mb-4"><span class="pink">Contact</span> Us</h3>
                    <div id="map">
                        <p>
                          <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d161.59990890102927!2d90.43436746609112!3d23.758520704768078!2m2!1f0!2f44.99991102991478!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x3755b80a4d3c45bd%3A0x3e92c8f7176694d3!2zMjPCsDQ1JzM1LjIiTiA5MMKwMjYnMDMuOSJF!5e1!3m2!1sen!2sbd!4v1564306116962!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
                    <div class="contact-hny-form mt-lg-5 mt-3">
                        <h3 class="title-hny mb-lg-5 mb-3">
                            Drop a Line
                        </h3>
                        <form action="https://sendmail.w3layouts.com/submitForm" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="w3lName">Your Name</label>
                                        <input type="text" name="w3lName" id="w3lName">
                                    </div>
                                    <div class="form-group">
                                        <label for="w3lSender">Your Email ID</label>
                                        <input type="text" name="w3lSender" id="w3lSender">
                                    </div>
                                    <div class="form-group">
                                        <label for="w3lSubject">Subject</label>
                                        <input type="text" name="w3lSubject" id="w3lSubject">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="w3lSubject">Message</label>
                                        <textarea name="w3lMessage" id="w3lMessage">
    </textarea>
                                    </div>
                                </div>
                                <div class="form-group mx-auto mt-3">
                                    <button type="submit" class="btn btn-default morebtn more black con-submit">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="map-w3pvt mt-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Contact -->

    <!-- /news-letter -->
    <!--
    <section class="news-letter-w3pvt py-5">
        <div class="container contact-form mx-auto text-left">
            <h3 class="title-w3ls two text-left mb-3">Newsletter </h3>
            <form method="post" action="#" class="w3ls-frm">
                <div class="row subscribe-sec">
                    <p class="news-para col-lg-3">Start working together?</p>
                    <div class="col-lg-6 con-gd">
                        <input type="email" class="form-control" id="email" placeholder="Your Email here..." name="email" required>

                    </div>
                    <div class="col-lg-3 con-gd">
                        <button type="submit" class="btn more black more">Subscribe</button>
                    </div>

                </div>

            </form>
        </div>
    </section>
    <!-- //news-letter -->
     
    <!-- footer -->
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
                        <a href="https://www.facebook.com/Datum55/" class="button-footr">
                            <span class="fa mx-2 fa-facebook"></span>
                        </a>
                        <a href="mailto:datam5555@gmail.com" class="button-footr">
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
                                <a href="{{route('career')}}"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Career
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
                    <p><span class="fa fa-map-marker"></span><span class="ml-lg-2">House #13(5th Floor),Road #8,
                    </span><br><span class="ml-lg-4">Block #E,Banasree,Rampura,Dhaka-1219</span></p>
                    <p class="phone"><span class="fa fa-phone"></span> +8801732-671618<br><span class="ml-lg-4">+8801832-764097</span></p>
                   <!--  <p class="phone"><span class="fa fa-fax"></span>  </p> -->
                    <p><span class="fa fa-envelope"></span><a href="mailto:datam5555@gmail.com">datam5555@gmail.com</a></p>
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


   <!--  <script>
        function initMap(){
            var location= {lat: 23.81671888569728, lng: 90.41987697353845};
            var map= new google.maps.Map(document.getElementById("map"),{
                zoom: 4,
                center: location
            });
            var marker= new goole.maps.Marker({
                position: location,
                map: map
            });
        }
        
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKcjSwDT823zUSb8SWnstC4TnD-4QBz3g&v=3.exp&callback=initMap"> 
    </script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKcjSwDT823zUSb8SWnstC4TnD-4QBz3g&v=3.exp&libraries=places"></script> -->

</body>

</html>
