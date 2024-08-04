@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Card stats -->
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Daftar Kepala Surat</div>

                        <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama Kop</th>
                                        <th>Alamat Kop</th>
                                        <th>Nama Tujuan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kepalaSurats as $kepalaSurat)
                                    <tr>
                                        <td>{{ $kepalaSurat->nama_kop }}</td>
                                        <td>{{ $kepalaSurat->alamat_kop }}</td>
                                        <td>{{ $kepalaSurat->nama_tujuan }}</td>
                                        <td>
                                            <a href="{{ route('kepala_surat.show', $kepalaSurat->id) }}" class="btn btn-info" title="Lihat">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('kepala_surat.edit', $kepalaSurat->id) }}" class="btn btn-warning" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('kepala_surat.destroy', $kepalaSurat->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus kepala surat ini?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ route('kepala_surat.create') }}" class="btn btn-primary mt-3" title="Tambah Kepala Surat Baru">
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