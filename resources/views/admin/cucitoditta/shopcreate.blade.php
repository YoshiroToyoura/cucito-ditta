@extends('layouts.admin')

@section('title','委託販売先の登録')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>委託販売先の登録</h2>
                <form action="{{ action('Admin\EditController@shopcreate') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">販売委託先名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{  old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="url">お店URL</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="url" rows="10">{{ old('url')  }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="address">住所</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="address" rows="10">{{ old('address') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="information">グーグルマップ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="map" rows="10">{{ old('map')  }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection