
@extends('page_admin.dashboard.layouts.main')
@section('content')

     <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End --> 

        <!-- Sale & Revenue Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3 mb-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-line fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">guru</p>
                            <h6 class="mb-0">80</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 mb-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-bar fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Siswa</p>
                            <h6 class="mb-0">250</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 mb-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-area fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Jurusan</p>
                            <h6 class="mb-0">300</h6>
                        </div>
                    </div>
               </div>
                <div class="col-sm-6 col-xl-3 mb-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-pie fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">walas</p>
                            <h6 class="mb-0">1</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-4 px-4 mb-4">
            <div class="row g-5">
                <div class="col-sm-12 col-xl-13 pb-5">
                    <div class="bg-light text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                        </div>
                        <h6 class="mb-4">Welcome To Dashboard</h6>
                    </div>
                </div>
            </div>
        </div>
    
            <div class="bg-light  rounded-top p-4 position-relative bottom-0 start-0 end-0">
                <div class="row mb-1">
                    <div class="col-10">
                        &copy; <a href="https://www.instagram.com/recty.exploit/" >RECTY.Exploit</a>, All Right Reserved. 
                    </div> 
                </div>
            </div>
        <!-- Footer End -->
@endsection

@push('script-js')
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/lib/chart/chart.min.js')}}"></script>
<script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('assets/js/main.js')}}"></script>
@endpush


