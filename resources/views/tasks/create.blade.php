@extends('layout') 
@section("content")
<div class="content-wrapper"> 

    <div class="container-fluid">

      <div>
      <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="tasks/create">Create a schedule</a>
          </li>
          <li class="breadcrumb-item active">Activity schedule</li>
        </ol>
      </div>

    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add a new activity scedule</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('lqms.index') }}"> Back</a>
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


      <form action="{{ route('tasks.store') }}" method="post">
        {{ csrf_field() }}
        Task name:
        <br />
        <input type="text" name="name" />
        <br /><br />
        Task description:
        <br />
        <textarea name="description"></textarea>
        <br /><br />
        Facility name:
        <br />
        <input type="text" name="facility_name" />
        <br /><br />
        Start time:
        <br />
        <input type="text" name="task_date" class="date" />
        <br /><br />
        <input type="submit" value="Save" />
      </form>

    </div>

  </div>

  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "yy-mm-dd"
        });
    </script>

@endsection    




