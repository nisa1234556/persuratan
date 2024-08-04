@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Nama Tandatangan</h1>
    <div class="card">
        <div class="card-header">
            {{ $namaTandatgn->nama_tandatangan }}
        </div>
        <div class="card-body">
            <p>Jabatan: {{ $namaTandatgn->jabatan }}</p>
            <p>NIP: {{ $namaTandatgn->nip }}</p>
            <a href="{{ route('nama_tandatgn.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('nama_tandatgn.edit', $namaTandatgn->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('nama_tandatgn.destroy', $namaTandatgn->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection