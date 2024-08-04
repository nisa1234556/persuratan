@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Tambah Nama Tandatangan Baru</h1>
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
            <form action="{{ route('nama_tandatgn.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_tandatangan">Nama Tandatangan</label>
                    <input type="text" name="nama_tandatangan" class="form-control" value="{{ old('nama_tandatangan') }}" required>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan') }}" required>
                </div>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" name="nip" class="form-control" value="{{ old('nip') }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection