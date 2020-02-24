@extends('layouts.admin')

@section('title', '編集top')

@section('content')
    <div class="col-md-4 mx-auto">
        <link href="{{ secure_asset('css/top.css') }}" rel="stylesheet">
    </div>
    
    <img src="{{ asset('image/logo.jpg') }}"  class="img-fluid" alt="logo">
    

@endsection