@extends('layouts.handmade')

@section('title', 'お問い合わせ確認')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>お問い合わせ内容確認</h2>


<form method="POST" action="{{ route('contact.send') }}">
  @csrf
  
  
  <div class="form-group row">
    <label class="col-md-2">お名前</label>
      <div class="col-md-10">
        {{ $inputs['name'] }}
        <input
          name="name"
          value="{{ $inputs['name'] }}"
          type="hidden">
      </div>
  </div>
    
  <div class="form-group row">
    <label class="col-md-2">メールアドレス</label>
      <div class="col-md-10">
        {{ $inputs['email'] }}
        <input
          name="email"
          value="{{ $inputs['email'] }}"
          type="hidden">
      </div>
  </div>
  
  <div class="form-group row"> 
    <label class="col-md-2">お問い合わせ内容</label>
      <div class="col-md-10">
        {!! nl2br(e($inputs['body'])) !!}
        <input
          name="body"
          value="{{ $inputs['body'] }}"
          type="hidden">
      </div>
  </div>    
    
  <button type="submit" class="btn btn-primary" name="action" value="back">
    入力内容修正
  </button>
  <button type="submit" class="btn btn-primary" name="action" value="submit">
    送信する
  </button>
</form>
            </div>
        </div>
</div>
@endsection