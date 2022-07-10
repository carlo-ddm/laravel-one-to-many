@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Contenuto</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

            <tr>
              <th scope="row">{{$post->id}}</th>
              <td>{{$post->title}}</td>
              <td>{{$post->content}}</td>
              <td>
                <a class="btn btn-outline-dark" href="{{route('admin.posts.index')}}">BACK</a>
                <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">DELETE</button>
                </form>
              </td>
            </tr>

        </tbody>
      </table>
</div>
@endsection
