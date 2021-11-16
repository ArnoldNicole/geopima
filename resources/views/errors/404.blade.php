@extends('layouts.website')

@section('content')
<main>
    <!-- 404 area start -->
    <div class="main-content-wrapper section-padding">
        <div class="container">
            <div class="section-bg-color pt-50 pb-50">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 text-center">
                        <div class="error">
                            <h1>404</h1>
                            <h2>OPPS! PAGE NOT BE FOUND</h2>
                            <p>Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarity unavailable.</p>
                            <!-- <form action="404.html#" class="searchform mb-50">
                                <input type="text" name="search" id="error_search" placeholder="Search..." class="searchform__input">
                                <button type="submit" class="searchform__submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form> -->
                            <a href="/" class="btn btn-all">Back to Home Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 area end -->

</main>
@endsection