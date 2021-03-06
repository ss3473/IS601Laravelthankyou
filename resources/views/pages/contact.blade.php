@extends('layouts.default')

@section('content')


    <h1>Contact</h1>
    <p class="lead">Please use this form to contact the site owner.</p>

    <form action="/contact" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="body">Message</label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="Thankyou">Name</label>
            <textarea name="Name" class="form-control" id="Name" rows="1"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>

@endsection