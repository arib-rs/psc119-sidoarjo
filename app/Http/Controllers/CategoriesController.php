<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getFormDataCategory()
    {
        $data_sub_category = SubCategory::select('id', 'sub_kategori')->orderBy('id', 'asc')->get();
        $data_category = Category::select('id', 'kategori')->whereNull('sub_category_id')->orderBy('id', 'desc')->get();
        $data['sub_category'] = "<option value=''>Pilih Sub Kategori</option>";
        $data['category'] = "<option value=''>Pilih Kategori</option>";
        foreach ($data_sub_category as $dsc) {
            $data['sub_category'] .= "<option value='" . $dsc->id . "'>" . $dsc->sub_kategori . "</option>";
        }
        foreach ($data_category as $dc) {
            $data['category'] .= "<option value='" . $dc->id . "'>" . $dc->kategori . "</option>";
        }
        // dd($data);
        return response()->json($data);
    }

    public function getKategori()
    {
        $data = Category::with('subcategory')->whereNotNull('sub_category_id')->orderBy('id', 'asc')->get();
        return \DataTables::of($data)
            ->editColumn('is_medis', function ($data) {
                $return = '<a id="btn-medis" class="btn btn-sm btn-success" data-id="' .
                    $data->id . '">
                <i class="fa fa-check">
                </i> Medis
                </a>
                ';
                if ($data->subcategory->is_medis != 1) {
                    $return = '<a id="btn-medis" class="btn btn-sm btn-danger" data-id="' .
                        $data->id . '">
                    <i class="fa fa-times">
                    </i> Non Medis
                    </a>
                    ';
                }
                return $return;
            })
            ->editColumn('is_emergency', function ($data) {
                $return = '<a id="btn-emergency" class="btn btn-sm btn-success" data-id="' .
                    $data->id . '">
                <i class="fa fa-check">
                </i> Emergency
                </a>
                ';
                if ($data->subcategory->is_emergency != 1) {
                    $return = '<a id="btn-emergency" class="btn btn-sm btn-danger" data-id="' .
                        $data->id . '">
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
        return view('master.kategori');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['kategori'] = Category::find($id);
        $data_sub_category = SubCategory::select('id', 'sub_kategori')->orderBy('id', 'asc')->get();
        $data_category = Category::select('id', 'kategori')->orderBy('id', 'desc')->get();
        $data['sub_category'] = "<option value=''>Pilih Sub Kategori</option>";
        $data['category'] = "<option value=''>Pilih Kategori</option>";
        foreach ($data_sub_category as $dsc) {
            $data['sub_category'] .= "<option value='" . $dsc->id . "'>" . $dsc->sub_kategori . "</option>";
        }
        foreach ($data_category as $dc) {
            $data['category'] .= "<option value='" . $dc->kategori . "'>" . $dc->kategori . "</option>";
        }
        // dd($data);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'kategori' => 'required',
            'sub_category_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        Category::find($id)->update([
            'sub_category_id' => $request->sub_category_id
        ]);

        return response()->json(['success' => 'Data telah simpan.']);
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return response()->json(['success' => 'Data telah dihapus.']);
    }
}
