@extends('layout')
@section('title','タグ詳細')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h2>{{$tag->title}}</h2>
    <span>作成日：{{$tag->created_at}}</span>
    <span>更新日：{{$tag->updated_at}}</span>
    <p>{{$tag->content}}</p>
  </div>
</div>
@endsection