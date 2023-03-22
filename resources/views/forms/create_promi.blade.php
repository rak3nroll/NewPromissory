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
              <li class="breadcrumb-item active">Add New Promissory</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <form action="/store/promi" method="post">
      {{-- @csrf --}}
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
                <label for="consumer_name">Consumer Name</label>
                <input type="text" name="consumer_name" id="consumer_name" class="form-control">
              </div>
              <div class="form-group">
                <label for="consumer_address">Address</label>
                <input type="text" name="consumer_address" id="consumer_address" class="form-control">
              </div>
              <div class="form-group">
                <label for="contact_no">Contact Number:</label>
                <input type="text" name="contact_no" id="contact_no" class="form-control">
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
                <label for="account_no">Account Number</label>
                <input type="text" name="account_no" id="account_no" class="form-control">
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="no_of_bill">Number of Bill to Pay</label>
                    <input type="text" name="no_of_bill" id="no_of_bill" class="form-control">                
                  </div>   
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="total_balance">Total Balance</label>
                    <input type="number" id="total_balance" name="total_balance" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="partial">Partial Payment</label>
                    <input type="number" id="partial" name="partial" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="months_to_pay">How many months to pay</label>
                    <input type="number" id="months_to_pay" name="months_to_pay" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="total_amount">Total Amount</label>
                    <input type="number" id="total_amount" name="total_amount" class="form-control" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="per_month">Payment per month</label>
                    <input type="number" id="per_month" name="per_month" class="form-control" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" name="start_date" id="start_date" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exp_date">Expiration Date</label>
                    <input type="date" name="exp_date" id="exp_date" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="">Other Charges</label>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="recon_fee">Reconnection Fee:</label>
                    <input type="text" name="recon_fee" id="recon_fee" class="form-control">             
                  </div>
                </div> 
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="surcharge">TR Number</label>
                   <input type="text" name="tr_recon" id="tr_recon" class="form-control">
                  </div>
                </div>
              </div>    
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="surcharge">Surcharge:</label>
                    <input type="text" name="surcharge" id="surcharge" class="form-control">             
                  </div>
                </div> 
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>TR Number</label>
                   <input type="text" name="tr_surcharge" id="tr_surcharge" class="form-control">
                  </div>
                </div>
              </div>                   
              <div class="form-group">
                <label for="remarks">Remarks</label>
                <textarea id="remarks" name="remarks" class="form-control" rows="4"></textarea>
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
          <input type="submit" value="Submit Promissory" class="btn btn-success float-right New_promisorry_add_successs">
          {{-- <button type="submit" class="btn btn-success float-right New_promisorry_add_successs">
            Submit Promissory
          </button> --}}
        </div>
      </div>
    </form>
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