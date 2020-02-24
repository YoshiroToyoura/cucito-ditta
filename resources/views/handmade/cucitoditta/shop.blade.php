@extends('layouts.handmade')

@section('title', '委託販売先')

@section('content')
    <link href="{{ secure_asset('css/shop.css') }}" rel="stylesheet">

    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h2>委託販売先</h2>
                
            </div>
            @foreach($posts as $post)

            <div class="col-md-12 mx-auto">
                <a href="{{ $post->url }}"><h3>{{ $post->name }}</h3></a>
                <h5>{{ $post->address }}</h5>
                <iframe src="{!! $post->map !!}"></iframe>
            
            </div>
            @endforeach
            
        </div>
        
        
       
    </div>
@endsection