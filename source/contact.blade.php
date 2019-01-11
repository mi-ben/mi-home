@extends('_layouts.secondary-right-column')

@section('title', 'Contact')

@section('middle-column')
<div class="shadow-inner bg-grey-lighter rounded-lg p-4">
    <h1>Contact</h1>
    <form name="newsletter" method="POST" action="/contact/sent" netlify-honeypot="spammer-slammer" netlify>
        <span class="hidden"><input name="spammer-slammer" placeholder="Leave Blank"></span>
        <input type="text" name="name" class="rounded-lg p-3 my-1 w-full text-xs" placeholder="Name">
        <input type="email" name="email" class="rounded-lg p-3 my-1 w-full text-xs" placeholder="Email">
        <button type="submit" class="rounded-lg p-3 my-1 w-full text-xs uppercase bg-grey-dark text-white font-extrabold">Join the tribe</button>
    </form>
</div>

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
