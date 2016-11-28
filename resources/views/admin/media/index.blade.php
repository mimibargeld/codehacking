@extends('layouts.admin')
@section('content')
    <h1>Media</h1>

    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
            @if($media)
                @foreach($media as $m)
                    <tr>
                        <td>{{$m->id}}</td>
                        <td><img width="80" src="{{$m->file}}" alt="" class="img-responsive img-rounded"></td>
                        <td>{{$m->created_at->diffForHumans()}}</td>
                        <td>{{$m->updated_at->diffForHumans()}}</td>
                        <td>

                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediaController@destroy', $m->id]]) !!}

                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                </div>

                        {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
      </table>
@endsection