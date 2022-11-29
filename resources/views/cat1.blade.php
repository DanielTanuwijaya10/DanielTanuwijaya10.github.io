@extends('Home')
@section('title','cat1')

@section('content')
    <content>
        <div class="container bg-secondary py-2 rounded">
            <h1 class="m-0 text-white">{{$categories->name}}</h1>
        </div>
        <div>

        </div>

<section id="gallery">
  <div class="container">
    <div class="row">
        @foreach ($categories->books as $book )
        <div class="col-lg-3 mb-3">
            <div class="card">
              <img src="{{url($book->image)}}" alt="{{$book->title}}" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <p class="card-text">by</p>
                <p class="card-text-2">{{$book->author}}</p>
                <a href="{{url ('/books/'.$book->id)}}" class="btn btn-primary">Detail</a>
              </div>
             </div>
            </div>
        @endforeach
</div>
</section>

    </content>
@endsection
