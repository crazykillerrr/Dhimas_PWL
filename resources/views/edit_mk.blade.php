@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Header -->
    <div class="mb-4">
        <h2 class="fw-semibold text-dark mb-1">Edit Mata Kuliah</h2>
        <p class="text-muted small">Perbarui informasi mata kuliah dengan benar.</p>
    </div>

    <!-- Form Card -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Nama Mata Kuliah -->
                <div class="mb-3">
                    <label for="nama_mk" class="form-label fw-medium">Nama Mata Kuliah</label>
                    <input type="text" name="nama_mk" id="nama_mk"
                        value="{{ old('nama_mk', $mk->nama_mk) }}"
                        class="form-control @error('nama_mk') is-invalid @enderror"
                        placeholder="Masukkan nama mata kuliah">
                    @error('nama_mk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- SKS -->
                <div class="mb-3">
                    <label for="sks" class="form-label fw-medium">SKS</label>
                    <input type="number" name="sks" id="sks"
                        value="{{ old('sks', $mk->sks) }}"
                        class="form-control @error('sks') is-invalid @enderror"
                        placeholder="Masukkan jumlah SKS">
                    @error('sks')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-save me-1"></i> Update
                    </button>
                    <a href="{{ route('matakuliah.index') }}" class="btn btn-light border px-4">
                        <i class="bi bi-x-circle me-1"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
