@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Tambah Kepala Surat Baru</h1>
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
            <form action="{{ route('kepala_surat.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="nama_kop">Nama Kop</label>
                    <input type="text" name="nama_kop" class="form-control" value="{{ old('nama_kop') }}">
                </div>
                <div class="form-group mb-3">
                    <label for="alamat_kop">Alamat Kop</label>
                    <textarea name="alamat_kop" class="form-control">{{ old('alamat_kop') }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="nama_tujuan">Nama Tujuan</label>
                    <input type="text" name="nama_tujuan" class="form-control" value="{{ old('nama_tujuan') }}">
                </div>
                <div class="form-group mb-3">
                    <label for="user_id">User ID</label>
                    <select name="user_id" class="form-control">
                        <option value="">Pilih User</option>
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection