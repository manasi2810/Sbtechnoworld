@extends('admin.layout.navbar')
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
                <a href="{{route('usercreation.create')}}"> <button class="btn btn-primary" >Add New +</button></a>
                  <div class="card-header"> 
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Role</th>
                          <th scope="col">Created Date</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody> 
                        <tr>
                          <th>#</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                      <tfooter>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Role</th>
                          <th scope="col">Created Date</th>
                          <th scope="col">Action</th>
                        </tr>
                      </tfooter>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<!--/ Multilingual -->
            </div> 
          @endsection