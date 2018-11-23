@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
<h1>Contact</h1>

<form name="contact" method="POST" action="/contact/sent" netlify-honeypot="bot-field" netlify>
    <div class="hidden">
        <label>Don’t fill this out if you're human: <input name="bot-field" /></label>
    </div>
    <div>
        <label>Name: <input type="text" name="name" /></label>
    </div>
    <div>
        <label>Email: <input type="email" name="email" /></label>
    </div>
    <div>
        <label>Message: <textarea name="message"></textarea></label>
    </div>
    <p>
        <button type=”submit”>Send</button>
    </p>
</form>
@endsection
