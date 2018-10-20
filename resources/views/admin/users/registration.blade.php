@extends('layouts.deshboard_layout')

@section('content')

<div class="page-wrapper">
            
    <div class="container-fluid">
        <div class="well"> 
            {!! Form::open(['url' => '#', 'class' => 'form-horizontal']) !!} 
            <fieldset>
                <legend>Registration Type</legend>
                    <div class="form-group">
                        {!! Form::label('member_type', 'Member Type', ['class' => 'col-lg-2 control-label'] )  !!}
                        <div class="col-lg-10">
                            {!!  Form::select('member_type', ['S' => 'Please Select','m' => 'Small', 'd' => 'Large', 'r' => 'Extra Large'], 'S', ['class' => 'form-control' ]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('commission_plan', 'Commission Plan', ['class' => 'col-lg-2 control-label'] )  !!}
                        <div class="col-lg-10">
                            {!!  Form::select('commission_plan', ['S' => 'Please Select','m' => 'Small', 'd' => 'Large', 'r' => 'Extra Large'], 'S', ['class' => 'form-control' ]) !!}
                        </div>
                    </div>
                <legend>Personal Information</legend>
                    <div class="form-group">
                        {!! Form::label('name', 'Neme :', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('address', 'Address :', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::textarea('address',null, ['class' => 'form-control', 'rows' => 3]) !!}
                            <span class="help-block">Enter Full Address</span>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('state', 'State', ['class' => 'col-lg-2 control-label'] )  !!}
                        <div class="col-lg-10">
                            {!!  Form::select('state', ['S' => 'Please Select','m' => 'Small', 'd' => 'Large', 'r' => 'Extra Large'], 'S', ['class' => 'form-control' ]) !!}
                        </div>
                    </div>
                     <div class="form-group">
                        {!! Form::label('city', 'City', ['class' => 'col-lg-2 control-label'] )  !!}
                        <div class="col-lg-10">
                            {!!  Form::select('city', ['S' => 'Please Select','m' => 'Small', 'd' => 'Large', 'r' => 'Extra Large'], 'S', ['class' => 'form-control' ]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                        </div>
                    </div>
                   <div class="form-group">
                        {!! Form::label('mobile_no', 'Mobile No.:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::number('mobile_no', null, ['class' => 'form-control', 'placeholder' => 'Mobile Number']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                        </div>
                    </div>
                </fieldset> 
            {!! Form::close()  !!}
        </div>
    </div>               
</div>
            
@endsection
@section('scripts')

@stop