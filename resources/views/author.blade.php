@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron">
            {!! Form::open(array('action' => 'AuthorController@create', 'class' => 'form')) !!}

            <div class="form-group">
                {!! Form::label('Author Name') !!}
                {!! Form::text('name', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'author name')) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Save',
                  array('class'=>'btn btn-primary')) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
