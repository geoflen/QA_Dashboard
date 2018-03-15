@extends('layout') 
@section("content")
<div class="content-wrapper"> 

    <div class="container-fluid">

      <div>
      <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/trainer/create">Trainer</a>
          </li>
          <li class="breadcrumb-item active">Trainer</li>
        </ol>
      </div>

    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Edit Trainer Details</h3>
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


    {!! Form::model($trainer, ['method'=>'POST', 'route' => ['trainer.update', $trainer->id]]) !!}
      {{csrf_field()}}
      <div class="row">
          <div class="form-group col-md-1"><strong>Name </strong></div>
          <div class="col-md-2"> {!! Form::text('name', null, array('class' => 'form-control')); !!} </div>
      </div> 
      <div class="row">
          <div class="form-group col-md-1"><strong>Phone Number </strong></div>
          <div class="col-md-2"> {!! Form::text('phone_number', null, array('class' => 'form-control'));!!} </div>
      </div> 

      <div class="row">
          <div class="form-group col-md-1"><strong>Organization </strong></div>
          <div class="col-md-2"> {!! Form::text('organization', null, array('class' => 'form-control')); !!} </div>
      </div> 
      <div class="row">
          <div class="form-group col-md-1"><strong> Email</strong></div>
          <div class="col-md-2"> {!! Form::text('email', null, array('class' => 'form-control')); !!} </div>
      </div> 

       <div class="row">
          <div class="form-group col-md-1"><strong>Designation </strong></div>
          <div class="col-md-2"> {!! Form::text('designation', null, array('class' => 'form-control')); !!} </div>
       </div>

       <div class="col-xs-12 col-sm-12 col-md-12 text-center">

          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    {!! Form::close() !!}

    </div>

  </div>

@endsection    


