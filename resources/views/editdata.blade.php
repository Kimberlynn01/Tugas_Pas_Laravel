@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center pt-5 pb-5">
            <h1>Edit Absensi Siswa</h1>
        </div>
    </div>
    <a href="/tambahabsensi" class="btn-add btn btn-btn-1">Add +</a>

    <a href="/dashboard" class="btn-add btn btn-btn-1">Home</a>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <div class="box-forms">
                    <form action="/updatedata/{{ $data->id }}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama</label>
                          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="{{ $data->nama }}" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                          <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                            <option selected>{{ $data->jeniskelamin }}</option>
                            <option value="1">Laki</option>
                            <option value="2">Perempuan</option>
                          </select>
                        </div>
                        <button type="submit" class="btn-btn-add btn-primary mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection