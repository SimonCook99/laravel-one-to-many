@extends("admin.layouts.base")


@section("content")

    <div class="container">
      <h1>Crea un nuovo post</h1>

      <form method="POST" action="{{route("admin.posts.store")}}">
        @csrf
        <div class="form-group">
          <label for="title">Titolo post</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
          <label for="content">Contenuto post</label>
          <textarea class="form-control" id="content" rows="10" name="content"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>

@endsection