@extends('admin.layout.navbar')
@section('content')
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-4">
                <!-- Congratulations card -->
                <div class="col-md-12 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title mb-1">Congratulations </h4> 
                      <h6 class="text-primary mb-1">$42.8k</h6>
                      <p class="mb-2 pb-1">78% of target </p>
                      <a href="javascript:;" class="btn btn-sm btn-primary">View Sales</a>
                    </div> 
                  </div>
                </div>
                <!--/ Congratulations card --> 
                <!-- Transactions -->
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header">
                      <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Transactions</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="transactionID"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                          </div>
                        </div>
                      </div> 
                    </div>
                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial bg-primary rounded shadow">
                                <i class="mdi mdi-trending-up mdi-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <div class="small mb-1">Sales</div>
                              <h5 class="mb-0">245k</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial bg-success rounded shadow">
                                <i class="mdi mdi-account-outline mdi-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <div class="small mb-1">Customers</div>
                              <h5 class="mb-0">12.5k</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial bg-warning rounded shadow">
                                <i class="mdi mdi-cellphone-link mdi-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <div class="small mb-1">Product</div>
                              <h5 class="mb-0">1.54k</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial bg-info rounded shadow">
                                <i class="mdi mdi-currency-usd mdi-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <div class="small mb-1">Revenue</div>
                              <h5 class="mb-0">$88k</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Transactions --> 
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                  <div class="text-body mb-2 mb-md-0">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span> by
                    <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium"
                      >ThemeSelection</a
                    >
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a href="https://themeselection.com/license/" class="footer-link me-3" target="_blank">License</a>
                    <a href="https://themeselection.com/" target="_blank" class="footer-link me-3">More Themes</a>

                    <a
                      href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-3"
                      >Documentation</a
                    >

                    <a
                      href="https://github.com/themeselection/materio-bootstrap-html-admin-template-free/issues"
                      target="_blank"
                      class="footer-link"
                      >Support</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          @endsection