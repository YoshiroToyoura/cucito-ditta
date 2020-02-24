@extends('layouts.handmade')

@section('title', 'お問い合わせ')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>お問い合わせ</h2>


<form method="POST" action="{{ route('contact.confirm') }}">
    @csrf


    <div class="form-group row">
        <label class="col-md-2">お名前</label>
            <div class="col-md-10">          
                <input
                    name="name"
                    class="form-control"
                    value="{{ old('name') }}"
                    type="text">
                @if ($errors->has('name'))
                  <p class="error-message">{{ $errors->first('name') }}</p>
                @endif
            </div>
    </div>
    
    
    <div class="form-group row">
        <label class="col-md-2">メールアドレス</label>
            <div class="col-md-10">        
                <input
                    name="email"
                    class="form-control"
                    value="{{ old('email') }}"
                    type="text">
                @if ($errors->has('email'))
                    <p class="error-message">{{ $errors->first('email') }}</p>
                @endif
            </div>
    </div>    
    
    
    <div class="form-group row">
        <label class="col-md-2">お問い合わせ内容</label>
            <div class="col-md-10">
                <textarea name="body" class="form-control" rows="20">{{ old('body') }}</textarea>
                @if ($errors->has('body'))
                    <p class="error-message">{{ $errors->first('body') }}</p>
                @endif
            </div>
    </div>
    

    <button type="submit"　class="btn btn-primary">
        入力内容確認
    </button>
</form>
            </div>
        </div>
</div>
@endsection