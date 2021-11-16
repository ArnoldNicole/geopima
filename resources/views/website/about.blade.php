@extends('layouts.website')

@section('content')

<main>
    <!-- about section start -->
    <section class="about-wrapper-area section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="about-inner">
                        <h2 class="h1 title"><span>We Provide</span> the Best <br> Solutions <span>For All</span> <br>your needs</h2>
                        <h3 class="subtitle">We Create exclusive ways to solve our customer needs</h3>
                        <p>we are one of the leading land surveying firms, we hold an impressive track record in the provision of all types of surveying services in the whole Kwale County.</p>
                        <a href="{{route('contact')}}" class="btn btn-all">Let's Start</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 order-1 order-lg-2">
                    <div class="about-thumb">
                        <img src="/latest/assets/img/about/about-1.png" class="moving-vertical" alt="about thumb">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- fun fact section start -->
    <section class="funfacts-section gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title section-title--style_2 text-center">
                        <h2 class="h1 title">Sucessfully <span>completed</span> 2100+ <span>projects</span> with numbers of satisfied client</h2>
                    </div>
                </div>
            </div>
            <div class="row mtn-40">
                <div class="col-md-3 col-sm-6">
                    <div class="counterup-item mt-40">
                        <span class="odometer h1" data-count="10"></span>
                        <h5>Satisfied Clients</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counterup-item mt-40">
                        <span class="odometer h1" data-count="20"></span>
                        <h5>Completed Projects</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counterup-item mt-40">
                        <span class="odometer h1" data-count="30"></span>
                        <h5>Cup Coffee</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counterup-item mt-40">
                        <span class="odometer h1" data-count="2"></span>
                        <h5>Awards Winning</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fun fact section end -->

    <!-- team section start -->
    <section class="team-wrapper section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 order-2 order-xl-1">
                    <div class="row team-member-inner mtn-40">
                        <div class="col-xl-auto col-sm-3 flex-grow-1">
                            <div class="team-member mt-40 active">
                                <div class="team-member-info">
                                    <h5 class="team-member-name">Humphrey Kubai</h5>
                                    <h6 class="team-member-desig">Director</h6>
                                </div>
                                <img src="/latest/assets/img/team/team-1.png" alt="team member">
                            </div>
                        </div>
                        <div class="col-xl-auto col-sm-3 flex-grow-1">
                            <div class="team-member mt-40">
                                <div class="team-member-info">
                                    <h5 class="team-member-name">David Nyale</h5>
                                    <h6 class="team-member-desig">Director</h6>
                                </div>
                                <img src="/latest/assets/img/team/team-3.png" alt="team member">
                            </div>
                        </div>
                        <div class="col-xl-auto col-sm-3 flex-grow-1">
                            <div class="team-member mt-40">
                                <div class="team-member-info">
                                    <h5 class="team-member-name">Claudia Wanjiru</h5>
                                    <h6 class="team-member-desig">Geologist</h6>
                                </div>
                                <img src="/latest/assets/img/team/team-2.png" alt="team member">
                            </div>
                        </div>
                        <div class="col-xl-auto col-sm-3 flex-grow-1">
                            <div class="team-member mt-40">
                                <div class="team-member-info">
                                    <h5 class="team-member-name">Arnold Wamae</h5>
                                    <h6 class="team-member-desig">Developer</h6>
                                </div>
                                <img src="/latest/assets/img/team/team-4.png" alt="team member">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 order-1 order-xl-2">
                    <div class="team-content team-content--style_2 about-inner">
                        <h2 class="h1 title">We have an<span>Ambitious</span> Team<br> <span>Discover</span> our exerts</h2>
                        <h3 class="subtitle">Create some exclusive way to solve our customer problems</h3>
                        <!-- <p>labore et dolore magnam aliquam quaerat voluptatem. Ut enim <br> ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam</p> -->
                        <a href="{{route('contact')}}" class="btn btn-all">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team section end -->

    <!-- service policy start -->
    <section class="policy-area pb-125">
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
                                    <h5 class="client-name">Claudia Wanjiru</h5>
                                    <h6 class="client-desig">Blogger , ClaudiaWanjiru.com</h6>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <p><i class="fa fa-quote-left"></i>Best services when it comes to mapping.<i class="fa fa-quote-right"></i></p>
                                    <h5 class="client-name">Arnold Wamae</h5>
                                    <h6 class="client-desig">DEVELOPER , RAOSYS</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 offset-xl-1 order-1 order-lg-2 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="testimonial-thumb moving-vertical">
                        <img src="/latest/assets/img/testimonial/testimonial.png" alt="testimonial thumb">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->
</main>

@endsection