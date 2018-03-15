@extends('layout') 
@section("content")
<div class="content-wrapper"> 

    <div class="container-fluid">

      <div>
      <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('lqms.index') }}">LQMS Trainee</a>
          </li>
          <li class="breadcrumb-item active">LQMS Trainee</li>
        </ol>
      </div>

      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>LQMS Trainee</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="create"> Add New Trainee</a>
            </div>
        </div>


		    <table class="table table-bordered">

		        <tr>
		        	<th> No: </th>

		            <th>Name</th>

		            <th>Phone Contact</th>

		            <th>Designation</th>
		            <th>Facility</th>
		           <!--  <th>Implementing Partner</th> -->

		            <th width="280px">Action</th>

		        </tr>

		    @foreach ($lqmsTrainees as $key => $lqmsTrainee)

		    <tr>

		        <td>{{ ++$i }}</td>

		        <td>{{ $lqmsTrainee->name }}</td>

		        <td>{{ $lqmsTrainee->phone_number }}</td>
		        <td>{{ $lqmsTrainee->designation }}</td>
		        <td>{{ $lqmsTrainee->facility }}</td>
		       <!--  <td>{{ $lqmsTrainee->ip }}</td> -->

		        <td>

		            <a class="btn btn-info" href="{{ route('lqms.show',$lqmsTrainee->id) }}">Show</a>

		            <a class="btn btn-primary" href="{{ route('lqms.edit',$lqmsTrainee->id) }}">Edit</a>

		            {!! Form::open(['method' => 'DELETE','route' => ['lqms.destroy', $lqmsTrainee->id],'style'=>'display:inline']) !!}

		            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

		            {!! Form::close() !!}

		        </td>

		    </tr>

		    @endforeach

		    </table>
      </div>
      	<div class="pull-centre">
           {!! $lqmsTrainees->links('vendor.pagination.bootstrap-4'); !!}
        </div >


    </div>

  </div>

@endsection    


