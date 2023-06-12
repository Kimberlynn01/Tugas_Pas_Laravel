@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center pt-5 pb-5">
            <h1>Tambah Absensi Siswa</h1>
        </div>
    </div>
    <a href="/tambahabsensi" class="btn-add btn btn-btn-1">Add +</a>
    
    <a href="/tambahabsensi" class="btn-add btn btn-btn-1">Add +</a>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <div class="box-forms">
                    <form action="/insertdata" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="nama">Nama</label>
                        <br>
                        <input type="text" name="nama">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                            <option selected>Take One Option</option>
                            <option value="1">Laki</option>
                            <option value="2">Perempuan</option>
                        </select>

                        <button type="submit" class="btn btn-succes">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection