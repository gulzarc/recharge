@extends('layouts.deshboard_layout')

@section('content')

<div class="page-wrapper">
            
    <div class="container-fluid">
    	<center><legend>Add Api</legend></center>
       	<div class="well"> 
            {!! Form::open(['url' => '#', 'class' => 'form-horizontal']) !!} 
            <fieldset>
                
                    <div class="form-group">
                        {!! Form::label('api_name', 'Api Name', ['class' => 'col-lg-2 control-label'] )  !!}
                        <div class="col-lg-8">
                            {!! Form::text('api_name',null, ['class' => 'form-control', 'placeholder' => 'Api Name']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-2 col-lg-offset-2">
                            {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                        </div>
                    </div>
                     <div class="form-group">
                        
                    </div>
                </fieldset> 
            {!! Form::close()  !!}
        </div>
    </div>               
</div>
            
@endsection
@section('scripts')

@stop