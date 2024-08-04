@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Surat Masuk</div>

                <div class="card-body">
                    <form action="{{ route('surat_masuk.update', $suratMasuk->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="id_kop">Kepala Surat</label>
                            <select name="id_kop" id="id_kop" class="form-control @error('id_kop') is-invalid @enderror">
                                @foreach ($kepalaSurat as $kepalasurat)
                                <option value="{{ $kepalasurat->id }}" {{ $suratMasuk->id_kop == $kepalasurat->id ? 'selected' : '' }}>{{ $kepalasurat->nama_kop }}</option>
                                @endforeach
                            </select>
                            @error('id_kop')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ $suratMasuk->tanggal }}">
                            @error('tanggal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_surat">Nomor Surat</label>
                            <input type="text" name="no_surat" id="no_surat" class="form-control @error('no_surat') is-invalid @enderror" value="{{ $suratMasuk->no_surat }}">
                            @error('no_surat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="asal_surat">Asal Surat</label>
                            <input type="text" name="asal_surat" id="asal_surat" class="form-control @error('asal_surat') is-invalid @enderror" value="{{ $suratMasuk->asal_surat }}">
                            @error('asal_surat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="perihal">Perihal</label>
                            <input type="text" name="perihal" id="perihal" class="form-control @error('perihal') is-invalid @enderror" value="{{ $suratMasuk->perihal }}">
                            @error('perihal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="disp1">Disposisi 1</label>
                            <input type="text" name="disp1" id="disp1" class="form-control @error('disp1') is-invalid @enderror" value="{{ $suratMasuk->disp1 }}">
                            @error('disp1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="disp2">Disposisi 2</label>
                            <input type="text" name="disp2" id="disp2" class="form-control @error('disp2') is-invalid @enderror" value="{{ $suratMasuk->disp2 }}">
                            @error('disp2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="id_tandatangan">Tanda Tangan</label>
                            <select name="id_tandatangan" id="id_tandatangan" class="form-control @error('id_tandatangan') is-invalid @enderror">
                                @foreach ($namaTandatgn as $tandatangan)
                                <option value="{{ $tandatangan->id }}" {{ $suratMasuk->id_tandatangan == $tandatangan->id ? 'selected' : '' }}>{{ $tandatangan->nama_tandatangan }}</option>
                                @endforeach
                            </select>
                            @error('id_tandatangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Gambar</label>
                            <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Gambar Saat Ini:</label><br>
                            <img src="{{ asset('storage/' . $suratMasuk->image) }}" alt="{{ $suratMasuk->no_surat }}" style="max-width: 300px;">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection