@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Surat Masuk</h1>
    <div class="card">
        <div class="card-header">
            {{ $suratMasuk->no_surat }}
        </div>
        <div class="card-body">
            <p><strong>Kepala Surat:</strong> {{ $suratMasuk->kepalaSurat->nama }}</p>
            <p><strong>Tanggal:</strong> {{ $suratMasuk->tanggal }}</p>
            <p><strong>Nomor Surat:</strong> {{ $suratMasuk->no_surat }}</p>
            <p><strong>Asal Surat:</strong> {{ $suratMasuk->asal_surat }}</p>
            <p><strong>Perihal:</strong> {{ $suratMasuk->perihal }}</p>
            <p><strong>Disposisi 1:</strong> {{ $suratMasuk->disp1 }}</p>
            <p><strong>Disposisi 2:</strong> {{ $suratMasuk->disp2 }}</p>
            <p><strong>Tanda Tangan:</strong> {{ $suratMasuk->tandatangan->nama ?? '-' }}</p>
            <p><strong>Gambar:</strong></p>
            <img src="{{ asset('storage/' . $suratMasuk->image) }}" alt="{{ $suratMasuk->no_surat }}" style="max-width: 300px;">
            <br>
            <a href="{{ route('surat_masuk.index') }}" class="btn btn-secondary mt-3">Kembali</a>
            <a href="{{ route('surat_masuk.edit', $suratMasuk->id) }}" class="btn btn-warning mt-3">Edit</a>
            <form action="{{ route('surat_masuk.destroy', $suratMasuk->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-3">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection