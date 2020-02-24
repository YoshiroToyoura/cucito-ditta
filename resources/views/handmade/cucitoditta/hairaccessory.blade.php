@extends('layouts.handmade')

@section('title', 'ヘアアクセサリー')

@section('content')
    <link href="{{ secure_asset('css/hairaccessory.css') }}" rel="stylesheet">
    
    <div class="container">
        <div class="row">
                
                <div class="col-md-4 mx-auto">
                  <a href="#"><img src="{{ asset('image/minne_logo_vertical.JPEG') }}" class="img-fluid" alt="minne_logo_vertical" /></a>
                </div>
                <div class="col-md-4 mx-auto">
                  <a href="#"><img src="{{ asset('image/IG_Glyph_Fill.JPEG') }}" class="img-fluid" alt="IG_Glyph_Fill" /></a>
                </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 mx-left">
                <h4>ヘアアクセサリー</h4>
                <img src="{{ asset('image/hair.jpg') }}"  class="img-responsive" alt="hair">
                <p>説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
            </div>
           
        </div>
        
        
       
    </div>
@endsection