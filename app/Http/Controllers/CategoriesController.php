<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getKategori()
    {
        $data = Category::with('subcategory')->orderBy('id', 'asc')->get();
        return \DataTables::of($data)
            ->editColumn('is_medis', function ($data) {
                $return = '<a id="btn-medis" class="btn btn-sm btn-success" data-id="' .
                    $data->id . '"  title="Ganti Non Medis?">
                <i class="fa fa-check">
                </i> Medis
                </a>
                ';
                if ($data->subcategory->is_medis != 1) {
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
                if ($data->subcategory->is_emergency != 1) {
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
