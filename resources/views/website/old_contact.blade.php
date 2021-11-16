@extends('layouts.website')

@section('content')
<main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Contact Us</h2>
                <p>Ask your questions, request quotations, let us help you; by filling the form below.</p>
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
            </div>
            <form class="text-left text-muted visible" action="{{route('contact.send')}}" method="post">
                @csrf
                <div class="form-group"><label for="name">Name
                        @error('name')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </label><input class="form-control @error('name') is-invalid @enderror" type="text" id="name" value="{{@old('name')}}" name="name" required autocomplete="phone_number">
                </div>
                <div class="form-group"><label for="phone_number">Phone Number
                        @error('phone_number')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </label><input class="form-control @error('phone_number') is-invalid @enderror" type="text" placeholder="0XXXXXXXXX" value="{{@old('phone_number')}}" id="phone_number" name="phone_number" required>
                </div>
                <div class="form-group"><label for="subject">Subject
                        @error('subject')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </label>
                    <select class="form-control @error('subject') is-invalid  @enderror" type="text" id="subject" name="subject" required>
                        <option value="" disabled>Select Desired Service</option>
                        <option value="I am interested in your mapping services">Mapping</option>
                        <option value="I am interested in  Boundaries Identification service">Boundaries Identification</option>
                        <option value="I am interested in your sub division of plots service">Sub division of plots</option>
                        <option value="I am interested in your parcel location service">{{strtolower('PARCEL LOCATION')}}</option>
                        <option value="I am interested in your rectifying poorly mapped features service">{{strtolower('RECTIFYING POORLY MAPPED FEATURES')}}</option>
                        <option value="I am interested in your training service">{{strtolower('TRAINING')}}</option>
                        <option value="I need some other service from you">Other</option>
                    </select>
                </div>
                <div class="form-group"><label for="email">Email
                        @error('email')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </label><input class="form-control @error('email') is-invalid @enderror" type="email" value="{{@old('email')}}" id="email" name="email" required>
                </div>
                <div class="form-group"><label for="message">Message
                        @error('message')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </label><textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" required>
                    {{@old('message')}}
                    </textarea></div>
                <div class="form-group"><label for="security_quiz">Security Question: What is @php
                        $a = random_int(1,9);
                        $b = random_int(0,9);
                        $c = $a+$b;

                        @endphp

                        {{$a}} + {{$b}}</label><input class="form-control" type="number" id="security_quiz" required name="security_quiz"></div>
                <input type="hidden" name="response" value="{{$c}}">
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send</button></div>
            </form>
        </div>
    </section>
</main>

@endsection