@extends('layout')
@section('content')



<form method="post" action="/create">
 
    @csrf
 	<div class="row half">
	<div class="12u">
	<input class="text" type="text" name="img" id="email" placeholder="Enter url" />
	</div>
	</div>
	<div class="row half">
	<div class="12u">
	<textarea name="body" id="message" placeholder="Card-Body"></textarea>
	</div>
	</div>
	<div class="row half">
	<div class="12u">
    <ul class="actions">
	<li>
	<button type="submit">Create form</button>
	</li>
	</ul>
	</div>
	</div>
	</form>


@endsection