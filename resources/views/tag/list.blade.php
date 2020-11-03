@extends('layout')
@section('title','授業一覧')
@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-2">
      <h2>授業一覧</h2>
      @if (session('err_msg'))
        <p>
            {{session('err_msg')}}
        </p>
      @endif
      <table class="table table-striped">
          <tr>
              <th>記事番号</th>
              <th>授業名</th>
              <th>日付</th>
              <th></th>
              <th></th>
          </tr>
          @foreach($tags as $tag)
          <tr>
              <td>{{$tag->id}}</td>
              <td><a href="/tag/{{$tag->id}}">{{$tag->title}}</a></td>
              <td>{{$tag->updated_at}}</td>
              <td><button type="button" class="btn btn-primary" onclick="location.href='/tag/edit/{{$tag->id}}'">編集</button></td>
              <form method="POST" action="{{ route('tag.delete', $tag->id) }}" onSubmit="return checkDelete()">
             @csrf
              <td><button type="submit" class="btn btn-primary" onclick="">削除</button></td>
          </tr>
          @endforeach
      </table>
  </div>
</div>
<script>
function checkDelete(){
if(window.confirm('削除してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection