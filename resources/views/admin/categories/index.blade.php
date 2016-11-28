@extends('layouts.admin')

@section('content')
    <div class="col-sm-6">
        <h1>Create category</h1>
        {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
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
                        <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a></td>
                        <td>{{$category->created_at->diffForHumans()}}</td>
                        <td>{{$category->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

@endsection