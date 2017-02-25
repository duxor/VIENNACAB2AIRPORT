@extends('master')
@section('body')
    <div class="container">
        @if(count($errors))
            <div class="form-group">
                <label class="control-label col-sm-4"></label>
                <div class="col-sm-8">
                    <ul>
                    @foreach($errors->all() as $e) <li>{{$e}}</li> @endforeach
                    </ul>
                </div>
            </div>
        @endif
        {!! Form::open(['class'=>'form-horizontal']) !!}
        <div class="form-group">
            <label class="control-label col-sm-4">Email</label>
            <div class="col-sm-8">{!! Form::text('email',null,['class'=>'form-control']) !!}</div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4">Password</label>
            <div class="col-sm-8">{!! Form::password('password',['class'=>'form-control']) !!}</div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-8">{!! Form::submit('Login',['class'=>'btn btn-primary']) !!}</div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection