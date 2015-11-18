@extends('layouts.user')

@section('content')

     <div class="well body-hight">

         {!! Form::open(['url'=>'table','class'=>'form-signup form-paddind']) !!}


         <div class="form-group {{ $errors->first('name') ? 'has-error': '' }}">             
             
             {!! Form::text('name',null,['class'=>'form-control from-width','placeholder'=>'name']) !!}
             {!! $errors->first('name', '<span class="help-block">:message</span>') !!}

         </div>
         <div class="form-group {{ $errors->first('email') ? 'has-error': '' }}"> 
            
             {!! Form::text('email',null,['class'=>'form-control from-width','placeholder'=>'email']) !!}
             {!! $errors->first('email', '<span class="help-block">:message</span>') !!}

         </div>
         <div class="form-group {{ $errors->first('job') ? 'has-error': '' }}"> 
             
             {!! Form::text('job',null,['class'=>'form-control from-width','placeholder'=>'job']) !!}
             {!! $errors->first('job', '<span class="help-block">:message</span>') !!}

         </div>
         <div class="form-group {{ $errors->first('salary') ? 'has-error': '' }}">              
             {!! Form::text('salary',null,['class'=>'form-control from-width','placeholder'=>'salary']) !!}
            {!! $errors->first('salary', '<span class="help-block">:message</span>') !!}
         </div>

         <div class="form-group">

             {!! Form::submit('Create Data',['class'=>'btn btn-large btn-primary btn-block']) !!}

         </div>

         {!! Form::close() !!}



     </div>


@stop

