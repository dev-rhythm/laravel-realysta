<!DOCTYPE html>
<html lang="en">

<head>
    <title>Realysta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Saira:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/t1-style.css">

    <link rel="stylesheet" href="/css/all.min.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1//js/all.min.js"></script>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    @include('frontend.partials.favicon')
</head>

<body>
    <header id="main_header">
        <div class="container">
            <nav class="navbar navbar-expand-md">
                <a class="navbar-brand" href="#">
                    <img src="/images/t1-logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#overview">OVERVIEW</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#photos">PHOTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tour">3D TOUR </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">FEATURES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">CONTACT </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#map">MAP</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section class="main-section" id="overview">
        <div class="container">
            <div class="text-content">
                <h1>8519 Star Road</h1>
                <h3>Windsor,CA, 95478</h3>
                {{-- <a href="#">View Contact</a> --}}
            </div>
        </div>
    </section>
    <section class="offer-section">
        <div class="container">
            <div class="offer-wrap">
                <div class="icon-heading">
                    <img src="/images/sale-con.png">
                    <span class="seperator">Offered At</span>
                    <h2>$1,240,000</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="offer-items">
                            <h3>apartments</h3>
                            <div class="offer-content">
                                <img src="/images/building-icon.png" />
                                <h5>3</h5>
                                <p>bedrooms</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="offer-items">
                            <h3>SQFT</h3>
                            <div class="offer-content">
                                <img src="/images/sqft-icon.png" />
                                <h5>5,144</h5>
                                <p>㎡</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="offer-items">
                            <h3>SF LOT</h3>
                            <div class="offer-content">
                                <img src="/images/sf-lot-icon.png" />
                                <h5>19,920</h5>
                                <p>㎡</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="text-content">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled it to make a type specimen book. It has survived not only
                        five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages, and more recently with desktop publishing software like Aldus PageMaker including
                        versions of Lorem Ipsum.</p>
                    <div class="btn-wrap">
                        <a href="#" class="btn border-btn"><i class="fas fa-file-alt"></i>Documents</a>
                        <a href="#" class="btn border-btn"><i class="fas fa-file-image"></i>Brochure</a>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <section id="photos" class="gallery-section pt-60 pb-60">
        <div class="container">
            <h2 class="section-title">
                Gallery
                <span class="line"></span>
            </h2>
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="img-wrap">
                                <a id="single_image" rel="gallery1" data-fancybox="gallery" href="/images/g1.png">
                                    <img src="/images/g1.png" class="img-fluid" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="img-wrap">
                                <a id="single_image" rel="gallery1" data-fancybox="gallery" href="/images/g2.png">
                                    <img src="/images/g2.png" class="img-fluid" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="img-wrap">
                                <a id="single_image" rel="gallery1" data-fancybox="gallery" href="/images/g3.png">
                                    <img src="/images/g3.png" class="img-fluid" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-wrap">
                                <a id="single_image" rel="gallery1" data-fancybox="gallery" href="/images/g4.png">
                                    <img src="/images/g4.png" class="img-fluid" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-wrap">
                                <a id="single_image" rel="gallery1" data-fancybox="gallery" href="/images/g5.png">
                                    <img src="/images/g5.png" class="img-fluid" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-wrap">
                        <a id="single_image" rel="gallery1" data-fancybox="gallery" href="/images/g6.png">
                            <img src="/images/g6.png" class="img-fluid" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video-tour-section" id="tour">
        <div class="container">
            <div class="video-tour">
                <h2 class="section-title">
                    Virtual Tour
                    <span class="line"></span>
                </h2>
                <div class="video-wrap-div">
                    <div class="img-wrap">
                        <img src="/images/video-bg.png" class="img-fluid" />
                    </div>
                    <div class="video-wrap-div">
                        <img class="before-curve" src="/images/before-curve.png" class="img-fluid" />
                        <img class="after-curve" src="/images/after-curve.png" class="img-fluid" />
                        <div class="video">
                            <img src="/images/video-img.png" class="img-fluid" />
                            <div class="text-content">
                                <h3>Sample Listing</h3>
                                <a href="#" class="play-icon">
                                    <i class="fas fa-play"></i>
                                </a>
                                <div class="powered-by">
                                    <p>Powered By</p>
                                    <img src="/images/t1-powered-by.png" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features-section" id="features">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-wrap">
                            <img class="gray-dot" src="/images/gray-dot.png" class="img-fluid">
                            <img src="/images/features-img.png" class="img-fluid">
                            <img class="gray-dot-small" src="/images/gray-small-dot.png" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="features-border">
                            <div class="features-bg">
                                <h2 class="section-title">
                                    features
                                    <span class="line"></span>
                                </h2>
                                <ul>
                                    <li>Beach Access</li>
                                    <li>City Lights Views</li>
                                    <li>Reat Schools</li>
                                    <li>Heated Pool</li>
                                    <li>Large Kitchen</li>
                                    <li>Large Lot</li>
                                    <li>New Construction</li>
                                    <li>Gated Community</li>
                                    <li>Open Floor Plan</li>
                                    <li>Quiet and Private</li>
                                    <li>Shopping Nearby</li>
                                    <li>Ocean Views</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="get-touch-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title">
                        Listing Presented By
                        <span class="line"></span>
                    </h2>
                    <div class="bg-wrap">
                        <div class="auther-content">
                            <div class="auther-img">
                                <img src="/images/auther1.png" class="img-fluid">
                            </div>
                            <div class="auther-info">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4>Ryan Dozen</h4>
                                        <p>SampleCo</p>
                                        <p>Agent@example.com</p>
                                        <p>Lic# 123456</p>
                                        <div class="social">
                                            <a href="#" class="social-tag fb"><i
                                                    class="fab fa-facebook-f"></i>Facebook</a>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <a href="#" class="btn website-link">Website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="auther-content">
                            <div class="auther-img">
                               <img src="/images/auther4.jpg" class="img-fluid" style="
    height: 192px;
    width: 150px;
