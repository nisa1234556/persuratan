@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Card stats -->
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Daftar Surat Masuk</div>

                        <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No Surat</th>
                                        <th>Tanggal</th>
                                        <th>Asal Surat</th>
                                        <th>Perihal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suratMasuks as $suratMasuk)
                                    <tr>
                                        <td>{{ $suratMasuk->no_surat }}</td>
                                        <td>{{ $suratMasuk->tanggal }}</td>
                                        <td>{{ $suratMasuk->asal_surat }}</td>
                                        <td>{{ $suratMasuk->perihal }}</td>
                                        <td>
                                            <a href="{{ route('surat_masuk.show', $suratMasuk->id) }}" class="btn btn-info" title="Detail">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('surat_masuk.edit', $suratMasuk->id) }}" class="btn btn-warning" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('surat_masuk.destroy', $suratMasuk->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus surat masuk ini?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ route('surat_masuk.create') }}" class="btn btn-primary mt-3" title="Tambah Surat Masuk Baru">
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