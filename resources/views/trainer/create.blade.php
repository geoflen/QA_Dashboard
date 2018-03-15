@extends('layout') 
@section("content")
<div class="content-wrapper"> 

    <div class="container-fluid">

      <div>
      <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/trainer/index">Trainers</a>
          </li>
          <li class="breadcrumb-item active">Trainer</li>
        </ol>
      </div>

    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-centre">
                <h2>Add a new Trainer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('trainer.index') }}"> Back</a>
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


    {!! Form::open(array('route' => 'trainer.store','method'=>'POST')) !!}
   
        <div class="row">
          <div class="form-group col-md-1"><strong>Name </strong></div>
           <div class="col-md-2"> {!! Form::text('name', null, array('placeholder' => 'FIRST  SECOND  OTHER ', 'class' => 'form-control')); !!} </div>
        </div>  

        <div class="row">
          <div class="form-group col-md-1"><strong>Phone Number </strong></div>
          <div class="col-md-2">  {!! Form::text('phone_number', null, array('placeholder'=> 'Phone Number', 'class' => 'form-control')); !!}</div>
        </div>

        <div class="row">
          <div class="form-group col-md-1"><strong>Organization </strong></div>
          <div class="col-md-2">  {!! Form::text('organization', null, array('placeholder' => 'Organization', 'class' => 'form-control')); !!}</div>
        </div>
      
        <div class="row">
          <div class="form-group col-md-1"><strong>Email </strong></div>
           <div class="col-md-2"> {!! Form::text('email', null, array('placeholder' => 'example@mail.com', 'class' => 'form-control')); !!} </div>
        </div>

        <div class="row">
            <div class="form-group col-md-1"><strong>Designation:</strong></div>
            <div class="col-md-2"> {!! Form::text('designation', null, array('placeholder' => 'Designation','class' => 'form-control')) !!} </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    {!! Form::close() !!}

    </div>

  </div>

@endsection    





