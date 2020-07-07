@extends('layout')
@section('content')



<form method="post" action="/card/{{$card->id}}">
 
    @csrf
    @method('PUT')
 	<div class="row half">
	<div class="12u">
	<input class="text" type="text" name="img" id="email" value="{{$card->img}}" />
	</div>
	</div>
	<div class="row half">
	<div class="12u">
	<textarea name="body" id="message" placeholder="Card-Body">{{$card->body}}</textarea>
	@error('body')
	<h3>{{$errors->first('body')}}</h3>
	@enderror
	</div>
	</div>
	<div class="row half">
	<div class="12u">
    <ul class="actions">
	<li>
	<button type="submit">Update</button>
	</li>
	</ul>
	</div>
	</div>
</form>


@endsection