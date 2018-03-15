@extends('layout') 
@section("content")
<div class="content-wrapper"> 

    <div class="container-fluid">

      <div>
      <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('training.index') }}">Training</a>
          </li>
          <li class="breadcrumb-item active">Training</li>
        </ol>
      </div>

      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Trainings</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/trainer/create"> Add New Training</a>
            </div>
        </div>


		    <table class="table table-hover table-bordered table-striped datatable" id="dataTable" >
			    <thead>

			        <tr>
			        	
			            <th>Start date</th>

			            <th>End date</th>

			            <th>Location</th>
			            <th>Description</th>
			            <th>Implementing Partner</th>

			           

			        </tr>
			    </thead>

		    </table>
      </div>

    </div>

  </div>

@stop  
@push('scripts')

			<script type="text/javascript">
			$(document).ready(function() {
			    oTable = $(".dataTable").DataTable({
			         processing: true,
			         serverSide: true,
			         // ajax: "{{ route('training.trainingData') }}",
			         ajax: '{{ url("training/trainingData") }}',
			         columns: [
			            {data: 'start_date', name: 'start_date'},
			            {data: 'end_date', name: 'end_date'},
			            {data: 'location', name: 'location'},
			            {data: 'description', name: 'description'},
			            {data: 'ip', name: 'ip'},
			        ]
			    });
			});
			</script>
			
@endpush()



