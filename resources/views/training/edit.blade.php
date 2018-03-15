@extends('layout') 
@section("content")
<div class="content-wrapper"> 

    <div class="container-fluid">

      <div>
      <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/training/create">Training</a>
          </li>
          <li class="breadcrumb-item active">Training</li>
        </ol>
      </div>

    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Edit Training Details</h3>
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


    {!! Form::model($training, ['method'=>'POST', 'route' => ['training.update', $training->id]]) !!}
      {{csrf_field()}}
      <div class="row">
          <div class="form-group col-md-1"><strong>Start Date </strong></div>
          <div class="col-md-2"> {!! Form::text('start_date', null, array('class' => 'form-control')); !!} </div>
      </div> 
      <div class="row">
          <div class="form-group col-md-1"><strong>End Date </strong></div>
          <div class="col-md-2"> {!! Form::text('end_date', null, array('class' => 'form-control'));!!} </div>
      </div> 

      <div class="row">
          <div class="form-group col-md-1"><strong>Location </strong></div>
          <div class="col-md-2"> {!! Form::text('location', null, array('class' => 'form-control')); !!} </div>
      </div> 
      <div class="row">
          <div class="form-group col-md-1"><strong>Description </strong></div>
          <div class="col-md-2"> {!! Form::text('description', null, array('class' => 'form-control')); !!} </div>
      </div> 

       <div class="row">
          <div class="form-group col-md-1"><strong>Implementing Partner </strong></div>
          <div class="col-md-2"> {!! Form::text('ip', null, array('class' => 'form-control')); !!} </div>
       </div>

       <div class="col-xs-12 col-sm-12 col-md-12 text-center">

          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    {!! Form::close() !!}

    </div>

  </div>

@endsection    


