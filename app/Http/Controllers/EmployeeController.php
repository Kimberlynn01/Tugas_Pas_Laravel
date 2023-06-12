<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index() {

        $data = Employee::all();
        return view('absensi',[
            "title" => 'Absensi Siswa'
        ], compact('data'));
    }

    public function tambahabsensi() {
        return view('tambahabsensi',[
            "title" => 'Tambah Data Siswa',
        ]);
    }

    public function insertdata(request $request) {
        Employee::create($request->all());
        return redirect()->route('dashboard')->with('success','Data Absensi Siswa Berhasil Diisi');
    }

    public function editdata($id) {
        $data = Employee::find($id);
        return view('editdata', compact('data'),[
            "title" => 'Edit Data',
        ]);
    }

    public function updatedata(Request $request, $id) {
        $data = Employee::find($id);
        $data->update($request->all());

        return redirect()->route('dashboard')->with('success','Data Absensi Siswa Berhasil diUpdate');
    }

    public function hapusdata($id) {
        $data = Employee::find($id);
        $data->delete();
        
        return redirect()->route('dashboard')->with('success','Data Absensi Siswa Berhasil diHapus');
    }
}
