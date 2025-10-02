@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-primary text-white d-flex align-items-center">
            <i class="bi bi-person-plus-fill me-2"></i>
            <h5 class="mb-0">Buat Pengguna Baru</h5>
        </div>

        <div class="card-body p-4">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                        <input type="text" id="nama" name="nama" 
                               class="form-control" 
                               placeholder="Masukkan nama lengkap" 
                               required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label fw-semibold">NPM</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-card-text"></i></span>
                        <input type="text" id="nim" name="nim" 
                               class="form-control" 
                               placeholder="Masukkan NPM" 
                               required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-building"></i></span>
                        <select name="kelas_id" id="kelas_id" 
                                class="form-select" 
                                required>
                            <option value="">Pilih Kelas</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-success px-4">
                        <i class="bi bi-check-circle me-1"></i> Simpan
                    </button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary px-4">
                        <i class="bi bi-arrow-left-circle me-1"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
