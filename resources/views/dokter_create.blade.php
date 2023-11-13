@extends('layouts.sbadmin2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">TAMBAH DOKTER</div>
                    <div class="card-body">
                        <form action="/dokter" method="POST">
                            @method('POST')
                            @csrf
                            <div class="form-group mt-1">
                                <label for="kode_dokter">Kode Dokter</label>
                                <input class="form-control" type="text" name="kode_dokter"
                                    value="{{ old('kode_dokter') }}">
                                <span class="text-danger">{{ $errors->first('kode_dokter') }}</span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="nama_dokter">Nama Dokter</label>
                                <input class="form-control" type="text" name="nama_dokter"
                                    value="{{ old('nama_dokter') }}">
                                <span class="text-danger">{{ $errors->first('nama_dokter') }}</span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="spesialis">Spesialis</label>
                                <select name="spesialis" class="form-control">
                                    @foreach ($list_sp as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('spesialis') }}</span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="nomor_hp">Nomor HP</label>
                                <input class="form-control" type="text" name="nomor_hp" value="{{ old('nomor_hp') }}">
                                <span class="text-danger">{{ $errors->first('nomor_hp') }}</span>
                            </div>
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection