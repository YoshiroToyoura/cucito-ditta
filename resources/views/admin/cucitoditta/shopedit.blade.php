@extends('layouts.admin')

@section('title','委託販売先の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>委託販売先の編集</h2>
                    <form action="{{ action('Admin\EditController@shopupdate') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="name">販売委託先名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $shops_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="url">お店URL</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="url" rows="10">{{ $shops_form->url }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="address">住所</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="address" rows="10">{{ $shops_form->address }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="map">グーグルマップ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="map" rows="10">{{ $shops_form->map }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $shops_form->id }}">
                                {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection