<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> | GEOPIMA</title>
    <meta name="twitter:description" content="We provide all kinds of land surveying services which include: Land subdivisions, Title deed processing, Cadastral surveys, Land transfer,  identification and beaconing of the plot boundaries, engineering surveys, pipeline surveys, power line surveys, topographic surveys ,Hire and sale of Land survey equipment (RTK ,Total station, levels etc.) and consulting services to a wide range of clients, including multinational corporations, Contractors, Subcontractors, and government bodies. Geopima Limited has stayed abreast in technology by making hefty investments in robotic high-precision total stations with reflector less capabilities, GNSS receivers, and state of the art UAVs (unmanned aerial vehicles) equipment.
&nbsp;
">
    <meta name="twitter:image" content="assets/img/geopima.png">
    <meta property="og:image" content="assets/img/geopima.png">
    <meta name="description" content="Geopima Company Limited Land Surveyors, is a fully professional surveying firm that was incorporated in 2018.">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GEOPIMA LTD">
    <link rel="icon" type="image/png" sizes="482x493" href="assets/img/geopima.png">
    <link rel="icon" type="image/png" sizes="482x493" href="assets/img/geopima.png">
    <link rel="icon" type="image/png" sizes="482x493" href="assets/img/geopima.png">
    <link rel="icon" type="image/png" sizes="482x493" href="assets/img/geopima.png">
    <link rel="icon" type="image/png" sizes="482x493" href="assets/img/geopima.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" id="top">
        <div class="container"><a class="navbar-brand logo" href="#">GEOPIMA</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('welcome')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('services')}}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="">Home</a></li>
                        <!-- <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li> -->
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="{{route('about')}}">Company Information</a></li>
                        <!-- <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li> -->
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <!-- <li><a href="#">FAQ</a></li> -->
                        <li><a href="route('contact')">Help desk</a></li>
                        <!-- <li><a href="#">Forums</a></li> -->
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© {{\Carbon\Carbon::now()->year}} GEOPIMA LTD</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>