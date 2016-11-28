@extends('layouts.admin')

@section('content')
    <h1>Edit Post</h1>

    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}

    <div class="row">
        <div class="col-sm-3">
            <img src="{{$post->photo ? $post->photo->file : "http://placehold.it/250x220"}}" alt="" class="img-responsive img-rounded">
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Description:') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>6]) !!}
            </div>
        </div>
    </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', [''=>'Choose category'] + $categories, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Change photo:') !!}
            {!! Form::file('photo_id', null) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Edit Post', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
        </div>

    {!! Form::close() !!}

    @include('includes.errors')


@endsection