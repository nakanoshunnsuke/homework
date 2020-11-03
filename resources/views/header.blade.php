
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">課題管理</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{route('blogs')}}">課題一覧 <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="{{route('blog.create')}}">課題を追加</a>
      <a class="nav-item nav-link active" href="{{route('tags')}}">授業一覧 <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="{{route('tag.create')}}">授業を追加</a>
    </div>
  </div>
</nav>