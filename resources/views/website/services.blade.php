@extends('layouts.website')

@section('content')

<main class="page">
    <section class="projects-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">OUR SERVICES</h2>
                <p class="text-center">Our wide range of services include;</p>
            </div>
            <div class="row projects">
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets/img/desk.jpg">
                    <h3 class="name">MAPPING</h3>
                    <p class="description">This is the representation of objects on the earth surface in 2D or 3D, to define its position.<br>For example, plotting the coordinates for the plots picked using Rtk in AutoCAD to come up with its shape or contouring to obtain three dimension features like slope using civil 3d AutoCAD.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets/img/building.jpg">
                    <h3 class="name">Boundaries Identification</h3>
                    <p class="description">The property boundaries are determined by through various techniques depending on the nature of the work. i.e general boundaries and fixed boundaries.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets/img/loft.jpg">
                    <h3 class="name">SUB-DIVISION Of PLOTS</h3>
                    <p class="description">involves taking one tract of land and dividing it into two or more tracts of land. This may range in sizes from 1/8 of acre to 1000s of acres. The subdivided plot is drawn on mutation forms for the subdivision process to be complete, then new titles are processed, for the subdivided parcel of land</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets/img/minibus.jpeg">
                    <h3 class="name">PARCEL LOCATION</h3>
                    <p class="description">You Don't know where your land is situated?, We are able to perform this successfully by locating the land</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets/img/minibus.jpeg">
                    <h3 class="name">RECTIFYING PORLY MAPPED FEATURES</h3>
                    <p class="description">Sometimes there might be errors when the previous surveys were being performed. We can do a resurvey for poorly surveyed land for further action</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets/img/minibus.jpeg">
                    <h3 class="name">TRAINING</h3>
                    <p class="description">The company gives adequate on job training to its employees to keep them updated with the current trends in technology for the best output</p>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection