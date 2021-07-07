<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\MedicineCategory;
use App\Models\MedicinePackaging;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicinesController extends Controller
{
    public function getDataPackagingCategory()
    {
        $data_packaging = MedicinePackaging::select('id', 'kemasan')->orderBy('id', 'asc')->get();
        $data_category = MedicineCategory::select('id', 'kategori')->orderBy('id', 'asc')->get();
        $data['packaging'] = "<option value=''>Pilih Kemasan</option>";
        $data['category'] = "<option value=''>Pilih Kategori</option>";
        foreach ($data_packaging as $dp) {
            $data['packaging'] .= "<option value='" . $dp->id . "'>" . $dp->kemasan . "</option>";
        }
        foreach ($data_category as $dc) {
            $data['category'] .= "<option value='" . $dc->id . "'>" . $dc->kategori . "</option>";
        }
        // dd($data);
        return response()->json($data);
    }

    public function getObat()
    {
        $data = $data = Medicine::with('packaging', 'category')->orderBy('id', 'asc')->get();
        return \DataTables::of($data)
            ->addColumn('Aksi', function ($data) {
                return '
                <div style="margin-bottom:3px;">
                <a id="btn-edit-obat" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Edit Data">
                <i class="fa fa-pencil"></i>
                </a>
                <a id="btn-delete-obat" class="btn btn-sm btn-danger" data-id="' .
                    $data->id .
                    '" title="Hapus Data">
                <i class="fa fa-trash"></i>
                </a>
                </div>
                ';
            })
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->make(true);
    }

    public function getKemasan()
    {
        $data = MedicinePackaging::orderBy('id', 'asc')->get();
        return \DataTables::of($data)
            ->addColumn('Aksi', function ($data) {
                return '
                <div style="margin-bottom:3px;">
                <a id="btn-edit-kemasan" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Edit Data">
                <i class="fa fa-pencil"></i>
                </a>
                <a id="btn-delete-kemasan" class="btn btn-sm btn-danger" data-id="' .
                    $data->id .
                    '" title="Hapus Data">
                <i class="fa fa-trash"></i>
                </a>
                </div>
                ';
            })
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->make(true);
    }

    public function getKategori()
    {
        $data = MedicineCategory::orderBy('id', 'asc')->get();
        return \DataTables::of($data)
            ->addColumn('Aksi', function ($data) {
                return '
                <div style="margin-bottom:3px;">
                <a id="btn-edit-kategori" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Edit Data">
                <i class="fa fa-pencil"></i>
                </a>
                <a id="btn-delete-kategori" class="btn btn-sm btn-danger" data-id="' .
                    $data->id .
                    '" title="Hapus Data">
                <i class="fa fa-trash"></i>
                </a>
                </div>
                ';
            })
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->make(true);
    }

    public function index()
    {
        return view('master.obat');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'nama' => 'required',
            'medicine_packaging_id' => 'required',
            'medicine_category_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            Medicine::create([
                'nama' => $request->nama,
                'medicine_packaging_id' => $request->medicine_packaging_id,
                'medicine_category_id' => $request->medicine_category_id,
                'keterangan' => $request->keterangan
            ]);

            return response()->json(['success' => 'Data telah disimpan.']);
        }
    }

    public function storeKemasan(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'kemasan' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            MedicinePackaging::create([
                'kemasan' => $request->kemasan
            ]);

            return response()->json(['success' => 'Data telah disimpan.']);
        }
    }

    public function storeKategori(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'kategori' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            MedicineCategory::create([
                'kategori' => $request->kategori
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
        $data['medicine'] = Medicine::find($id);
        $data_packaging = MedicinePackaging::select('id', 'kemasan')->orderBy('id', 'asc')->get();
        $data_category = MedicineCategory::select('id', 'kategori')->orderBy('id', 'asc')->get();
        $data['packaging'] = "<option value=''>Pilih Kemasan</option>";
        $data['category'] = "<option value=''>Pilih Kategori</option>";
        foreach ($data_packaging as $dp) {
            $data['packaging'] .= "<option value='" . $dp->id . "'>" . $dp->kemasan . "</option>";
        }
        foreach ($data_category as $dc) {
            $data['category'] .= "<option value='" . $dc->id . "'>" . $dc->kategori . "</option>";
        }
        // dd($data);
        return response()->json($data);
    }

    public function editKemasan($id)
    {
        $data = MedicinePackaging::find($id);
        return response()->json($data);
    }

    public function editKategori($id)
    {
        $data = MedicineCategory::find($id);
        // dd($data);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'nama' => 'required',
            'medicine_packaging_id' => 'required',
            'medicine_category_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        Medicine::find($id)->update([
            'nama' => $request->nama,
            'medicine_packaging_id' => $request->medicine_packaging_id,
            'medicine_category_id' => $request->medicine_category_id,
            'keterangan' => $request->keterangan
        ]);

        return response()->json(['success' => 'Data telah diubah.']);
    }

    public function updateKemasan(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'kemasan' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        MedicinePackaging::find($id)->update([
            'kemasan' => $request->kemasan
        ]);

        return response()->json(['success' => 'Data telah diubah.']);
    }

    public function updateKategori(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'kategori' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        MedicineCategory::find($id)->update([
            'kategori' => $request->kategori
        ]);

        return response()->json(['success' => 'Data telah diubah.']);
    }

    public function destroy($id)
    {
        Medicine::find($id)->delete();
        return response()->json(['success' => 'Data telah dihapus.']);
    }

    public function destroyKemasan($id)
    {
        MedicinePackaging::find($id)->delete();
        return response()->json(['success' => 'Data telah dihapus.']);
    }

    public function destroyKategori($id)
    {
        MedicineCategory::find($id)->delete();
        return response()->json(['success' => 'Data telah dihapus.']);
    }
}
