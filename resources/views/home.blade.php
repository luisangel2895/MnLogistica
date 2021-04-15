@extends('layouts.app-home')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Bienvenido al panel Administrativo</h3>
          <h6 class="font-weight-normal mb-0">Tienes <span class="text-primary">3 alertas por leer!</span></h6>
        </div>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Advanced Table</p>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="example" class="display expandable-table" style="width:100%">
                  <thead>
                    <tr>
                      <th>Quote#</th>
                      <th>Product</th>
                      <th>Business type</th>
                      <th>Policy holder</th>
                      <th>Premium</th>
                      <th>Status</th>
                      <th>Updated at</th>
                      <th></th>
                    </tr>
                  </thead>
              </table>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
  </div>
@endsection


