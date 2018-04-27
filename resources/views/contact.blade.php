@extends('layouts.app')

@section('content')
<h1>CONTACT</h1>
{!! Form::open(['url' => 'foo/bar']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('Enter Name', '', ['class'=>'form-control col-md-6', 'placeholder'=>'Enter Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', '', ['class'=>'form-control col-md-6', 'placeholder'=>'Enter E-mail address'])}}
    </div>
    <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '', ['class'=>'form-control col-md-6', 'placeholder'=>'Enter Message'])}}
    </div>
{!! Form::close() !!}
@endsection