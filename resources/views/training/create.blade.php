@extends('layout') 
@section("content")
<div class="content-wrapper"> 

    <div class="container-fluid">

      <div>
      <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="trainig/create">Training</a>
          </li>
          <li class="breadcrumb-item active">Training</li>
        </ol>
      </div>

    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-centre">
                <h2>Add a new Training</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('training.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)

        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif


    {!! Form::open(array('route' => 'training.store','method'=>'POST')) !!}
   
        <div class="row">
          <div class="form-group col-md-1"><strong>Start Date </strong></div>
           <div class="col-md-2"> {!! Form::date('start_date', \Carbon\Carbon::now(), array('placeholder' => 'MM/DD/YYYY', 'class' => 'form-control')); !!} </div>
        </div>  

        <div class="row">
          <div class="form-group col-md-1"><strong>End Date </strong></div>
          <div class="col-md-2">  {!! Form::date('end_date', \Carbon\Carbon::now(), array('placeholder'=> 'MM/DD/YYYY', 'class' => 'form-control')); !!}</div>
        </div>

        <div class="row">
          <div class="form-group col-md-1"><strong>Location </strong></div>
          <div class="col-md-2">  {!! Form::text('location', null, array('placeholder' => 'Location', 'class' => 'form-control')); !!}</div>
        </div>
      
        <div class="row">
          <div class="form-group col-md-1"><strong>Description </strong></div>
           <div> {!! Form::textarea('description', null, array('placeholder' => 'Description', 'class' => 'form-control', 'style' => 'height:100px')); !!} </div>
        </div>

        <div class="row">
            <div class="form-group col-md-1"><strong>Trainer:</strong></div>
            <div class="col-md-1"> {!! Form::text('trainer', null, array('placeholder' => 'Trainer','class' => 'form-control')) !!} </div>
        </div>
        <div class="row ">
          <div class="col-md-1"><strong>Impplementing Partner (IP) </strong> </div>
          <div class="col-md-2">{!! Form::text('ip', null, array('placeholder'=> 'IP Name', 'class' => 'form-control')); !!}</div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    {!! Form::close() !!}

    </div>

  </div>

@endsection    





