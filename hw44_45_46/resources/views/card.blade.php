@extends('layout')
@section('content')
<form action="/card/{{$card->id}}" method="post">
@csrf
@method('DELETE')
<section class="4u"> 
<a href="#" class="image featured"><img src="/{{$card->img}}" alt=""></a>
<div class="box">
<h3>{{$card->id}}</h3>
<p>{{$card->body}}</p>
<h1>This card belongs to {{$card->user->name}}</h1>

@foreach($card->category as $category)

<h1>

<a href="">{{$category->title}}</a>

</h1>

@endforeach
</section>  

<a href="/card/{{$card->id}}/edit">Edit</a>
<button type="submit" value="delete">Delete</button>


</form>





@endsection