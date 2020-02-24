@extends('layouts.handmade')

@section('title', 'お問い合わせ')

@section('content')
        <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>お問い合わせ</h2>
               

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                   <div class="form-group row">
                        <label class="col-md-2">お名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">よみがな</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="reading" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">メールアドレス</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="mail" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">お問い合わせ内容</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="mail" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="送信">
                </form>
            </div>
        </div>
    </div>
@endsection