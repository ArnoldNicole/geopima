@extends('layouts.website')

@section('content')
<main>
    <!-- contact area start -->
    <div class="contact-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 order-2 order-lg-1">

                    <!-- <iframe width="100%" height="300px" src="https://maps.google.com/maps?q=Behind%20Equity%20Bank,%20Kwale%20-%20Kinango%20Road&t=&z=17&ie=UTF8&iwloc=&output=embed"></iframe> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d673.6217526912238!2d39.45357951292053!3d-4.174587143883348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x432bb17d8bc8bcf8!2zNMKwMTAnMjguNiJTIDM5wrAyNycxMy4wIkU!5e1!3m2!1sen!2ske!4v1639213003599!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="contact-message">
                        <h2 class="h1 title contact-title">Tell Us Your Project</h2>
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Success! </strong>{{session()->get('success')}}
                        </div>
                        @endif
                        @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Error! </strong>{{session()->get('error')}}
                        </div>
                        @endif
                        <form id="contact-form" action="{{route('contact.send')}}" method="post" class="contact-form">
                            <div class="row">
                                @csrf
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label for="name">Full Names</label>
                                    <input name="name" id="name" placeholder="Name *" value="{{@old('name')}}" type="text" required>
                                    @error('name') <p class="form-messege text-danger">{{$message}} @enderror </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label for="phone_number">Phone Number</label>
                                    <input name="phone_number" placeholder="Phone *" value="{{@old('phone_number')}}" type="text" required>
                                    @error('phone_number') <p class="form-messege text-danger">{{$message}} @enderror </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label for="email">Email Address</label>
                                    <input name="email" id="email" placeholder="Email *" value="{{@old('email')}}" type="text" required>
                                    @error('email') <p class="form-messege text-danger">{{$message}} @enderror </p>

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label for="subject">Subject</label>
                                    <!-- <input name="subject" id="subject" placeholder="Subject *" value="{{@old('subject')}}" type="text"> -->
                                    <select class="custom-select @error('subject') is-invalid  @enderror" id="subject" name="subject" required>
                                        <option value="" disabled>Select Desired Service</option>
                                        <option value="I am interested in your mapping services">Mapping</option>
                                        <option value="I am interested in  Boundaries Identification service">Boundaries Identification</option>
                                        <option value="I am interested in your sub division of plots service">Sub division of plots</option>
                                        <option value="I am interested in your parcel location service">{{strtolower('PARCEL LOCATION')}}</option>
                                        <option value="I am interested in your rectifying poorly mapped features service">{{strtolower('RECTIFYING POORLY MAPPED FEATURES')}}</option>
                                        <option value="I am interested in your training service">Training</option>
                                        <option value="I need some other service from you">Other</option>
                                    </select>
                                    @error('subject') <p class="form-messege text-danger">{{$message}} @enderror </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    @php
                                    $a = random_int(1,9);
                                    $b = random_int(0,9);
                                    $c = $a+$b;
                                    @endphp
                                    <label for="security_quiz">Security Question: What is {{$a}} + {{$b}}</label>
                                    <input id="security_quiz" name="security_quiz" placeholder="{{$c}}" type="number">
                                    <input type="hidden" name="response" value="{{$c}}">
                                </div>
                                <div class="col-12">
                                    <div class="contact2-textarea text-center">
                                        @error('message') <p class="form-messege">{{$message}} @enderror </p>
                                        <textarea placeholder="Message *" name="message" class="form-control2" required="">{{@old('message')}}</textarea>
                                    </div>
                                    <div class="contact-btn">
                                        <button class="btn btn-all" type="submit">Send Message</button>
                                    </div>
                                </div>
                                <div class="col-6 d-flex justify-content-center">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="contact-information">
                        <h2 class="h1 title contact-title">Contact Us</h2>
                        <p>You can alternatively use our contact details below. Our Support team will get back to you as soon as possible.
                        </p>
                        <ul>
                            <li><i class="fa fa-fax"></i> Address : Kwale, Kinango Road Behind Equity Bank, Kenya</li>
                            <li><i class="fa fa-envelope-o"></i> E-mail: <a href="mailto:support@geopima.com" target="_blank">support@geopima.com</a></li>
                            <li><i class="fa fa-phone"></i>Phone:<a href="tel:+254729793626" target="_blank">+254729793626 </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->
</main>
@endsection