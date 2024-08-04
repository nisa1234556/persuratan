@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Kepala Surat</h1>
    <div class="card">
        <div class="card-header">
            {{ $kepalaSurat->nama_kop }}
        </div>
        <div class="card-body">
            <p>Alamat Kop: {{ $kepalaSurat->alamat_kop }}</p>
            <p>Nama Tujuan: {{ $kepalaSurat->nama_tujuan }}</p>
            <p>User ID: {{ $kepalaSurat->user_id }}</p>
            <a href="{{ route('kepala_surat.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('kepala_surat.edit', $kepalaSurat->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('kepala_surat.destroy', $kepalaSurat->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection