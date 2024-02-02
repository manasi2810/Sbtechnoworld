@extends('admin.layout.form')
@section('content')
<div class="main-content">
        <section class="section">
          <div class="section-header"> 
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">User Management</a></div> 
            </div>
          </div> 
          <div class="section-body"> 
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
              <div class="card">
                  <div class="card-header"> 
                  </div>
                  <div class="card-body">
                  <form class="theme-form mega-form" method="POST" action="{{route('usercreation.store')}}">  
                    @csrf
                    <div class="form-group row">
                      <label  class="col-sm-1 col-form-label">Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="name" >
                      </div> 
                      <label  class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-4">
                        <input type="email" class="form-control" name="email">
                      </div>
                    </div>  
                    <div class="form-group row">
                      <label  class="col-sm-1 col-form-label">Phone No</label>
                      <div class="col-sm-5">
                        <input type="number" class="form-control" name="phoneno">
                      </div> 
                      <label   class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="address">
                      </div>
                    </div>  
                    <div class="form-group row">
                      <label  class="col-sm-1 col-form-label">Pincode</label>
                      <div class="col-sm-5">
                        <input type="number" class="form-control" name="pincode">
                      </div> 
                      <label   class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-4">
                        <input type="password" class="form-control" name="password">
                      </div>
                    </div>  
                  </div>
                  <div class="card-footer">       
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </div>
              </Form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<!--/ Multilingual -->
            </div> 
          @endsection