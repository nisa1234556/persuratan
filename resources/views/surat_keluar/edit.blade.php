@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($suratKeluar) ? 'Edit Surat Keluar' : 'Tambah Surat Keluar' }}</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ isset($suratKeluar) ? route('surat_keluar.update', $suratKeluar->id) : route('surat_keluar.store') }}" method="POST">
                @csrf
                @if(isset($suratKeluar))
                @method('PUT')
                @endif
                <div class="mb-3">
                    <label for="id_kops" class="form-label">ID Kops</label>
                    <input type="text" name="id_kops" class="form-control" value="{{ old('id_kops', $suratKeluar->id_kops ?? '') }}" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $suratKeluar->tanggal ?? '') }}" required>
                </div>
                <div class="mb-3">
                    <label for="no_surat" class="form-label">No Surat</label>
                    <input type="text" name="no_surat" class="form-control" value="{{ old('no_surat', $suratKeluar->no_surat ?? '') }}" required>
                </div>
                <div class="mb-3">
                    <label for="perihal" class="form-label">Perihal</label>
                    <input type="text" name="perihal" class="form-control" value="{{ old('perihal', $suratKeluar->perihal ?? '') }}" required>
                </div>
                <div class="mb-3">
                    <label for="tujuan" class="form-label">Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" value="{{ old('tujuan', $suratKeluar->tujuan ?? '') }}" required>
                </div>
                <div class="mb-3">
                    <label for="isi_surat" class="form-label">Isi Surat</label>
                    <textarea name="isi_surat" class="form-control" rows="5" required>{{ old('isi_surat', $suratKeluar->isi_surat ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="id_tandatangan" class="form-label">ID Tandatangan</label>
                    <select name="id_tandatangan" class="form-control">
                        <option value="">Pilih Tandatangan</option>
                        @foreach($namaTandatgn as $tandatangan)
                        <option value="{{ $tandatangan->id }}" {{ isset($suratKeluar) && $suratKeluar->id_tandatangan == $tandatangan->id ? 'selected' : '' }}>
                            {{ $tandatangan->nama_tandatangan }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="user_id" class="form-label">User ID</label>
                    <select name="user_id" class="form-control">
                        <option value="">Pilih User</option>
                        @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ isset($suratKeluar) && $suratKeluar->user_id == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">{{ isset($suratKeluar) ? 'Update' : 'Tambah' }}</button>
            </form>
        </div>
    </div>
</div>
@endsection