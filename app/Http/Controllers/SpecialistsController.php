<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistsController extends Controller
{
    public function getSpesialis()
    {
        $data = Specialist::orderBy('id', 'asc')->get();
        return \DataTables::of($data)
            ->addColumn('Aksi', function ($data) {
                return '
                <div style="margin-bottom:3px;">
                <a id="btn-edit-spesialis" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Edit Data">
                <i class="fa fa-pencil"></i>
                </a>
                <a id="btn-delete-spesialis" class="btn btn-sm btn-danger" data-id="' .
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

    public function getLayanan()
    {
        $data = Service::orderBy('id', 'asc')->get();
        return \DataTables::of($data)
            ->addColumn('Aksi', function ($data) {
                return '
                <div style="margin-bottom:3px;">
                <a id="btn-edit-layanan" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Edit Data">
                <i class="fa fa-pencil"></i>
                </a>
                <a id="btn-delete-layanan" class="btn btn-sm btn-danger" data-id="' .
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
        return view('master.spesialisasi_dokter');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'spesialis' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            Specialist::create([
                'spesialis' => $request->spesialis
            ]);

            return response()->json(['success' => 'Data telah disimpan.']);
        }
    }

    public function storeLayanan(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'layanan' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            Service::create([
                'layanan' => $request->layanan
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
        $data = Specialist::find($id);
        return response()->json($data);
    }

    public function editLayanan($id)
    {
        $data = Service::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'spesialis' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        Specialist::find($id)->update([
            'spesialis' => $request->spesialis
        ]);

        return response()->json(['success' => 'Data telah diubah.']);
    }

    public function updateLayanan(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'layanan' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        Service::find($id)->update([
            'layanan' => $request->layanan
        ]);

        return response()->json(['success' => 'Data telah diubah.']);
    }

    public function destroy($id)
    {
        Specialist::find($id)->delete();
        return response()->json(['success' => 'Data telah dihapus.']);
    }

    public function destroyLayanan($id)
    {
        Service::find($id)->delete();
        return response()->json(['success' => 'Data telah dihapus.']);
    }
}
