@extends('Home')

@section('title','publishersDetail')

{{-- Publisher content --}}
@section('content')
<div class="container bg-secondary py-2 rounded">
    <h1 class="m-0 text-white">Publishers Detail</h1><br>
    <div class="h5 text-white">
        {{$publishers->name}}
    </div>
    <div class="h5 text-white">
        Address - {{$publishers->address}}
    </div>
    <div class="h5 text-white">
        Phone - {{$publishers->phone}}
    </div>
    <div class="h5 text-white">
        Email - {{$publishers->email}}
    </div>
</div>

{{-- Books content --}}
<div class="container">
<div class="row">
    {{-- <div class="col-lg-3 mb-3"> --}}
    @foreach ($publishers->books as $bo)
    <div class="col-lg-3 mb-3">
        <div class="card">
          <img src="{{url($bo->image)}}" alt="{{$bo->title}}" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">{{$bo->title}}</h5>
            <p class="card-text">by</p>
            <p class="card-text-2">{{$bo->author}}</p>
            <a href="{{url ('/books/'.$bo->id)}}" class="btn btn-primary">Detail</a>
          </div>
         </div>
        </div>
    @endforeach
</div>
@endsection

