@extends('Home')

@section('title','bookDetail')

@section('content')
<div class="container bg-secondary py-2 rounded">
    <h1 class="m-0 text-white">Book Detail</h1>
</div>

<div class="container  py-2 rounded">
<div class="card " style="width: 80rem;">
    <img src="{{url($books->image)}}" alt="{{$books->title}}" class="card-img-top">
    <div class="card-body">
      <p class="card-text ">{{$books->title}}</p>
      <p class="card-text ">{{$books->author}} </p>
      <p class="card-text ">{{$books->publishers}}</p>
      <p class="card-text ">{{$books->year}}</p>
      <p class="card-text ">{{$books->synopsis}} </p>
    </div>
  </div
</div>

@endsection
