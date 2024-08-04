@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Card stats -->
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Daftar Nama Tandatangan</div>

                        <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>NIP</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($namaTandatgns as $namaTandatgn)
                                    <tr>
                                        <td>{{ $namaTandatgn->nama_tandatangan }}</td>
                                        <td>{{ $namaTandatgn->jabatan }}</td>
                                        <td>{{ $namaTandatgn->nip }}</td>
                                        <td>
                                            <a href="{{ route('nama_tandatgn.show', $namaTandatgn->id) }}" class="btn btn-info" title="Lihat">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('nama_tandatgn.edit', $namaTandatgn->id) }}" class="btn btn-warning" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('nama_tandatgn.destroy', $namaTandatgn->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus nama tandatangan ini?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ route('nama_tandatgn.create') }}" class="btn btn-primary mt-3" title="Tambah Nama Tandatangan Baru">
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