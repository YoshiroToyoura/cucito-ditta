@extends('layouts.handmade')

@section('title', '商品一覧')

@section('content')
    <link href="{{ secure_asset('css/gallery.css') }}" rel="stylesheet">
    <div class="container">
        <div class="row">
            
            <div class="col-md-3 mx-auto">
              <a href="https://minne.com/@cucitoditta"><img src="{{ asset('image/minne_logo_vertical.JPEG') }}" class="img-fluid" alt="minne_logo_vertical" /></a>
            </div>
            <div class="col-md-3 mx-auto">
              <a href="https://www.instagram.com/cucitoditta/"><img src="{{ asset('image/IG_Glyph_Fill.JPEG') }}" class="img-fluid" alt="IG_Glyph_Fill" /></a>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4 mx-auto">
            
                <h2>{{ $post->name }}</h2>
                <a href="{{ action('Handmade\CucitodittaController@work', ['id'=>$post->id]) }}"><img src="{{ asset('storage/image/' . $post->image_path) }}"  class="img-responsive" alt="image" ></a>
                
            </div>
            @endforeach
        </div>
     </div>
@endsection