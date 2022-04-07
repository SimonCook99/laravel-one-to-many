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

        <div class="form-group">
          <label for="category_id">Categoria</label>
          <select class="form-control" id="category_id" name="category_id">

            <option value="">Nessuna categoria</option>

            @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </div>
        
        
        <button type="submit" class="btn btn-primary">Aggiungi post</button>
      </form>

    </div>

@endsection