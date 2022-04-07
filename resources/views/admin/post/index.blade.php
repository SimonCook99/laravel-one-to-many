@extends("admin.layouts.base")


@section("content")

    <div class="container">
        <h1>Lista post : </h1>

        <a href="{{route("admin.posts.create")}}">Add a new post</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Contenuto</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{substr($post->content, 0, 30)}}</td>
                        <td>{{$post->slug}}</td>
                    </tr>
                @endforeach
              
              
            </tbody>
          </table>
    </div>

@endsection