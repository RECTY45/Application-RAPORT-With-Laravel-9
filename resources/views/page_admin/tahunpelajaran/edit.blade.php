@extends('page_admin.dashboard.layouts.main')
@section('content')
    {{-- <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End --> --}}

    {{-- Table Start --}}
    <div class="text-start px-4 pt-3">
        <div class="row mb-2">
            <div class="col-md-12">
                <span>
                    <p class="font-weight-bold" style="line-height: 10px">Data Tahun Pelaran</p>
                    <p class="h2">Tambah Data Tahun Pelajaran</p>
                </span>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form action="{{ @route('tapel.update',$item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tahun Pelajaran</label>
                        <input value="{{ $item->tahun_pelajaran }}" type="text" name="tahun_pelajaran"
                        class="form-control @error('tahun_pelajaran')is-invalid @enderror" placeholder="Silahkan Masukkan Tahun Pelajaran">

                        @error('tahun_pelajaran')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Semester</label>
                        <input value="{{ $item->semester }}" type="text" name="semester"
                            class="form-control @error('semester')is-invalid @enderror" placeholder="Silahkan Masukkan Semester">
                        @error('semester')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Aktif</label>
                        <select value="{{ $item->aktif }}" name="aktif" class="form-control @error('aktif')is-invalid @enderror">
                            @if ($item->aktif)
                                <option value="{{ $item->id }}">{{ $item->aktif === '1' ? 'Aktif' : 'Tidak' }}</option>
                            @endif
                            <option value="">- Pilih -</option>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak</option>
                        </select>
                        @error('aktif')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group px-3">
                    <button type="submit" class="btn btn-sm btn-primary">Rekam</button>

                    <a href="{{ @route('tapel.index') }}" type="button" class="btn btn-sm btn-success">Batal</a>
                </div>
            </div>
        </form>
    </div>

    <div class="rounded-top p-4 position-relative bottom-0 start-0 end-0">
        <div class="row mb-1">
            <div class="col-10">
                &copy; <a href="https://www.instagram.com/recty.exploit/">RECTY.Exploit</a>, All Right Reserved.
            </div>
        </div>
    </div>

    <!-- Footer End -->
@endsection

@push('script-js')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endpush
