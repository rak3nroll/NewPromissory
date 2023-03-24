@include('partials.__header')
@csrf

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/ORMECO_LOGO.png" alt="ORMECOLogo" height="100" width="100">
  </div>

  <!-- Navbar -->
  @include('partials.__navbar')
  <!-- Main Sidebar Container -->
  @include('partials.__sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <x-messages />
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $count_approve }}</h3>

                <p>Approve Promissory</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-thumbs-up fa-beat fa-xs"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $count_pedning }}</h3>

                <p>On-Process Promissory</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Monitoring</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-hover">
                  <thead>
                  <tr align="center">
                    <th>Consumer Name</th>
                    <th>Address</th>
                    <th>Contact #</th>
                    <th>Account #</th>
                    <th>No. of Bills</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($tblpromisorries as $showpromi )                                    
                  <tr>
                    <td>{{ $showpromi->consumer_name }}</td>
                    <td>{{ $showpromi->consumer_address }}</td>
                    <td align="center">{{ $showpromi->consumer_contact }}</td>
                    <td align="center">{{ $showpromi->account_no }}</td>
                    <td align="center">{{ $showpromi->no_of_bills }}</td>
                    <td align="center">{{ $showpromi->total_amount }}</td>
                    @if ($showpromi->is_approve == '1')
                    <td align="center">Approved</td>
                    @else
                    <td align="center">On-Process</td>
                    @endif
                    <td align="center">
                      <a class="btn btn-primary btn-sm" href="/promisorry_{{ $showpromi->id }}">
                       <i class="fas fa-folder">
                       </i>
                            View
                       </a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  {{-- <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr> --}}
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>ORMECO, Inc.</strong>
    All rights reserved.
  </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
  @include('partials.__footer')