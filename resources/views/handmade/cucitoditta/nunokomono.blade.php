@extends('layouts.handmade')

@section('title', '布小物')

@section('content')
    <link href="{{ secure_asset('css/nunokomono.css') }}" rel="stylesheet">
    
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
                <h4>ハンカチ</h4>
                <img src="{{ asset('image/hankachi.jpg') }}"  class="img-responsive" alt="hankachi">
                <p>説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
            </div>
            <div class="col-md-3 mx-left">
                <h4>スタイ</h4>
                <img src="{{ asset('image/sutai.jpg') }}"  class="img-responsive" alt="ring">
                <p>説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
            </div>
            <div class="col-md-3 mx-left">
                <h4>スタイ</h4>
                <img src="{{ asset('image/sutai2.jpg') }}"  class="img-responsive" alt="hair">
                <p>説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
            </div>
            <div class="col-md-3 mx-left">
                <h4>スタイ</h4>
                <img src="{{ asset('image/sutai3.jpg') }}"  class="img-responsive" alt="hair">
                <p>説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
            </div>
            <div class="col-md-3 mx-left">
                <h4>ご祝儀袋</h4>
                <img src="{{ asset('image/goshugibukuro.jpg') }}"  class="img-responsive" alt="hair">
                <p>説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
            </div>
            <div class="col-md-3 mx-left">
                <h4>抱っこ紐カバー</h4>
                <img src="{{ asset('image/dakkohimo.jpg') }}"  class="img-responsive" alt="hair">
                <p>説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
            </div>
        </div>
        
        
       
    </div>
@endsection