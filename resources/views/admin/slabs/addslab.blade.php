@extends('layouts.deshboard_layout')

@section('content')

<div class="page-wrapper">
            
    <div class="container-fluid">
    	<center><legend>Create New Slab</legend></center>
       	<div class="well"> 
            {!! Form::open(['url' => '#', 'class' => 'form-horizontal']) !!} 
            <fieldset>
                
                    <div class="form-group">
                        {!! Form::label('slab_name', 'Slab Name', ['class' => 'col-lg-2 control-label'] )  !!}
                        <div class="col-lg-8">
                            {!! Form::text('slab_name',null, ['class' => 'form-control', 'placeholder' => 'Slab Name']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('slab_type', 'Slab Type', ['class' => 'col-lg-2 control-label'] )  !!}
                        <div class="col-lg-8">
                            {!!  Form::select('slab_type', ['S' => 'Please Select','m' => 'Master Distributor', 'd' => 'Distributor', 'r' => 'Retailor'], 'S', ['class' => 'form-control' ]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('commission', 'Flat Commission', ['class' => 'col-lg-2 control-label'] )  !!}
                        <div class="col-lg-8">
                            {!! Form::text('commission',null, ['class' => 'form-control', 'placeholder' => '0.00']) !!}
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