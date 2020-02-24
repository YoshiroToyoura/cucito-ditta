@extends('layouts.handmade')

@section('title', 'topページ')

@section('content')
<div class="container">
  <div class="underline-wrapper">
    <div class="row">
            
            
     <div class="col-md-4 mx-auto">
        <link href="{{ secure_asset('css/top.css') }}" rel="stylesheet">
    
        <img src="{{ asset('image/logo_tomei.png') }}"  class="img-fluid" alt="logo">
      <div class="row">
        <div class="col-md-4 offset-md-2">
          <div class="left-icon">
           <a href="https://minne.com/@cucitoditta"><img src="{{ asset('image/minne_logo_vertical.JPEG') }}" class="img-fluid2" alt="minne_logo_vertical" /></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="right-icon">
           <a href="https://www.instagram.com/cucitoditta/"><img src="{{ asset('image/IG_Glyph_Fill.JPEG') }}" class="img-fluid2" alt="IG_Glyph_Fill" /></a>
          </div>
        </div>
      </div>
     </div>
    
     <div class="col-md-8 mx-auto">
        <div class="auto">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-interval=5000 data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('image/botan2.jpg') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('image/piasu7.jpg') }}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('image/piasu6.jpg') }}" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('image/piasu9.jpg') }}" alt="Fourth slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('image/goshugibukuro.jpg') }}" alt="Fifth slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('image/sutai.jpg') }}" alt="Sixth slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('image/hair.jpg') }}" alt="Seventh slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('image/hankachi3.jpg') }}" alt="Eighth slide">
          </div>
        </div>

    </div>
    </div>
    </div>
    </div>
  </div>
</div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    
    <div class="container">
      <div class="underline-wrapper">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h2>about</h2>
                
                <div class="about">
                  {!! nl2br($post->about) !!}
                </div>
                
            </div>
        </div>
      </div>
       
      <div class="underline-wrapper">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h2>information</h2>
                
                <div class="information">
                  {!! nl2br($post->information) !!} 
                </div>
                
            </div>
        </div>
      </div>
    </div>
    
    
@endsection