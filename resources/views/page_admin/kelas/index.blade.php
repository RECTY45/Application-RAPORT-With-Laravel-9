@extends('page_admin.dashboard.layouts.main')
@section('content')
    {{-- <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End --> --}}
    <div class="card">

        <div class="text-start px-4 pt-3">
            <section class="about" id="about">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <span>
                            <p class="font-weight-bold" style="line-height: 10px">Data Kelas</p>
                            <p class="h2">Kelola Data Kelas</p>
                        </span>
                    </div>
                </div>
            </section>
            <div class="d-flex justify-content-end">
                <a href="{{ @route('kelas.create') }}" class="btn btn-primary">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert-success p-3 rounded">
                    {{ session('success') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert-success p-3 rounded">
                    {{ session('error') }}
                </div>
            @endif
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_kelas }}</td>
                            <td>{{ $item->level ?? '-' }}</td>
                            <td>
                                <div class="form-control-icon d-flex">
                                    <a href="{{ @route('kelas.edit', $item->id) }}" method="POST"
                                        class="bg-success px-2 py-1 rounded text-white mx-1"><i
                                            class="bi bi-pen-fill"></i></a>
                                    <form action="{{ @route('kelas.destroy', $item->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit"
                                             class="border-0 bg-danger px-2 py-1 rounded text-white mx-1" data-id="{{  $item->id }}"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <div>
                            <span>Data not found</span>
                        </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    {{-- Table Start --}}

    {{-- Table End --}}
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
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Template Javascript -->

@endpush
