@extends('layout') 
@section("content")

    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
<!--         <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">My Dashboard</li>
        </ol> -->
        <!-- nav class="navbar navbar-expand-sm bg-light" -->

        <div id="tabs"> <!-- opening tab div -->
        
          <nav class="navbar navbar-expand-sm bg-light navbar-custom">
            <ul class="nav nav-tabs" > 
              <li class="active nav-item"><a data-toggle="tab" class="nav-link" href="#lqms">LQMS (BASIC)</a></li>
              <li ><a data-toggle="tab" class="nav-link" href="#slmta">SLMTA</a></li>
              <li ><a data-toggle="tab" class="nav-link" href="#eqa"> EQA</a></li>
              <li ><a data-toggle="tab" class="nav-link" href="#biosafety">BIO-SAFETY</a></li>
            </ul>
          </nav>
        </div>

        <div class="tab-content"> <!-- Opening tab content -->

          <div class="tab-pane active" id="lqms"> <!-- LQMS pane div -->

            <!-- Icon Cards -->
            <div class="row">
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                  <div class="card-body">
                    <div class="mr-5">
                      Total No. of SLIPTA Trainers: 29
                    </div>
                  </div>
                  <a href="#" class="card-footer text-white clearfix small z-1">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                  <div class="card-body">
                    <div class="mr-5">
                      Total Number of SLMTA Trainers: 10
                    </div>
                  </div>
                  <a href="#" class="card-footer text-white clearfix small z-1">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                  <div class="card-body">
                    <div class="mr-5">
                      In Country National Auditors: 11
                    </div>
                  </div>
                  <a href="#" class="card-footer text-white clearfix small z-1">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                  <div class="card-body">
                    <div class="mr-5">
                      Total No. of SLMTA Auditors: 3
                    </div>
                  </div>
                  <a href="#" class="card-footer text-white clearfix small z-1">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>

            <!-- Area Chart Example -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-area-chart"></i>
                Area Chart Example
              </div>
              <div class="card-body">
                <canvas id="myAreaChart" width="100%" height="30"></canvas>
              </div>
              <div class="card-footer small text-muted">
                Updated yesterday at 11:59 PM
              </div>
            </div>

            <div class="row">

              <div class="col-lg-8">

                <!-- Example Bar Chart Card -->
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-bar-chart"></i>
                    Bar Chart Example
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-8 my-auto">
                        <canvas id="myBarChart" width="100" height="50"></canvas>
                      </div>
                      <div class="col-sm-4 text-center my-auto">
                        <div class="h4 mb-0 text-primary">#</div>
                        <div class="small text-muted">#</div>
                        <hr>
                        <div class="h4 mb-0 text-warning">#</div>
                        <div class="small text-muted">#</div>
                        <hr>
                        <div class="h4 mb-0 text-success">#</div>
                        <div class="small text-muted">#</div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                  </div>
                </div>

              </div>

              <div class="col-lg-4">
                <!-- Example Pie Chart Card -->
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-pie-chart"></i>
                    Pie Chart Example
                  </div>
                  <div class="card-body">
                    <canvas id="myPieChart" width="100%" height="100"></canvas>
                  </div>
                  <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                  </div>
                </div>

              </div>
            </div>

            <!-- Example Tables Card -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i>
                LQMS TRAINEES
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Facility</th>
                        <th>Contact</th>
                        <th>Start date</th>
                        <th>End date</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Facility</th>
                        <th>Contact</th>
                        <th>Start date</th>
                        <th>End date</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>QA Officer</td>
                        <td>Mubende Regional Hospital</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>2011/04/25</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Lab Tech</td>
                        <td>Kayunga</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>2011/07/25</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>QA Officer</td>
                        <td>Masaka Regional Hospital</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>2009/01/12</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Lab Tech</td>
                        <td>Mubende Regional Hospital</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>2012/03/29</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Lab Tech</td>
                        <td>Kayunga</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>2008/11/28</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Lab tech engineer</td>
                        <td>UNHLS</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>2012/12/02</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Data Officer</td>
                        <td>Masaka Regional Hospital</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>2012/08/06</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Data officer</td>
                        <td>Kayunga</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>2010/10/14</td>
                      </tr>
                      <tr>
                        <td>Colleen Okello</td>
                        <td>Store Manager</td>
                        <td>Masaka Regional Hospital</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>2009/09/15</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">
                Updated yesterday at 11:59 PM
              </div>
            </div>

          </div> <!-- Close of lqms -->
      <div class="tab-pane" id="slmta"> <!-- slmta div -->
     
                  <!-- Area Chart Example -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-area-chart"></i>
                Total No of Facilities:
              </div>
              <div class="card-body">
                <canvas id="slmtChart1" width="100%" height="30"></canvas>
              </div>
            </div>


            <!-- Example Tables Card -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i>
                List of Facilities
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Facility Name</th>
                        <th>Star Rating</th>
                        <th>District</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Facility Name</th>
                        <th>Star Rating</th>
                        <th>District</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>Mubende Regional Hospital</td>
                        <td></td>
                        <td>61</td>
                      </tr>
                      <tr>

                        <td>Kayunga</td>
                        <td></td>
                        <td>63</td>
                      </tr>
                      <tr>
                        <td>Masaka Regional Hospital</td>
                        <td></td>
                        <td>66</td>
                      </tr>
                      <tr>
                        <td>Mubende Regional Hospital</td>
                        <td></td>
                        <td>22</td>
                      </tr>
                      <tr>
                        <td>Kayunga</td>
                        <td></td>
                        <td>33</td>
                      </tr>
                      <tr>
                        <td>UNHLS</td>
                        <td></td>
                        <td>61</td>
                      </tr>
                      <tr>
                        <td>Masaka Regional Hospital</td>
                        <td></td>
                        <td>59</td>
                      </tr>
                      <tr>
                        <td>Kayunga</td>
                        <td></td>
                        <td>55</td>
                      </tr>
                      <tr>
                        <td>Masaka Regional Hospital</td>
                        <td></td>
                        <td>39</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">
                Updated yesterday at 11:59 PM
              </div>
            </div>
      </div> <!-- close slmta div -->



      <div class="tab-pane" id="eqa"> <!-- eqa div -->
        
          <div class="row">

              <div class="col-lg-4">
                <!-- Example Pie Chart Card -->
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-pie-chart"></i>
                    HIV
                  </div>
                  <div class="card-body">
                    <canvas id="eqaChart1" width="100%" height="100"></canvas>
                  </div>
                </div>

              </div>

              <div class="col-lg-4">
                <!-- Example Pie Chart Card -->
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-pie-chart"></i>
                    TB
                  </div>
                  <div class="card-body">
                    <canvas id="eqaChart2" width="100%" height="100"></canvas>
                  </div>
                </div>

              </div>
            </div>
     </div> <!-- close aqa div -->





      <div class="tab-pane" id="biosafety"> <!-- biosafety div  -->
        <p>BIO SAFETY code analytics here </p>
      </div> <!-- close biosafety div -->






      </div> <!-- Close of tab content div -->

     <!--  </div>  --><!-- close div of tabs tab -->

      </div>
      <!-- /.container-fluid -->

    </div>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script> -->
    <script src="http://localhost:8000/chart.js/Chart.js" charset="utf-8"></script>

    <script >
      var ctx = document.getElementById("slmtChart1").getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: ["2013", "2014", "2015", "2016", "2017", "2018"],
              datasets: [{
                  label: '# Facilities',
                  data: [36, 47, 30, 40, 35, 15],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero:true
                      }
                  }]
              }
          }
      });
      </script>


      <script>
      new Chart(document.getElementById("eqaChart2"), {
    type: 'pie',
    data: {
      labels: ["Pass", "Fail"],
      datasets: [{
        label: "EQA",
        backgroundColor: ["#008000", "#FF0000"],
        data: [1000, 45]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Nationl TB EQA'
      }
    }
});
      </script>
   


        <script>
      new Chart(document.getElementById("eqaChart1"), {
    type: 'pie',
    data: {
      labels: ["Pass", "Fail"],
      datasets: [{
        label: "EQA",
        backgroundColor: ["#008000", "#FF0000"],
        data: [1800, 10]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'National HIV EQA'
      }
    }
});
      </script>
  @endsection

