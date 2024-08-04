@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Surat Keluar</div>
                        <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID Kops</th>
                                        <th>Tanggal</th>
                                        <th>No Surat</th>
                                        <th>Perihal</th>
                                        <th>Tujuan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($suratKeluars as $suratKeluar)
                                    <tr>
                                        <td>{{ $suratKeluar->id }}</td>
                                        <td>{{ $suratKeluar->tanggal }}</td>
                                        <td>{{ $suratKeluar->no_surat }}</td>
                                        <td>{{ $suratKeluar->perihal }}</td>
                                        <td>{{ $suratKeluar->tujuan }}</td>
                                        <td>
                                            <a href="{{ route('surat_keluar.show', ['surat_keluar' => $suratKeluar->id]) }}" class="btn btn-info" title="Lihat">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('surat_keluar.edit', $suratKeluar->id) }}" class="btn btn-warning" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('surat_keluar.destroy', $suratKeluar->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus surat keluar ini?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ route('surat_keluar.create') }}" class="btn btn-primary mt-3" title="Tambah Surat Keluar Baru">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection