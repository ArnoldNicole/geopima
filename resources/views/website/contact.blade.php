@extends('layouts.website')

@section('content')
<main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Contact Us</h2>
                <p>Ask your questions, request quotations, let us help you; by filling the form below.</p>
                @if(session()->has('success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Success!</strong> We have Received Your Message, Our representatives will get back to you.
                </div>
                @endif
            </div>
            <form class="text-left text-muted visible" method="post">
                <div class="form-group"><label for="name">Name</label><input class="form-control" type="text" id="name" name="name"></div>
                <div class="form-group"><label for="subject">Subject</label><input class="form-control" type="text" id="subject" name="subject"></div>
                <div class="form-group"><label for="email">Email</label><input class="form-control" type="email" id="email" name="email"></div>
                <div class="form-group"><label for="message">Message</label><textarea class="form-control" id="message" name="message"></textarea></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send</button></div>
            </form>
        </div>
    </section>
</main>

@endsection