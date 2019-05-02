<!doctype html>
@extends('component.layout')@section('body')

    <h1 class="" style="text-align: center">Welcome2</h1>

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{ route('welcome3')}}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>



    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="{{ asset('images/cat1.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item active">
                    <img src="{{ asset('images/cat2.jpg') }}" class="d-block w-100" alt="...">
                </div>
              <div class="carousel-item active">
                <img src="{{ asset('images/cat2.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
            </div>
          </div>

          
@endsection



