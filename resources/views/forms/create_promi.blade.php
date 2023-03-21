@include('partials.__header')
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
            <h1 class="m-0">Create New Promissory</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">New Promissory</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Consumer Information</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="input_con_name">Consumer Name</label>
                <input type="text" id="input_con_name" class="form-control">
              </div>
              <div class="form-group">
                <label for="input_con_address">Address</label>
                <input type="text" id="input_con_address" class="form-control">
              </div>
              <div class="form-group">
                <label for="input_con_contact">Contact Number:</label>
                <input type="text" id="input_con_contact" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-6" >
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Billing Information</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="input_account_no">Account Number</label>
                <input type="text" id="input_account_no" class="form-control">
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="input_no_bill">Number of Bill to Pay</label>
                    <input type="text" id="input_no_bill" class="form-control">                
                  </div>   
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Total Balance</label>
                    <input type="number" id="total_bal" name="total_balance" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Partial Payment</label>
                    <input type="number" id="partial_payment" name="partial" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>How many months to pay</label>
                    <input type="number" id="month_to_pay" name="months_to_pay" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Total Amount</label>
                    <input type="number" id="total_amount" name="total" class="form-control" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Payment per month</label>
                    <input type="number" id="per_month" name="per_month" class="form-control" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Start Date</label>
                    <input type="date" id="input_ot_amount" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Expiration Date</label>
                    <input type="date" id="input_ot_amount" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="input_remarks">Other Charges</label>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="input_no_bill">Reconnection Fee:</label>
                    <input type="text" id="input_no_bill" class="form-control">             
                  </div>
                </div> 
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>TR Number</label>
                   <input type="text" id="input_ot_amount" class="form-control">
                  </div>
                </div>
              </div>    
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="input_no_bill">Surcharge:</label>
                    <input type="text" id="input_no_bill" class="form-control">             
                  </div>
                </div> 
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>TR Number</label>
                   <input type="text" id="input_ot_amount" class="form-control">
                  </div>
                </div>
              </div>                   
              <div class="form-group">
                <label for="input_remarks">Remarks</label>
                <textarea id="input_remarks" class="form-control" rows="4"></textarea>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      
      <div class="row">
        <div class="col-12">
   
          <a href="#" class="btn btn-secondary">Cancel</a>
          {{-- <input type="submit" value="Submit Promissory" class="btn btn-success float-right"> --}}
          <button type="button" class="btn btn-success float-right toastrDefaultSuccess">
            Submit Promissory
          </button>
        </div>
      </div>
      
    </section>
    
    <!-- Main content -->
    
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