">
                            </div>
                            <div class="auther-info">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4>leslie m.</h4>
                                        <p>SampleCo</p>
                                        <p>Agent@example.com</p>
                                        <p>Lic# 123456</p>
                                        <div class="social">
                                            <a href="#" class="social-tag twit"><i
                                                    class="fab fa-twitter"></i>twitter</a>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <a href="#" class="btn website-link">Website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="section-title">
                        Get In Touch
                        <span class="line"></span>
                    </h2>
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Phone"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-orange">Send Inquiry</a>
                            </div>
                            <ul class="social-icon">
                                <li>
                                    <a href="#" class="fb">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twit">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pintrest">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="gmail">
                                        <i class="far fa-envelope"></i>
                                    </a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map-section" id="map1">
        {{-- <div class="map-wrap"></div> --}}
        <div class="map-wrap">
            <div class="col-md-12">
                <div id="map" style="width: 100%; height: 500px;"></div>
            </div>
        </div>
    </section>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQjmoWXaw3jONRXX6ou9i07L85AJ_0_ww&callback=map">
    </script>


    <script type="text/javascript">
        var street = "6351 SE 128th Ave"
        var city = "Okeechobee"
        var state = "Florida"
        var country = "United States"
        var address = street+','+city+','+state+','+country;

        var map = new google.maps.Map(document.getElementById('map'), {
        mapTypeId: google.maps.MapTypeId.TERRAIN,
        zoom: 10
        });

        var geocoder = new google.maps.Geocoder();

        geocoder.geocode({
        'address': address
        },
        function(results, status) {
        if(status == google.maps.GeocoderStatus.OK) {
        new google.maps.Marker({
        position: results[0].geometry.location,
        map: map
        });
        map.setCenter(results[0].geometry.location);
        }
        });
    </script>


</body>

<script>
    $('ul.navbar-nav .nav-link').click(function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        $(this).closest('ul').find('.active').removeClass('active');
        $(this).addClass('active');
        $('html, body').animate({
            scrollTop: $(href).offset().top - 200
        }, 2000);
        $('#collapsibleNavbar').removeClass('show');
    });

</script>
<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the header
    var header = document.getElementById("main_header");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("header-sticky");
    } else {
        header.classList.remove("header-sticky");
    }
    }
</script>

</html>
