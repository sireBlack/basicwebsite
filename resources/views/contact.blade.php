@extends('layouts.app')

@section('content')
<h1>CONTACT</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="row">
        <div class="form-group col-sm-6">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Enter Name'])}}
        </div>
        <div class="form-group col-sm-6">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Enter E-mail address'])}}
        </div>
        <div class="form-group col-sm-12">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '', ['class'=>'form-control', 'placeholder'=>'Enter Message'])}}
        </div>
        <div>
            {{Form::submit('Submit', ['class'=>'btn btn-danger'])}}
        </div>
    </div>
    
   
{!! Form::close() !!}
@endsection