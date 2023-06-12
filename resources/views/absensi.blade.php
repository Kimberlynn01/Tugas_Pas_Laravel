@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-12 text-center pt-5 pb-5">
          @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
          @endif
            <h1>Absensi</h1>
            
        </div>
    <a href="/tambahabsensi" class="btn-add btn btn-btn-1">Add +</a>
        <table class="table"> 
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Time</th>
                <th scope="col" style="padding-left: 15%">Handle</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $row)
              <tr class="tr-tr">
                <th scope="row" class="pt-4">{{ $row->id }}</th>
                <td class="pt-4">{{ $row->nama }}</td>
                <td class="pt-4">{{ $row->jeniskelamin }}</td>
                <td class="pt-4">{{ $row->created_at }}</td>
                <td  style="padding-left: 15%">
                  <a href="/hapusdata/{{ $row->id }}" class="btn-btn  btn">Delete</a>
                  <a href="/editdata/{{ $row->id }}"  class="btn btn-btn">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>

@endsection