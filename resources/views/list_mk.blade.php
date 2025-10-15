@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-semibold text-dark mb-1">Daftar Mata Kuliah</h2>
            <p class="text-muted small mb-0">Kelola data mata kuliah yang tersedia di sistem.</p>
        </div>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Tambah Mata Kuliah
        </a>
    </div>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Table -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Mata Kuliah</th>
                            <th scope="col">SKS</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mks as $mk)
                            <tr>
                                <td>{{ $mk->id }}</td>
                                <td class="fw-medium">{{ $mk->nama_mk }}</td>
                                <td>
                                    <span class="badge bg-primary-subtle text-primary">
                                        {{ $mk->sks }} SKS
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="d-inline-flex gap-2">
                                        <a href="{{ route('matakuliah.edit', $mk->id) }}" 
                                            class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" 
                                            method="POST" onsubmit="return confirm('Yakin ingin menghapus mata kuliah {{ $mk->nama_mk }}?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-5 text-muted">
                                    <i class="bi bi-journal-x display-6 d-block mb-2"></i>
                                    <p class="mb-0">Belum ada data mata kuliah.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    @if (method_exists($mks, 'links'))
        <div class="mt-4">
            {{ $mks->links() }}
        </div>
    @endif
</div>
@endsection
