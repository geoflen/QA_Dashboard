@extends('layout') 
@section("content")
<div class="content-wrapper"> 

    <div class="container-fluid">

      <div>
      <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('trainer.index') }}">Trainer</a>
          </li>
          <li class="breadcrumb-item active">Trainer</li>
        </ol>
      </div>

      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Trainers</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('trainer.create')}}"> Add New Trainer</a>
            </div>
        </div>


		    <table class="table table-bordered">

		        <tr>
		        	<th> No: </th>

		            <th>Name</th>

		            <th>Phone Number</th>

		            <th>Organization</th>
		            <th>E-mail</th>
		            <th>Designation</th>

		            <th width="280px">Action</th>

		        </tr>

		    @foreach ($trainers as $key => $trainer)

		    <tr>

		        <td>{{ ++$i }}</td>

		        <td>{{ $trainer->name }}</td>

		        <td>{{ $trainer->phone_number }}</td>
		        <td>{{ $trainer->organization }}</td>
		        <td>{{ $trainer->email }}</td>
		        <td>{{ $trainer->designation }}</td>

		        <td>

		            <a class="btn btn-info" href="{{ route('trainer.show',$trainer->id) }}">Show</a>

		            <a class="btn btn-primary" href="{{ route('trainer.edit',$trainer->id) }}">Edit</a>

		            {!! Form::open(['method' => 'DELETE','route' => ['trainer.destroy', $trainer->id],'style'=>'display:inline']) !!}

		            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

		            {!! Form::close() !!}

		        </td>

		    </tr>

		    @endforeach

		    </table>
      </div>
       {!! $trainers->links('vendor.pagination.bootstrap-4'); !!}

    </div>

  </div>

@endsection    


