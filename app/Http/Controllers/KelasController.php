<?php

namespace App\Http\Controller;

use Iluminate\Http\Request;
use Iluminate\Support\Facades\Validator;

class KelasController extends Controller
{
    public function create (Request $request)
    {
        $validation = Validator::make($request->all(),[
            'nama_kelas' => 'required',
            'jurusan' => 'required'
        ]);

        if ($validation->fails()) {
            $errors = $validation->errors();
            return [
                'status' => 'error',
                'message' => $errors,
                'result' => null 
            ];
        }

        $result = \App\Kelas::create($request->all());
        if ($result){
            return[
                'status' => 'success',
                'message' => 'Data berhasil ditambahkan',
                'result' => $result
            ];

        } else {
        return [
            'status' => 'error',
            'message' => 'Data gagal ditambahkan',
            'result' => null
        ];
        }
    }

    public function read(Request $request)
    {
        $result = \App\Kelas::all();
        return [
            'satus' => 'success',
            'message' => '',
            'result' => $result
        ];
    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request$id)
            'nama_kelas' => 'required',
            'jurusan' => 'required'
        ];

        if ($validation->fails()) {
            $errors = $validation->errors();
            return [
                'status' => 'error',
                'message' => $errors,
                'result' => null
            ];
        }

        $kelas = \App\Kelas::find($id);
        if (empty ($kelas)) {
            return [
            'status' => 'error',
            'message' => 'Data tidak ditemukan',
            'result' => null
        ];
        $result = $kelas->update($request->all());
        if ($result) {
            return [
                'status'=> 'success',
                'message' => 'Data gagal diubah',
                'result' => null
            ];
        }
         $result = $kelas->update($request->all());
         if ($result) {
            return [
                'status' => 'errors',
                'message' => 'Data berhasil diubah',
                'result' => $result
            ];
        } else {
            return [
                'status' => 'error',
                'message' => 'Data gagal diubah',
                'result' => null
            ];
        }
    }

    public function delete(Request $request, $id)
    {
        $kelas = \App\Kelas::find($id);
        if (empty($kelas)) {
            return [
                'status' => 'error',
                'message' => 'Data tidak ditemukan',
                'result' => null
            ];
        }
        $result = $kelas->delete($id);
        if ($result) {
            return [
                'status' => 'success',
                'message' => 'Data gagal dihapus',
                'resul' => null
            ];
        }
    }

    
}