<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Incident;
use Illuminate\Http\Request;

class InputIncidentsController extends Controller
{
    public function index()
    {
        $data['ccn'] = Incident::orderBy('created_at', 'desc')->get();
        $data['categories'] = Category::orderBy('kategori', 'asc')->get();
        return view('kejadian_bantuan.input_kejadian', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'lokasi' => 'required',
            'nama_pelapor' => 'required',
            'telp_pelapor' => 'required',
            'category_id' => 'required|numeric',
            'keterangan' => 'required'
        ], [
            'lokasi.required' => "Tentukan lokasi kejadian melalui peta yang tersedia",
            'nama_pelapor.required' => "Nama Pelapor harus diisi",
            'telp_pelapor.required' => "Telp Pelapor harus diisi",
            'category_id.required' => "Pilih kategori kejadian",
            'keterangan.required' => "Keterangan kejadian harus diisi"
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            Incident::create($request->all() + [
                'status' => 0,
                // 'calltaker_id' => session()->get('id')
                'calltaker_id' => 1
            ]);

            return response()->json(['success' => 'Data telah disimpan.']);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
