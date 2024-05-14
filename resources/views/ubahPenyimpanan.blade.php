@extends('layout')

@section('content')
    <section>
        <h2 class="text-center my-5">Form Input</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card" style="max-width: 500px; margin: auto;">
            <form class="p-3" method="POST" action="{{ route('penyimpanan.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="isian" class="form-label">Isian</label>
                    <input type="text" class="form-control" id="isian" name="isian" value="{{ old('isian') }}">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomor Hp</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}">
                </div>
                <div class="mb-3">
                    <label for="moto_kerja" class="form-label">moto_kerja</label>
                    <input type="text" class="form-control" id="moto_kerja" name="moto_kerja"
                        value="{{ old('moto_kerja') }}">
                </div>
                <button type="submit" value="submit" class="btn btn-success">Submit data</button>
                <a class="btn btn-warning" href="{{ route('penyimpanan.index') }}">Kembali</a>
            </form>
        </div>
    </section>
@endSection
