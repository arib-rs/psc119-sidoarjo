<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    public function getSubKategori()
    {
        $data = SubCategory::orderBy('id', 'asc')->get();
        return \DataTables::of($data)
            ->editColumn('is_medis', function ($data) {
                $return = '<a id="btn-medis" class="btn btn-sm btn-success" data-id="' .
                    $data->id . '"  title="Ganti Non Medis?">
                <i class="fa fa-check">
                </i> Medis
                </a>
                ';
                if ($data->is_medis != 1) {
                    $return = '<a id="btn-medis" class="btn btn-sm btn-danger" data-id="' .
                        $data->id . '"  title="Ganti Medis?">
                    <i class="fa fa-times">
                    </i> Non Medis
                    </a>
                    ';
                }
                return $return;
            })
            ->editColumn('is_emergency', function ($data) {
                $return = '<a id="btn-emergency" class="btn btn-sm btn-success" data-id="' .
                    $data->id . '"  title="Ganti Non Emergency?">
                <i class="fa fa-check">
                </i> Emergency
                </a>
                ';
                if ($data->is_emergency != 1) {
                    $return = '<a id="btn-emergency" class="btn btn-sm btn-danger" data-id="' .
                        $data->id . '"  title="Ganti Emergency?">
                    <i class="fa fa-times">
                    </i> Non Emergency
                    </a>
                    ';
                }
                return $return;
            })
            ->addColumn('Aksi', function ($data) {
                return '
                <div style="margin-bottom:3px;">
                <a id="btn-edit" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Edit Data">
                <i class="fa fa-pencil"></i>
                </a>
                <a id="btn-delete" class="btn btn-sm btn-danger" data-id="' .
                    $data->id .
                    '" title="Hapus Data">
                <i class="fa fa-trash"></i>
                </a>
                </div>
                ';
            })
            ->rawColumns(['Aksi', 'is_emergency', 'is_medis'])
            ->addIndexColumn()
            ->make(true);
    }

    public function index()
    {
        return view('master.sub_kategori');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'sub_kategori' => 'required',
            'is_medis' => 'required',
            'is_emergency' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            SubCategory::create([
                'sub_kategori' => $request->sub_kategori,
                'is_medis' => $request->is_medis,
                'is_emergency' => $request->is_emergency
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
        $data = SubCategory::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'sub_kategori' => 'required',
            'is_medis' => 'required',
            'is_emergency' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        SubCategory::find($id)->update([
            'sub_kategori' => $request->sub_kategori,
            'is_medis' => $request->is_medis,
            'is_emergency' => $request->is_emergency
        ]);

        return response()->json(['success' => 'Data telah diubah.']);
    }

    public function destroy($id)
    {
        SubCategory::find($id)->delete();
        return response()->json(['success' => 'Data telah dihapus.']);
    }
}
