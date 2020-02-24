@extends('layouts.admin')

@section('title', '商品の一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>商品一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\EditController@work') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\EditController@workindex') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">カテゴリー名</label>
                        <div class="col-md-8">
                            <select name="category_id">
                              <option value="1">布小物</option>
                              <option value="2">アクセサリー</option>
                              <option value="3">ヘアアクセサリー</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="admin-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">商品名</th>
                                <th width="20%">紹介文</th>
                                <th width="20%">カテゴリー</th>
                                <th width="20%">ミンネURL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $works)
                                <tr>
                                    <th>{{ $works->id }}</th>
                                    <td>{{ \Str::limit($works->name, 20) }}</td>
                                    <td>{{ \Str::limit($works->introduction, 50) }}</td>
                                    <td>{{ \Str::limit($works->category_id, 20) }}</td>
                                    <td>{{ \Str::limit($works->minne_id, 20) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\EditController@workedit', ['id' => $works->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\EditController@workdelete', ['id' => $works->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection