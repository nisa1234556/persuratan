@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Surat Keluar</h1>
    <div class="card">
        <div class="card-header">
            Detail Surat Keluar #{{ $suratKeluar->id }}
        </div>
        <div class="card-body">
            <div>
                <strong>ID Kops:</strong> {{ $suratKeluar->id_kops }}
            </div>
            <div>
                <strong>Tanggal:</strong> {{ $suratKeluar->tanggal }}
            </div>
            <div>
                <strong>No Surat:</strong> {{ $suratKeluar->no_surat }}
            </div>
            <div>
                <strong>Perihal:</strong> {{ $suratKeluar->perihal }}
            </div>
            <div>
                <strong>Tujuan:</strong> {{ $suratKeluar->tujuan }}
            </div>
            <div>
                <strong>Isi Surat:</strong> {{ $suratKeluar->isi_surat }}
            </div>
            <div>
                <strong>ID Tandatangan:</strong> {{ $suratKeluar->id_tandatangan }}
            </div>
            <div>
                <strong>User ID:</strong> {{ $suratKeluar->user_id }}
            </div>
            <div class="mt-3">
                <a href="{{ route('surat_keluar.index') }}" class="btn btn-secondary">Kembali</a>
                <a href="{{ route('surat_keluar.edit', $suratKeluar->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('surat_keluar.destroy', $suratKeluar->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection