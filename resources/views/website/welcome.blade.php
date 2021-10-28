@extends('layouts.website')

@section('content')

<main class="page landing-page">
    <section class="clean-block clean-hero" style="color: rgba(9, 162, 255, 0.85);background: url(&quot;assets/img/geopima.png&quot;) repeat-x;background-size: cover;">
        <div class="text">
            <h2>GEOPIMA LTD
                <div class="caption v-middle text-center">
                    <h1 class="cd-headline clip">
                        <span class="blc">We | </span>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Survey.</b>
                            <b>Invest.</b>
                            <b>Believe.</b>
                        </span>
                    </h1>
                </div>
            </h2>
            <p>Geopima Company Limited Land Surveyors, is a fully professional surveying firm that was incorporated in 2018</p><a class="btn btn-outline-light btn-lg" role="button" href="about-us.html">Learn More</a>
        </div>
    </section>
    <section class="clean-block features m-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 feature-box">
                    <h2 class="text-center"><strong>MISSION</strong></h2>
                    <h4 class="lead">To be the OUTSTANDING multi-disciplined surveying practice in KWALE COUNTY , NATIONALLY AND GLOBALLY&nbsp;through superior client service, innovation and commitment and to be a great Firm to work for.</h4>
                </div>
                <div class="col-md-6 feature-box">
                    <h2 class="text-center text-info"><strong>VISION</strong></h2>
                    <h4 class="lead">Leader in providing the best surveying and geospatial solutions that exceed our clients’ expectations.</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block clean-info dark">
        <div class="container-fluid">
            <div class="block-heading">
                <h2 class="text-info">Know more about GEOPIMA</h2>
                <p class="lead">We provide all kinds of land surveying services which include: Land subdivisions, Title deed processing, Cadastral surveys, Land transfer,&nbsp;identification and beaconing of the plot boundaries, engineering surveys, pipeline surveys, power line surveys, topographic surveys ,Hire and sale of Land survey equipment (RTK ,Total station, levels etc.) and consulting services to a wide range of clients, including multinational corporations, Contractors, Subcontractors, and government bodies. Geopima Limited has stayed abreast in technology by making hefty investments in robotic high-precision total stations with reflector less capabilities, GNSS receivers, and state of the art UAVs (unmanned aerial vehicles) equipment.<br><br></p>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6"><img class="img-thumbnail" src="assets/img/scenery/image5.jpg"></div>
                <div class="col-md-6">
                    <div class="getting-started-info">
                        <p>Such investment has enabled Geopima Limited to take on complex and challenging projects to accommodate the varied surveying needs of our clients. Currently we are&nbsp;one of the leading land surveying firms, we hold an impressive track record in the provision of all types of surveying services in the whole Kwale County.<br><br></p>
                    </div><a class="btn btn-outline-primary btn-lg" role="button" data-toggle="tooltip" data-bss-tooltip="" href="{{route('contact')}}" title="Click to talk to one of us">Talk To Us</a>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block slider dark">
        <div class="container">
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/scenery/image1.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/image4.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/image6.jpg" alt="Slide Image"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>
    <section class="clean-block about-us"></section>
</main>

@endsection