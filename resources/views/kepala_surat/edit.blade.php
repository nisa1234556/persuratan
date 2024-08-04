@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Kepala Surat</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('kepala_surat.update', $kepalaSurat->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="nama_kop">Nama Kop</label>
                    <input type="text" name="nama_kop" class="form-control" value="{{ old('nama_kop', $kepalaSurat->nama_kop) }}">
                </div>
                <div class="form-group mb-3">
                    <label for="alamat_kop">Alamat Kop</label>
                    <textarea name="alamat_kop" class="form-control">{{ old('alamat_kop', $kepalaSurat->alamat_kop) }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="nama_tujuan">Nama Tujuan</label>
                    <input type="text" name="nama_tujuan" class="form-control" value="{{ old('nama_tujuan', $kepalaSurat->nama_tujuan) }}">
                </div>
                <div class="form-group mb-3">
                    <label for="user_id">User ID</label>
                    <input type="text" name="user_id" class="form-control" value="{{ old('user_id', $kepalaSurat->user_id) }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection