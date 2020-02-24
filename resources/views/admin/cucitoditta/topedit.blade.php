@extends('layouts.admin')

@section('title','topページの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>トップページの編集</h2>
                <form action="{{ action('Admin\EditController@topupdate') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="about">about</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="about" rows="20">{{ old('about', $post->about) }}</textarea>
                            <!--<input type="text" class="form-control" name="title" value="{{ old('title') }}"> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="information">information</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="information" rows="20">{{ old('information', $post->information) }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection