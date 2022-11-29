@extends('Home')

@section('title','Publisher')

@section('content')
    <content>
        <div class="container bg-secondary py-2 rounded">
            <p class="m-0 text-white">Publishers Name</p>
        </div>

        <section id="gallery">
            <div class="container">
              {{-- <div class="row"> --}}
                <div class="row pt-2 m-2" style="display:grid;grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        grid-gap: 55px;">
                @foreach ($publishers as $pb)
                <div class="card">
                    <img src="{{$pb->image}}" alt="{{$pb->title}}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">{{$pb->name}}</h5>
                      <p class="card-text">{{$pb->address}}</p>
                      <a href="{{url ('/publishers/'.$pb->id)}}" class="btn btn-primary">Detail</a>
                    </div>
                   </div>
                @endforeach
              </div>
          </div>
          </section>

    </content>

@endsection
