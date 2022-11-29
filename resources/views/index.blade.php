@extends('Home')
@section('title','Home')

@section('content')
    <content>
        <div class="container bg-secondary py-2 rounded">
            <p class="m-0 text-white">Book List</p>
        </div>
        <div>

        </div>

  <div class="container">
    <div class="row">
        {{-- <div class="col-lg-3 mb-3"> --}}
        @foreach ($books as $bo)
        <div class="col-lg-3 mb-3">
            <div class="card">
              <img src="{{$bo->image}}" alt="{{$bo->title}}" class="card-img-top">
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
    </content>
@endsection
