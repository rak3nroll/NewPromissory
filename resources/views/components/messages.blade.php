@include('partials.__header')
@if (session()->has('message'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Logout</h5>
    {{ session('message') }}
  </div>
@endif
@include('partials.__footer')