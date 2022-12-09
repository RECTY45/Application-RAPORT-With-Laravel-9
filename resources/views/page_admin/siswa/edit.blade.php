@extends('page_admin.dashboard.layouts.main')
@section('content')
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    {{-- Table Start --}}
    <div class="text-start px-4 pt-3">
        <div class="row mb-2">
            <div class="col-md-12">
                <span>
                    <p class="font-weight-bold" style="line-height: 10px">Data Siswa</p>
                    <p class="h2">Edit Data Siswa</p>
                </span>
            </div>
        </div>
    </div>


    <div class="card-body">
        <form action="{{ route('siswa.update', $item->id) }}" method="POST" class="form form-vertical">
            @csrf
            @method('PUT')
            <div class="form-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="text" id="nis" value="{{ $item->nis }}"
                                class="form-control @error('nis')is-invalid @enderror" name="nis"
                                placeholder="Masukkan NIS">
                            @error('nis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="number" id="nisn" value="{{ $item->nisn }}"
                                class="form-control @error('nisn')is-invalid @enderror" name="nisn"
                                placeholder="Masukkan NISN">
                            @error('nisn')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nama">Nama Siswa</label>
                            <input type="nama" id="nama" value="{{ $item->nama }}"
                                class="form-control @error('nama')is-invalid @enderror" name="nama"
                                placeholder="Masukkan Nama">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select view="{{ $item->jk }}" name="jk" id="jk"
                                class="form-control @error('jk')is-invalid @enderror">
                                @if ($item->jk)
                                    <option selected value="{{ $item->jk }}">
                                        {{ $item->jk === 'L' ? 'Laki-Laki' : 'Perempuan' }}</option>
                                @endif
                                <option value="">- Pilih Jenis Kelamin -</option>
                                <option value="L" {{ old('jk') == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="P" {{ old('jk') == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input type="agama" id="agama" value="{{ $item->agama }}"
                                class="form-control @error('agama')is-invalid @enderror" name="agama"
                                placeholder="Masukkan Agama">
                            @error('agama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="jurusan_id">Jurusan</label>
                            <select name="id_jurusan" view="{{ $item->jurusan->kode_jurusan }}" id="jurusan_id"
                                class="form-control @error('jurusan_id')is-invalid @enderror">
                                @if ($item->jurusan->kode_jurusan)
                                    <option selected value="{{ $item->jurusan->id }}">{{ $item->jurusan->nama_jurusan }}
                                    </option>
                                @endif
                                <option value="">- Pilih Jurusan -</option>
                                @foreach ($jurusans as $jurusan)
                                    @if (old('jurusan_id') == $jurusan->id)
                                        <option value="{{ $jurusan->id }}" selected>{{ $jurusan->nama_jurusan }}</option>
                                    @endif
                                    <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                                @endforeach
                            </select>
                            @error('jurusan_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="kelas_id">Kelas</label>
                            <select name="id_kelas" value="{{ $item->kelas->level }}" id="kelas_id" class="form-control @error('kelas_id')is-invalid @enderror">
                                @if ( $item->kelas->level )
                                    <option selected value="{{ $item->kelas->id }}">{{ $item->kelas->level }}</option>
                                @endif
                                <option value="">- Pilih Kelas -</option>
                                @foreach ($kelas as $kelas)
                                    @if (old('kelas_id') == $kelas->id)
                                        <option value="{{ $kelas->id }}" selected>{{ $kelas->level }}</option>
                                    @endif
                                    <option value="{{ $kelas->id }}">{{ $kelas->level }}</option>
                                @endforeach
                            </select>

                            @error('kelas_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        <a href="{{ route('siswa.index') }}" class="btn btn-light-secondary me-1 mb-1">Back</a>
                    </div>
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
