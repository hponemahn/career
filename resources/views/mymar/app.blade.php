<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K0T5GZF2C9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-K0T5GZF2C9');
    </script>

    <!-- Document Title
 ============================================= -->
    <title>MyMar | Website & Mobile App Development Services</title>

    <meta name="title" content="MyMar | Website & Mobile App Development Services">
    <meta name="description"
        content="MyMar design and build bespoke quality websites, tailored to your business, that drive profits for your organisation.">

    <meta name="keywords"
        content="mymar, mymar digital, mymar tech, website, mobile app">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="MyMar">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mymar.digital">
    <meta property="og:title" content="MyMar | Website & Mobile App Development Services">
    <meta property="og:description"
        content="MyMar design and build bespoke quality websites, tailored to your business, that drive profits for your organisation.">
    <meta property="og:image" content="{{ asset('images/mymar_cover_web_services.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://mymar.digital">
    <meta property="twitter:title" content="MyMar | Website & Mobile App Development Services">
    <meta property="twitter:description"
        content="MyMar design and build bespoke quality websites, tailored to your business, that drive profits for your organisation.">
    <meta property="twitter:image" content="{{ asset('images/mymar_cover_web_services.png') }}">

    <link rel="shortcut icon" href="{{ asset('images/favicon-32x32.png') }}" />

    <!-- Stylesheets
 ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Heebo:300,400,500,700,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/mymar/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/mymar/style.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('asset/mymar/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/mymar/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/mymar/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/mymar/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('asset/mymar/custom.css') }}" type="text/css" />

    <!-- Freelancer Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('asset/mymar/fonts.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('asset/mymar/freelancer.css') }}" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{ asset('asset/mymar/colors.php?color=f7c25e') }}" type="text/css" />

    <style>
        @media only screen and (max-width: 767px) {
            .custom-margin-top {
                margin-top: 70px;
            }
        }

    </style>

</head>

<body class="stretched">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
  ============================================= -->
        <header id="header" class="border-bottom-0 no-sticky transparent-header">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
      ============================================= -->
                        <div id="logo">
                            <a href="{{ url('/') }}" class="standard-logo">
                                {{-- <img src="demos/freelancer/images/logo.png" alt="Canvas Logo"> --}}
                                <img src="{{ asset('images/myMarLogo.png') }}" alt="MyMar Logo">
                            </a>

                            <a href="{{ url('/') }}" class="retina-logo">
                                {{-- <img src="demos/freelancer/images/logo@2x.png" alt="Canvas Logo"> --}}
                                <img src="{{ asset('images/myMarLogo.png') }}" alt="MyMar Logo">
                            </a>
                        </div><!-- #logo end -->

                        <div class="header-misc">
                            <a href="tel:09777425147" class="button button-border rounded-pill">09-777425147</a>
                        </div>

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
      ============================================= -->
                        <nav class="primary-menu">

                            <ul class="menu-container">
                                {{-- <li class="menu-item"><a class="menu-link" href="demo-freelancer-about.html"><div>About me</div></a></li> --}}
                                <li class="menu-item"><a class="menu-link" href="#works">
                                        <div>Works</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#footer"
                                        data-scrollto="#footer" data-easing="easeInOutExpo" data-speed="1250"
                                        data-offset="70">
                                        <div>Contact</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
        </header><!-- #header end -->

        <!-- Slider
  ============================================= -->
        <section id="slider" class="slider-element min-vh-md-100 py-4 include-header"
            style="background: #FFF url('demos/freelancer/images/hero-bg.svg') repeat top center; background-size: cover;">
            <div class="slider-inner">
                <div class="vertical-middle slider-element-fade">
                    <div class="container text-center py-5">
                        <div class="emphasis-title mb-2">
                            <h4 class="text-uppercase ls3 fw-bolder mb-0">We Create</h4>
                            <h1>
                                <span id="oc-images" class="owl-carousel image-carousel carousel-widget" data-items="1"
                                    data-margin="0" data-autoplay="3000" data-loop="true" data-nav="false"
                                    data-pagi="false" data-animate-in="fadeInUp">
                                    <div class="oc-item gradient-text gradient-red-yellow text-uppercase">Websites</div>
                                    <div class="oc-item gradient-text gradient-red-yellow text-uppercase">Mobile Apps
                                    </div>
                                </span>
                            </h1>
                        </div>
                        <!-- <div class="d-flex align-items-center justify-content-center mb-5">
       <img src="demos/freelancer/images/face.svg" alt="Face" width="60">
       <span class="text-uppercase fw-bold ms-3">SemiColonWeb</span>
      </div> -->
                        <div class="mx-auto" style="max-width: 600px">
                            <p class="lead fw-normal text-dark mb-5">Our team of expert developers has over 7 years of
                                experience in developing websites & strategies that help you meet your organisation’s
                                goals. Whether that’s finding more customers, generating more leads, increasing traffic
                                & awareness, or selling more products; whatever the objective, we will deliver a return
                                on investment.</p>
                            <a href="#works"
                                class="button button-dark button-hero h-translatey-3 tf-ts button-reveal overflow-visible bg-dark text-end"><span>View
                                    our Works</span><i class="icon-line-arrow-right"></i></a>
                            <a href="#footer" data-scrollto="#footer" data-easing="easeInOutExpo" data-speed="1250"
                                data-offset="70"
                                class="button button-large button-light text-dark bg-transparent m-0"><i
                                    class="icon-line-arrow-down fw-bold"></i> <u>Tell Us</u></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #slider end -->

        <!-- Content
  ============================================= -->
        <section id="content">

            <div class="content-wrap p-0">

                <div class="section mb-0 pt-3 pb-0"
                    style="background-color: #F4F4F4; margin-top: 150px; overflow: visible;">
                    <div class="shape-divider" data-shape="wave" data-height="150" data-outside="true"
                        data-flip-vertical="true" data-fill="#F4F4F4"></div>
                    <div class="container">
                        <div class="row justify-content-center text-center mt-5">
                            <div class="col-lg-6">
                                <div>
                                    <h3 class="fw-bolder h1 mb-4">Why Work With <span
                                            class="gradient-text gradient-horizon">US</span></h3>
                                    <p class="mb-5 lead text-black-50 fw-extralight">We design and build bespoke quality
                                        websites, tailored to your business, that drive profits for your organisation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center position-relative">
                        <div class="parallax min-vh-75"
                            style="background-image: url('demos/freelancer/images/me.jpg'); background-size: cover; background-position: center center;"
                            data-bottom-top="width: 40vw" data-center-top="width: 100vw;">
                            <div class="row align-items-center justify-content-center h-100">
                                <div class="col-auto text-center">
                                    <a href="{{ url('/career') }}" target="_blank"
                                        class="display-4 fw-bolder text-white d-inline-block mx-4 h-op-08 op-ts"><u>#OurProduct</u></a>
                                    <a href="{{ url('/career') }}" target="_blank"
                                        class="display-4 fw-bolder text-white d-inline-block mx-4 h-op-08 op-ts"><u>#CareerAdvice</u></a>
                                </div>
                            </div>
                        </div>
                        <div class="shape-divider" data-shape="wave" data-position="bottom"></div>
                    </div>
                </div>

                <div class="container" style="max-width: 1000px">
                    <div class="row col-mb-30 mt-5">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="counter counter-xlarge text-dark fw-bolder"><span data-from="1" data-to="7"
                                        data-refresh-interval="2" data-speed="600"></span></div>
                                <span>+ Years Of<br>Experience.</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="counter counter-xlarge text-dark fw-bolder"><span data-from="4" data-to="83"
                                        data-refresh-interval="50" data-speed="1500"></span></div>
                                <span>% of Works <br>Completed.</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="counter counter-xlarge text-dark fw-bolder"><span data-from="5"
                                        data-to="100" data-refresh-interval="30" data-speed="1200"></span></div>
                                <span>% Satisfied<br>Customers.</span>
                            </div>
                        </div>
                    </div>
                    <div class="line line-sm mb-0"></div>
                </div>

                <div class="clear"></div>

                <div class="section m-0" id="works">
                    <div class="container">
                        <div class="row align-items-end justify-content-between mb-5">
                            <div class="col-lg-5 offset-lg-1">
                                <div>
                                    <h3 class="fw-bolder h1 mb-4">Some of Our Works</h3>
                                    <p class="lead mb-0">We pride ourselves on delivering high-quality products.
                                    </p>
                                </div>
                            </div>
                            {{-- <div class="col-auto">
								<a href="demo-freelancer-works.html" class="button button-dark button-border rounded-pill">View All Works <i class="icon-line-arrow-right"></i></a>
							</div> --}}
                        </div>

                        <div class="row justify-content-center col-mb-50">
                            <div class="col-lg-6 h-translatey-3 tf-ts">
                                <a href="{{ url('/career') }}" class="portfolio-item" target="_blank">
                                    <div class="portfolio-image">
                                        <img src="demos/freelancer/images/works/1.jpg" alt="Portfoio Item">
                                        <div class="bg-overlay">
                                            <div
                                                class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                                                <h3 class="mb-0 mt-1">Career Advice</h3>
                                                <h5>MyMar</h5>
                                            </div>
                                            <div class="bg-overlay-content align-items-start justify-content-end p-4">
                                                <div class="overlay-trigger-icon bg-dark text-white"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                                        class="icon-line-link"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-6 h-translatey-3 tf-ts">
                                <a href="https://www.chid.com.mm/" class="portfolio-item" target="_blank">
                                    <div class="portfolio-image">
                                        <img src="demos/freelancer/images/works/2.jpg" alt="Portfoio Item">
                                        <div class="bg-overlay">
                                            <div
                                                class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                                                <h3 class="mb-0 mt-1">Banking</h3>
                                                <h5>CHID Bank</h5>
                                            </div>
                                            <div class="bg-overlay-content align-items-start justify-content-end p-4">
                                                <div class="overlay-trigger-icon bg-dark text-white"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                                        class="icon-line-link"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-6 h-translatey-3 tf-ts">
                                <a href="http://myintthukhanadilogistics.com/" class="portfolio-item" target="_blank">
                                    <div class="portfolio-image">
                                        <img src="demos/freelancer/images/works/3.jpg" alt="Portfoio Item">
                                        <div class="bg-overlay">
                                            <div
                                                class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                                                <h3 class="mb-0 mt-1">Logistics</h3>
                                                <h5>Myintthukhanadi Co.,Ltd</h5>
                                            </div>
                                            <div class="bg-overlay-content align-items-start justify-content-end p-4">
                                                <div class="overlay-trigger-icon bg-dark text-white"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                                        class="icon-line-link"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-6 h-translatey-3 tf-ts">
                                {{-- <a href="demo-conference.html" class="portfolio-item" target="_blank"> --}}
                                <div class="portfolio-image">
                                    <img src="demos/freelancer/images/works/4.jpg" alt="Portfoio Item">
                                    <div class="bg-overlay">
                                        <div
                                            class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                                            <h3 class="mb-0 mt-1">Barber's Booking</h3>
                                            {{-- <h5>Media, Icons</h5> --}}
                                        </div>
                                        <div class="bg-overlay-content align-items-start justify-content-end p-4">
                                            {{-- <div class="overlay-trigger-icon bg-dark text-white"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                                    <i
                                                        class="icon-line-link"></i>
                                                    </div> --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- </a> --}}
                            </div>
                        </div>

                    </div>
                </div>

                <div class="clear"></div>

                <div class="section bg-transparent py-5">

                    <div class="container">
                        <div class="row align-items-end mb-5">
                            <div class="col-lg-5 offset-lg-1">
                                <h3 class="fw-bolder h1">The ways I can help you</h3>
                                <p>This is what we love to do.</p>
                            </div>
                        </div>

                        <div class="row gutter-50 mb-5 align-items-stretch">

                            <div class="col-md-4">
                                <div class="card d-flex align-items-end flex-column p-4 border-0"
                                    style="background-color: #C2DFEC;">
                                    <div class="mt-5"></div>
                                    <div class="mt-auto">
                                        <div class="card-body">
                                            <img src="demos/freelancer/images/icons/social.svg" alt="Image"
                                                class="mb-4" height="50">
                                            <h3 class="card-title fw-bolder">Website Development</h3>
                                            <p class="card-text mb-0 mt-2 fw-light">Creating a website can be a big
                                                task, but with our team of experts, we streamline the process to make it
                                                as easy as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card d-flex align-items-end flex-column p-4 border-0"
                                    style="background-color: #FADCE4">
                                    <div class="mt-5"></div>
                                    <div class="mt-auto">
                                        <div class="card-body">
                                            <img src="demos/freelancer/images/icons/wp.png" height="50" alt="Image"
                                                class="mb-4">
                                            <h3 class="card-title fw-bolder">Mobile App Development</h3>
                                            <p class="card-text mb-0 mt-2 fw-light">We turn ideas into great digital
                                                products, and develop apps that people love to use. We can help your
                                                product fly.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card d-flex align-items-end flex-column p-4 border-0"
                                    style="background-color: #E2E8D8;">
                                    <div class="mt-5"></div>
                                    <div class="mt-auto">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-4">
                                                {{-- <img src="demos/freelancer/images/icons/sketch.svg" height="50" alt="Image">
												<img src="demos/freelancer/images/icons/xd.png" height="50" alt="Image" class="ms-3"> --}}
                                                <img src="demos/freelancer/images/icons/ecommerce-icon.png" height="50"
                                                    alt="Image">
                                            </div>
                                            <h3 class="card-title fw-bolder">E-Commerce Development</h3>
                                            <p class="card-text mb-0 mt-2 fw-light">We specialize in scalable
                                                e-commerce sites, with user-friendly and integration with a range of
                                                payment systems.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="clear"></div>

                </div>

                <div class="section m-0"
                    style="background: #f1efe5 url('demos/freelancer/images/bg.svg') no-repeat right center; padding-top: 240px">
                    <div class="shape-divider" data-shape="wave-4" data-height="150" id="shape-divider-6017"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none">
                            <path class="shape-divider-fill" fill="#F8F7F2"
                                d="M0 51.76c36.21-2.25 77.57-3.58 126.42-3.58 320 0 320 57 640 57 271.15 0 312.58-40.91 513.58-53.4V0H0z"
                                opacity="0.3"></path>
                            <path class="shape-divider-fill"
                                d="M0 24.31c43.46-5.69 94.56-9.25 158.42-9.25 320 0 320 89.24 640 89.24 256.13 0 307.28-57.16 481.58-80V0H0z"
                                opacity="0.5"></path>
                            <path class="shape-divider-fill"
                                d="M0 0v3.4C28.2 1.6 59.4.59 94.42.59c320 0 320 84.3 640 84.3 285 0 316.17-66.85 545.58-81.49V0z">
                            </path>
                        </svg></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <h3 class="fw-bolder h1 my-5">Our Website
                                    Development Process</h3>
                                <div class="accordion" data-collapsible="true">

                                    <div class="accordion-header">
                                        <div class="accordion-icon">
                                            <i
                                                class="accordion-closed icon-line-plus color gradient-text gradient-red-yellow"></i>
                                            <i
                                                class="accordion-open icon-line-minus color gradient-text gradient-red-yellow"></i>
                                        </div>
                                        <div class="accordion-title">
                                            1. DISCOVERY
                                        </div>
                                    </div>
                                    <div class="accordion-content">Our team will perform research and discovery to plan
                                        and inform the phases of the project.</div>

                                    <div class="accordion-header">
                                        <div class="accordion-icon">
                                            <i
                                                class="accordion-closed icon-line-plus color gradient-text gradient-red-yellow"></i>
                                            <i
                                                class="accordion-open icon-line-minus color gradient-text gradient-red-yellow"></i>
                                        </div>
                                        <div class="accordion-title">
                                            2. WIREFRAMING
                                        </div>
                                    </div>
                                    <div class="accordion-content">Prior to prototyping the designs, we will create
                                        wireframes which plan out the structure and user flow of your website.</div>

                                    <div class="accordion-header" id="id-accordion-3">
                                        <div class="accordion-icon">
                                            <i
                                                class="accordion-closed icon-line-plus color gradient-text gradient-red-yellow"></i>
                                            <i
                                                class="accordion-open icon-line-minus color gradient-text gradient-red-yellow"></i>
                                        </div>
                                        <div class="accordion-title">
                                            3. DESIGN
                                        </div>
                                    </div>
                                    <div class="accordion-content">In a collaborative process from end-to-end, the
                                        design of the website is created from scratch in Photoshop.</div>

                                    <div class="accordion-header" id="id-accordion-4">
                                        <div class="accordion-icon">
                                            <i
                                                class="accordion-closed icon-line-plus color gradient-text gradient-red-yellow"></i>
                                            <i
                                                class="accordion-open icon-line-minus color gradient-text gradient-red-yellow"></i>
                                        </div>
                                        <div class="accordion-title">
                                            4. DEVELOPMENT
                                        </div>
                                    </div>
                                    <div class="accordion-content">The final designs from the design phase are used to
                                        develop a web version of the site on our staging server.</div>

                                    <div class="accordion-header" id="id-accordion-5">
                                        <div class="accordion-icon">
                                            <i
                                                class="accordion-closed icon-line-plus color gradient-text gradient-red-yellow"></i>
                                            <i
                                                class="accordion-open icon-line-minus color gradient-text gradient-red-yellow"></i>
                                        </div>
                                        <div class="accordion-title">
                                            5. CONTENT
                                        </div>
                                    </div>
                                    <div class="accordion-content">The website functionality is developed and content
                                        is populated as outlined within the project spec.</div>

                                    <div class="accordion-header" id="id-accordion-6">
                                        <div class="accordion-icon">
                                            <i
                                                class="accordion-closed icon-line-plus color gradient-text gradient-red-yellow"></i>
                                            <i
                                                class="accordion-open icon-line-minus color gradient-text gradient-red-yellow"></i>
                                        </div>
                                        <div class="accordion-title">
                                            6. TESTING
                                        </div>
                                    </div>
                                    <div class="accordion-content">The website undergoes a full Q&A and
                                        interoperability testing procedure, ensuring optimal performance.</div>

                                </div>
                            </div>

                            <div class="col-lg-7">
                                <img src="demos/freelancer/images/ask.svg" alt="FAQs" class="px-5">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

            </div>

        </section><!-- #content end -->

        <!-- Footer
  ============================================= -->
        <footer id="footer" class="border-0" style="background-color: #C9D6CF;">

            <div class="container">
                <div class="footer-widgets-wrap  m-0">

                    <div class="row justify-content-between">

                        <div class="col-md-4">
                            <div class="widget">

                                <h3 class="h1 mb-5">Let's Collaborate</h3>
                                <span class="text-black-50">We’d love to hear about your next project and show you how
                                    we can help.</span>
                                <a href="tel:09777425147" class="h4 text-dark mt-5 mb-4 d-block"><u>09-777425147</u> <i
                                        class="icon-line-arrow-right position-relative ms-2" style="top: 3px"></i></a>
                                <div>
                                    <a href="https://www.facebook.com/mymartech"
                                        class="social-icon si-small si-colored si-facebook" target="_blank">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="mailto:hponemahn@gmail.com"
                                        class="social-icon si-small si-colored si-instagram" target="_blank">
                                        <i class="icon-mail"></i>
                                        <i class="icon-mail"></i>
                                    </a>
                                    {{-- <a href="http://youtube.com/semicolonweb" class="social-icon si-small si-colored si-youtube" target="_blank">
										<i class="icon-youtube"></i>
										<i class="icon-youtube"></i>
									</a>
									<a href="#" class="social-icon si-small si-colored si-flattr">
										<i class="icon-flattr"></i>
										<i class="icon-flattr"></i>
									</a> --}}
                                </div>

                            </div>
                        </div>

                        <div class="col-md-5 custom-margin-top">
                            <h3 class="h1 mb-5">Tell us about your next project!</h3>
                            <div class="form-widget" data-loader="button" data-alert-type="inline">

                                {{-- <div class="form-result message-alert"></div> --}}
                                <div class="message-alert"></div>

                                <form class="row mb-0" id="landing-enquiry" action="" method="post"
                                    enctype="multipart/form-data">

                                    @csrf

                                    <div class="form-process"></div>
                                    <div class="col-12 form-group mb-4">
                                        <label>What is Your Name:</label>
                                        <input type="text" name="name" id="name"
                                            class="form-control border-form-control required" value="">
                                    </div>
                                    <div class="col-12 form-group mb-4">
                                        <label>Your Phone Number Please:</label>
                                        <input type="text" name="phone" id="phone"
                                            class="form-control border-form-control phone required" value=""
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    </div>
                                    <div class="col-12 form-group mb-4">
                                        <label>Tell more about your Project:</label>
                                        <textarea name="message" id="message" class="form-control border-form-control"
                                            cols="10" rows="3"></textarea>
                                    </div>
                                    <div class="col-12 d-none">
                                        <input type="text" id="botcheck" name="botcheck" value="" />
                                    </div>
                                    <div class="col-12">
                                        {{-- <button type="submit" name="submit"
                                            class="button h-translatey-3 bg-dark rounded-pill inquiry-submit"><i
                                                class="icon-line-arrow-right m-0"></i></button> --}}

                                        <input type="submit" name="submit" value="Send Message"
                                            class="button h-translatey-3 bg-dark rounded-pill">
                                    </div>

                                    {{-- <input type="hidden" name="prefix" value=""> --}}
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="icon-double-angle-up bg-white text-dark rounded-circle shadow"></div>

    <!-- External JavaScripts
 ============================================= -->
    <script src="{{ asset('asset/mymar/jquery.js') }}"></script>
    <script src="{{ asset('asset/mymar/plugins.min.js') }}"></script>

    <!-- Footer Scripts
 ============================================= -->
    <script src="{{ asset('asset/mymar/functions.js') }}"></script>

    <script>
        // Owl Carousel Scripts
        jQuery(window).on('pluginCarouselReady', function() {
            $('#oc-services').owlCarousel({
                items: 1,
                margin: 30,
                nav: false,
                dots: true,
                smartSpeed: 400,
                responsive: {
                    576: {
                        stagePadding: 30,
                        items: 1
                    },
                    768: {
                        stagePadding: 30,
                        items: 2
                    },
                    991: {
                        stagePadding: 150,
                        items: 3
                    },
                    1200: {
                        stagePadding: 150,
                        items: 3
                    }
                },
            });
        });

        $("#landing-enquiry").submit(function(e) {

            if ($('.phone').val().length >= 8 && $('.phone').val().length <= 11) {

                var form = $(this);
                // var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: '{{ url('/inquiry') }}',
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {

                        $(".message-alert").html(
                            '<div class="alert alert-info" style="background-color: #f26522;"><strong>Success!</strong> Your message has been sent successfully.</div>'
                        );

                        $('#landing-enquiry')[0].reset();
                    }
                });

                e.preventDefault(); // avoid to execute the actual submit of the form.
            } else {

                $(".message-alert").html(
                    '<div class="alert alert-danger" style="color: #721c24;">Your phone number is invalid.</div>'
                );

                return false;
            }
        });
    </script>

</body>

</html>
