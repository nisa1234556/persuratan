@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Edit Nama Tandatangan</h1>
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
            <form action="{{ route('nama_tandatgn.update', $namaTandatgn->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_tandatangan">Nama Tandatangan</label>
                    <input type="text" name="nama_tandatangan" class="form-control" value="{{ old('nama_tandatangan', $namaTandatgn->nama_tandatangan) }}" required>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan', $namaTandatgn->jabatan) }}" required>
                </div>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" name="nip" class="form-control" value="{{ old('nip', $namaTandatgn->nip) }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection