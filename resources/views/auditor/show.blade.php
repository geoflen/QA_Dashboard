@extends('layout') 
@section("content")
<div class="content-wrapper"> 

    <div class="container-fluid">

      <div>
      <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="auditor/create">Auditor</a>
          </li>
          <li class="breadcrumb-item active">Auditor</li>
        </ol>
      </div>

    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Edit Auditor Details</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('auditor.index') }}"> Back</a>
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


    {!! Form::model($auditor, ['method'=>'GET', 'route' => ['auditor.show',$auditor->id]]) !!}
      {{csrf_field()}}
      <div class="row">
          <div class="form-group col-md-1"><strong>Name </strong></div>
          <div class="col-md-2"> {!! $auditor->name !!} </div>
      </div> 
      <div class="row">
          <div class="form-group col-md-1"><strong>Phone Contact </strong></div>
          <div class="col-md-2"> {!! $auditor->phone_number !!} </div>
      </div> 

      <div class="row">
          <div class="form-group col-md-1"><strong>Designation </strong></div>
          <div class="col-md-2"> {!! $auditor->designation !!} </div>
      </div> 
      <div class="row">
          <div class="form-group col-md-1"><strong>Organization </strong></div>
          <div class="col-md-2"> {!! $auditor->organization !!} </div>
      </div> 

       <div class="row">
          <div class="form-group col-md-1"><strong>Email </strong></div>
          <div class="col-md-2"> {!! $auditor->email !!} </div>
      </div> 
  


    {!! Form::close() !!}

    </div>

  </div>

@endsection    



