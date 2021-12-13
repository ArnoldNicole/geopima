@extends('layouts.website')

@section('content')
<main>
    <!-- hero slider section start -->
    <section class="hero-slider hero-transparent-bg gray-bg fix">
        <div class="hero-slider-active slick-arrow-style  slick-dot-style">
            <!-- single slider item start -->
            <div class="hero-single-slide">
                <div class="hero-slider-item">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-sm-6">
                                <div class="hero-slider-content">
                                    <h1 class="slide-title">GEOPIMA Limited</h1>
                                    <h4>Do Not Go For Less, Get The Best</h4>
                                    <a href="#policy-area" class="btn btn-hero">Read More</a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-sm-6">
                                <div class="slider-thumb moving-vertical">
                                    <img src="/assets/img/geopima.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->

            <!-- single slider item start -->
            <div class="hero-single-slide">
                <div class="hero-slider-item">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-sm-6">
                                <div class="hero-slider-content">
                                    <h1 class="slide-title">Great Plan to increase your Business</h1>
                                    <a href="about.html" class="btn btn-hero">Read More</a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-sm-6">
                                <div class="slider-thumb moving-vertical">
                                    <img src="/latest/assets/img/slider/slider-thumb2.png" alt="slider thumb">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->
        </div>
    </section>
    <!-- hero slider section end -->


    <!-- Mission and Vision Section -->
    <!-- blog section start -->
    <section class="blog-area section-padding">
        <div class="container">
            <div class="row mtn-40 justify-content-center">
                <!-- blog single post start -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item mt-40">
                        <div class="blog-thumb">
                            <a href="#">
                                <img src="/assets/img/mission.png" height="100px" width="100px" alt="blog thumb" class="rounded-circle">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title">
                                <a href="{{route('about')}}">Mission Statement</a>
                            </h3>
                            <p>To be the OUTSTANDING multi-disciplined surveying practice in KWALE COUNTY , NATIONALLY AND GLOBALLY&nbsp;through superior client service, innovation and commitment and to be a great Firm to work for.</p>

                        </div>
                    </div>
                </div>
                <!-- blog single post start -->

                <!-- blog single post start -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item mt-40">
                        <div class="blog-thumb">
                            <a href="#">
                                <img src="/assets/img/vision.png" height="100px" width="100px" alt="blog thumb" class="rounded-circle">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title">
                                <a href="{{route('about')}}">Our Vision</a>
                            </h3>
                            <p>Leader in providing the best surveying and geospatial solutions that exceed our clients’ expectations.</p>

                        </div>
                    </div>
                </div>
                <!-- blog single post start -->

            </div>
        </div>
    </section>

    <!-- service policy start -->
    <section id="policy-area" class="policy-area section-padding pb-125 fix wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">

        <div class="container">
            <div class="row mtn-30">
                <!-- single item strat -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-policy-item mt-30">
                        <div class="service-policy-icon">
                            <img src="/latest/assets/img/icon/icon-1.png" alt="icon">
                        </div>
                        <h3 class="service-policy-title">Land Surveying Services</h3>
                        <p class="service-policy-desc">We provide all kinds of land surveying services which include: Land subdivisions, Title deed processing, Cadastral surveys, Land transfer, identification and beaconing of the plot boundaries</p>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item strat -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-policy-item mt-30">
                        <div class="service-policy-icon">
                            <img src="/latest/assets/img/icon/icon-2.png" alt="icon">
                        </div>
                        <h3 class="service-policy-title">Investment</h3>
                        <p class="service-policy-desc">Investments help us take on complex and challenging projects to accommodate the varied surveying needs of our clients</p>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item strat -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-policy-item mt-30">
                        <div class="service-policy-icon">
                            <img src="/latest/assets/img/icon/icon-3.png" alt="icon">
                        </div>
                        <h3 class="service-policy-title">Support</h3>
                        <p class="service-policy-desc">Geopima Limited was established to be an active supporting Land surveyors for the fast-moving Surveying and mapping industry.</p>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item strat -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-policy-item mt-30">
                        <div class="service-policy-icon">
                            <img src="/latest/assets/img/icon/icon-4.png" alt="icon">
                        </div>
                        <h3 class="service-policy-title">What we believe in</h3>
                        <p class="service-policy-desc">Geopima strongly believes that positive attitudes, good coordination among its different departments and safe working conditions are essential elements in meeting the requirements and expectations of our client.</p>
                    </div>
                </div>
                <!-- single item end -->
            </div>
        </div>
    </section>
    <!-- service policy end -->

    <!-- about section start -->
    <section class="about-wrapper-area section-padding pt-0 fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="about-thumb moving-vertical">
                        <img src="/latest/assets/img/about/about-1.png" alt="about thumb">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="about-inner">
                        <h2 class="h1 title"><span>We Provide</span> the Best <br> Solutions <span>For All</span> <br>your needs</h2>
                        <h3 class="subtitle">We Create exclusive ways to solve our customer needs</h3>

                        <p> Geopima Company Limited Land Surveyors, is a fully professional surveying firm that was incorporated in 2018. The company has two directors, Humphrey Kubai and David Nyale. Currently the company has two assistant surveyors and subordinate staff.&nbsp;<br>
                        <p>we are one of the leading land surveying firms, we hold an impressive track record in the provision of all types of surveying services in the whole Kwale County.</p>
                        <a href="{{route('contact')}}" class="btn btn-all">Let's Start</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- service section start -->
    <section class="service-wrapper gray-bg section-padding fix">
        <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="h1 title">Services that we provide</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mtn-65">
                <div class="col-lg-3 service-list-left">
                    <div class="service-item mt-65">
                        <div class="service-icon">
                            <img src="/latest/assets/img/icon/1.png" alt="service icon">
                            <h3 class="service-title"><a href="service-details.html">Mapping</a></h3>
                            <p>Plotting the coordinates for the plots picked using Rtk in AutoCAD to come up with its shape</p>
                        </div>
                    </div>
                    <div class="service-item mt-65">
                        <div class="service-icon">
                            <img src="/latest/assets/img/icon/4.png" alt="service icon">
                            <h3 class="service-title"><a href="service-details.html">{{ucfirst('Parcel Location')}}</a></h3>
                            <p>You Don't know where your land is situated?</p>
                        </div>
                    </div>
                    <div class="service-item mt-65">
                        <div class="service-icon">
                            <img src="/latest/assets/img/icon/3.png" alt="service icon">
                            <h3 class="service-title"><a href="service-details.html">Rectifying Poorly Mapped Features</a></h3>
                            <p>Sometimes there might be errors when the previous surveys were being performed. We can do a resurvey for poorly surveyed land for further action</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-3 order-lg-2">
                    <div class="servivce-middle-thumb mt-65 moving-vertical">
                        <img src="/latest/assets/img/service/service.png" alt="service thumb">
                    </div>
                </div>
                <div class="col-lg-3 order-2 order-lg-3 service-list-right">
                    <div class="service-item mt-65">
                        <div class="service-icon">
                            <img src="/latest/assets/img/icon/2.png" alt="service icon">
                            <h3 class="service-title"><a href="service-details.html">Subdivision of plots</a></h3>
                            <p>taking one tract of land and dividing it into two or more tracts of land. </p>
                        </div>
                    </div>
                    <div class="service-item mt-65">
                        <div class="service-icon">
                            <img src="/latest/assets/img/icon/5.png" alt="service icon">
                            <h3 class="service-title"><a href="service-details.html">Training</a></h3>
                            <p>The company gives adequate on job training to its employees to keep them updated with the current trends in technology for the best output</p>
                        </div>
                    </div>
                    <div class="service-item mt-65">
                        <div class="service-icon">
                            <img src="/latest/assets/img/icon/6.png" alt="service icon">
                            <h3 class="service-title"><a href="service-details.html">Boundaries identification</a></h3>
                            <p>The property boundaries are determined by through various techniques depending on the nature of the work</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->

    <!-- choose us & cta start -->
    <section class="cta-area section-padding pb-125 fix">
        <div class="container">
            <div class="row align-items-xl-center">
                <div class="col-xl-5 col-lg-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="choose-item-wrapper">
                        <h2 class="h1 title"><span>People</span> Choose us <br> Because <span>we Provide</span><br> great Surveying Solutions</h2>
                        <!-- choose single item start -->
                        <div class="choose-item">
                            <h3 class="choose-item-title">Find the actual problems</h3>
                            <!-- <p>Ideas es to obtain pain of itself, because it is pain, but because occasionallyght ocean he Internet tend to repeat predefined chunk's as necessary with some of themoment</p> -->
                        </div>
                        <!-- choose single item end -->
                        <div class="choose-item">
                            <h3 class="choose-item-title">Proper steps for solutions</h3>
                            <!-- <p>Ideas es to obtain pain of itself, because it is pain, but because occasionallyght ocean he Internet tend to repeat predefined chunk's as necessary with some of themoment</p> -->
                        </div>
                        <!-- choose single item end -->
                        <div class="choose-item">
                            <h3 class="choose-item-title">Beneficial strategies</h3>
                            <!-- <p>Ideas es to obtain pain of itself, because it is pain, but because occasionallyght ocean he Internet tend to repeat predefined chunk's as necessary with some of themoment</p> -->
                        </div>
                        <!-- choose single item end -->
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 offset-xl-1 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="cta-wrapper">
                        <h2 class="h1 title">Have <span>Surveying </span> needs? <br> Just dial us with no <span>hesitaion</span><br> we have <span>expert</span> team </h2>
                        <a href="tel:+254729793626" class="call">+254( 729)793 626</a> <br>
                        <a href="tel:+254707151860" class="call" target="_blank">+254 (707) 151 860 | Humphrey</a>
                        <img src="/latest/assets/img/cta/cta.png" class="cta-thumb moving-vertical w-100" alt="cta thumb">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose us & cta end -->

    <!-- team section start -->
    <section class="team-wrapper team-wrapper--style_1 pt-0 section-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 order-2 order-xl-1">
                    <div class="row team-member-inner">
                        <div class="col-xl-auto col-sm-3 col-6 flex-grow-1">
                            <div class="team-member team-member--hover-effect mt-40">
                                <div class="team-member-info">
                                    <h5 class="team-member-name"><a href="#team-details.html">Humphrey Kubai</a></h5>
                                    <h6 class="team-member-desig">Chief Executive</h6>
                                </div>
                                <img src="/latest/assets/img/team/team-1.png" alt="team member">
                            </div>
                        </div>
                        <div class="col-xl-auto col-sm-3 col-6 flex-grow-1">
                            <div class="team-member team-member--hover-effect mt-40">
                                <div class="team-member-info">
                                    <h5 class="team-member-name"><a href="#team-details.html">David Nyale</a></h5>
                                    <h6 class="team-member-desig">Director</h6>
                                </div>
                                <img src="/latest/assets/img/team/team-3.png" alt="team member">
                            </div>
                        </div>
                        <div class="col-xl-auto col-sm-3 col-6 flex-grow-1">
                            <div class="team-member team-member--hover-effect mt-40">
                                <div class="team-member-info">
                                    <h5 class="team-member-name"><a href="#team-details.html">Claudia Wanjiru</a></h5>
                                    <h6 class="team-member-desig">Geologist</h6>
                                </div>
                                <img src="/latest/assets/img/team/team-2.png" alt="team member">
                            </div>
                        </div>
                        <div class="col-xl-auto col-sm-3 col-6 flex-grow-1">
                            <div class="team-member team-member--hover-effect mt-40">
                                <div class="team-member-info">
                                    <h5 class="team-member-name"><a href="#team-details.html">Arnold Nyaga</a></h5>
                                    <h6 class="team-member-desig">Developer</h6>
                                </div>
                                <img src="/latest/assets/img/team/team-4.png" alt="team member">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 order-1 order-xl-2">
                    <div class="team-content about-inner ">
                        <h2 class="h1 title">We have <span>Creative</span> Team<br> <span>Discover</span> our experts</h2>
                        <h3 class="subtitle">We create exclusive ways to solve your surveying needs</h3>

                        <a href="{{route('contact')}}" target="_blank" class="btn btn-all">Talk to us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team section end -->

    <!-- testimonial section start -->
    <section class="testimonial-wrapper gray-bg section-padding fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5 order-2 order-lg-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="testimonial-inner">
                        <h2 class="h1 title">What <span>Client’s</span> say <br> happy reviews </h2>
                        <div class="testimonial-carousel-active slick-arrow-style">
                            <!-- testimonial single item start -->
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <p><i class="fa fa-quote-left"></i>Best services when it comes to mapping.<i class="fa fa-quote-right"></i></p>
                                    <h5 class="client-name">Arnold Wamae</h5>
                                    <h6 class="client-desig">DEVELOPER , RAOSYS</h6>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <p><i class="fa fa-quote-left"></i>Best services when it comes to mapping.<i class="fa fa-quote-right"></i></p>
                                    <h5 class="client-name">Claudia Wanjiru</h5>
                                    <h6 class="client-desig">Blogger , ClaudiaWanjiru.com</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 offset-xl-1 order-1 order-lg-2 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="testimonial-thumb moving-vertical">
                        <img src="/latest/assets/img/testimonial/testimonial.png" alt="testimonial thumb">
                        <caption>Title Deed processing in progress</caption>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->


    <!-- brand logo section start -->
    <!-- <section class="brand-logo-wrapper section-padding fix wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="sr-only">brand logo</h2>
                    <div class="brand-logo-carousel">
                        <div class="brand-item">
                            <a href="index.html#">
                                <img src="/latest/assets/img/brand-logo/brand-logo1.png">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="index.html#">
                                <img src="/latest/assets/img/brand-logo/brand-logo2.png">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="index.html#">
                                <img src="/latest/assets/img/brand-logo/brand-logo3.png">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="index.html#">
                                <img src="/latest/assets/img/brand-logo/brand-logo4.png">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="index.html#">
                                <img src="/latest/assets/img/brand-logo/brand-logo2.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- brand logo section end -->
</main>

@endsection