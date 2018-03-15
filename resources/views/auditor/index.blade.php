@extends('layout') 
@section("content")
<div class="content-wrapper"> 

    <div class="container-fluid">

      <div>
      <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('auditor.index') }}">Auditors</a>
          </li>
          <li class="breadcrumb-item active">Auditor</li>
        </ol>
      </div>

      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Auditors</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('auditor.create')}}"> Add New Auditor</a>
            </div>
        </div>


        <div class="container">
        <form action="" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                    placeholder="Search Auditor"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
         </form>
        </div>






		    <table class="table table-stripped">
		    	<thead>

		        <tr>
		        	<th> No: </th>

		            <th>Name</th>

		            <th>Phone Number</th>

		            <th>Organization</th>
		            <th>Email</th>
		            <th>Designation</th>
		           <!--  <th>Implementing Partner</th> -->

		            <th width="280px">Action</th>

		        </tr>

		    </thead>
        <tbody>
          @foreach($auditors as $key=>$auditor)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$auditor->name}}</td>
              <td>{{$auditor->phone_number}}</td>
              <td>{{$auditor->organization}}</td>
              <td>{{$auditor->email}}</td>
              <td>{{$auditor->designation}}</td>
              <td> 
                <a class="btn btn-info" href="{{ route('auditor.show',$auditor->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('auditor.edit',$auditor->id) }}">Edit</a>

                {!! Form::open(['method' => 'DELETE','route' => ['auditor.destroy', $auditor->id],'style'=>'display:inline']) !!}

                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}
                <span class="glyphicon glyphicon-search"></span>
              </td>
            </tr>  
            @endforeach
        </tbody>

		    
		    </table>
        <div class="pull-centre">
          <!-- {{ $auditors->links() }} -->
          {!! $auditors->links('vendor.pagination.bootstrap-4'); !!}
        </div >
      </div>

    </div>

  </div>

@endsection    





