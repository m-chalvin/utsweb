@extends('layout/app')

@section('title','Data Siswa')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Data Siswa</h1>
            
    <form method="post" action="/siswa">
    @csrf
        <div class="form-group">
            <label for="npm">Npm</label>
            <input type="text" class="form-control" id="npm" placeholder="Masukan npm" name="npm" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control" id="kelas" placeholder="Masukan kelas" name="kelas">
        </div>
        <button type="submit" class="btn btn-primary">create</button>
    </form>

        </div>
    </div>
</div>
@endsection