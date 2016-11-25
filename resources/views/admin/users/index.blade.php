@extends('layouts.admin')
@section('content')
    <h1>Users</h1>
    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated</th>
          </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $u)
                <tr>
                    <td>{{$u->id}}</td>
                    <td>
                        <img width="80" class="img-responsive img-rounded" src="{{$u->photo ? $u->photo->file : 'http://placehold.it/80x40'}}">
                    </td>
                    <td><a href="{{route('users.edit', $u->id)}}">{{$u->name}}</a></td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->role ? $u->role->name : "" }}</td>
                    <td>{{$u->is_active ? 'Active' : 'Not active'}}</td>
                    <td>{{$u->created_at->diffForHumans()}}</td>
                    <td>{{$u->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
      </table>

@endsection