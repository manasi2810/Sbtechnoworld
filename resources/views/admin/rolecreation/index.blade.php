@extends('admin.layout.navbar')
@section('content')
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <!-- <h1>Table</h1> -->
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Role Management</a></div>
              <!-- <d iv class="breadcrumb-item"><a href="#"></a></d> -->
              <!-- <div class="breadcrumb-item">Table</div> -->
            </div>
          </div> 
          <div class="section-body"> 
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                <a href="{{route('rolecreation.create')}}"> <button class="btn btn-primary" >Add New +</button></a>
                  <div class="card-header">
                    <!-- <h4>Simple</h4> -->
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                      <tfooter>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
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