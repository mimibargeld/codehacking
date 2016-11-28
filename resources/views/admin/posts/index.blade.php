@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>

    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Photo</th>
            <th>Created by</th>
            <th>Created</th>
            <th>Updated</th>
          </tr>
        </thead>
        <tbody>

        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->category->name}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td><img width="80" class="img-responsive img-rounded" src="{{$post->photo ? $post->photo->file : "http://placehold.it/80x40"}}"></td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach

        </tbody>
      </table>
@endsection