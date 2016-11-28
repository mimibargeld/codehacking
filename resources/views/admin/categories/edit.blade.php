@extends('layouts.admin')

@section('content')
    <div class="col-sm-6">
        <h1>Edit category</h1>
        {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Edit', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

        {!! Form::close() !!}
        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

        {!! Form::close() !!}
    </div>
    <div class="col-sm-6">
        <h1>Categories</h1>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            </thead>
            <tbody>
            @if($categories)
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at->diffForHumans()}}</td>
                        <td>{{$category->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

@endsection