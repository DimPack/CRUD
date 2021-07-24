@extends('layouts.app')
@section('title', 'Все посты')

@section('content')
<a href="{{route('posts.create')}}" class="btn btn-success">Создать пост</a>
@if(session()->get('success'))
  <div class="alert alert-success">
     {{ session()->get('success') }}
  </div>
@endif
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название</th>
      <th scope="col">Описание</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($posts as $post)
    <tr> 
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->description}}</td>
      <td class="table-buttons">
          <a href="{{route('posts.show', $post)}}" class="btn btn-success">
          <i class="fas fa-eye"></i>
          </a>
          <a href="{{route('posts.edit', $post)}}" class="btn btn-primary">
          <i class="fas fa-edit"></i>
          </a>
          <form method="POST" action="">
            <button type="submit" class="btn btn-danger">
              <i class="fas fa-trash-alt"></i>
            </button>
          </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection