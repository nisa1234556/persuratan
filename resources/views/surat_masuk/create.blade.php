@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Surat Masuk Baru</div>

                <div class="card-body">
                    <form action="{{ route('surat_masuk.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="id_kop">Kepala Surat</label>
                            <select name="id_kop" id="id_kop" class="form-control @error('id_kop') is-invalid @enderror">
                                @foreach ($kepalaSurat as $kepalasurat)
                                <option value="{{ $kepalasurat->id }}">{{ $kepalasurat->nama_kop }}</option>
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
                            <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror">
                            @error('tanggal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_surat">Nomor Surat</label>
                            <input type="text" name="no_surat" id="no_surat" class="form-control @error('no_surat') is-invalid @enderror">
                            @error('no_surat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="asal_surat">Asal Surat</label>
                            <input type="text" name="asal_surat" id="asal_surat" class="form-control @error('asal_surat') is-invalid @enderror">
                            @error('asal_surat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="perihal">Perihal</label>
                            <input type="text" name="perihal" id="perihal" class="form-control @error('perihal') is-invalid @enderror">
                            @error('perihal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="disp1">Disposisi 1</label>
                            <input type="text" name="disp1" id="disp1" class="form-control @error('disp1') is-invalid @enderror">
                            @error('disp1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="disp2">Disposisi 2</label>
                            <input type="text" name="disp2" id="disp2" class="form-control @error('disp2') is-invalid @enderror">
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
                                <option value="{{ $tandatangan->id }}">{{ $tandatangan->nama_tandatangan }}</option>
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
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection