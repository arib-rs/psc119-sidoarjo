<?php

namespace App\Http\Controllers;

use App\Models\HealthFacility;
use Illuminate\Http\Request;

class HealthFacilitiesController extends Controller
{
    function kategori($index)
    {
        $kategori = [
            'cc' => 'Command Center',
            'pks' => 'Puskesmas',
            'klnk' => 'Klinik',
            'rs' => 'Rumah Sakit'
        ];

        return $kategori[$index];
    }
    public function getFaskes()
    {
        $data = HealthFacility::orderBy('nama', 'asc')->get();
        return \DataTables::of($data)
            ->editColumn('pict_url', function ($data) {
                $img = '-';
                if ($data->pict_url) {
                    $img = '<a href="' . url("/template/dist/img/" . $data->pict_url) . '"><img src="' . url("/template/dist/img/" . $data->pict_url) . '" style="max-width:100px"></a>';
                }
                return $img;
            })
            ->editColumn('kategori', function ($data) {
                return $this->kategori($data->kategori);
            })
            ->editColumn('is_fullday', function ($data) {

                $return = '<span class="text-success" style="font-size:20px">
                <i class="fa fa-check">
                </i>
                </span>
                ';
                if ($data->is_fullday != 1) {
                    $return = '<span class="text-danger" style="font-size:20px">
                <i class="fa fa-times">
                </i>
                </span>
                ';
                }
                return $return;
            })
            ->editColumn('is_has_ekg', function ($data) {

                $return = '<span class="text-success" style="font-size:20px">
                <i class="fa fa-check">
                </i>
                </span>
                ';
                if ($data->is_has_ekg != 1) {
                    $return = '<span class="text-danger" style="font-size:20px">
                <i class="fa fa-times">
                 </i>
                </span>
                ';
                }
                return $return;
            })
            ->editColumn('is_active', function ($data) {

                $return = '<a id="btn-aktif" class="btn btn-sm btn-success" data-id="' .
                    $data->id . '"  title="Nonaktifkan">
                <i class="fa fa-check">
                </i>
                </a>
                ';
                if ($data->is_active != 1) {
                    $return = '<a id="btn-aktif" class=btn btn-sm btn-danger" data-id="' .
                        $data->id . '" title="Aktifkan">
                <i class="fa fa-times">
                 </i>
                </a>
                ';
                }
                return $return;
            })
            ->addColumn('Bed', function ($data) {
                return '<a id="btn-bed" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Informasi Bed">
                <i class="glyphicon glyphicon-list"></i>
                </a>
                ';
            })
            ->addColumn('Dokter', function ($data) {
                return '<a id="btn-dokter" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Informasi Dokter">
                <i class="glyphicon glyphicon-list"></i>
                </a>
                ';
            })
            ->addColumn('Darah', function ($data) {
                return '<a id="btn-darah" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Informasi Darah">
                <i class="glyphicon glyphicon-list"></i>
                </a>
                ';
            })
            ->addColumn('Aksi', function ($data) {
                return '
                <div style="margin-bottom:3px;">
                <a id="btn-edit-faskes" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Edit Data">
                <i class="fa fa-pencil"></i>
                </a>
                <a id="btn-delete-faskes" class="btn btn-sm btn-danger" data-id="' .
                    $data->id .
                    '" title="Hapus Data">
                <i class="fa fa-trash"></i>
                </a>
                </div>
                <div>
                <a id="" class="btn btn-sm btn-success" data-id="' .
                    $data->id .
                    '" title="Edit Profesi">
                <i class="fa fa-user"></i>
                </a>
                <a id="" class="btn btn-sm btn-success" data-id="' .
                    $data->id .
                    '" title="Edit Shift">
                <i class="fa fa-clock-o"></i>
                </a>
                </div>
                ';
            })
            ->rawColumns(['Aksi', 'is_fullday', 'is_has_ekg', 'is_active', 'Bed', 'Dokter', 'Darah', 'pict_url'])
            ->addIndexColumn()
            ->make(true);
    }
    public function index()
    {
        return view('master.faskes');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'nama' => 'required',
            // 'alamat' => 'required',
            'kategori' => 'required',
            'is_fullday' => 'required',
            'is_has_ekg' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            HealthFacility::create([
                'nama' => $request->nama,
                // 'alamat' => $request->alamat,
                'kategori' => $request->kategori,
                'is_fullday' => $request->is_fullday,
                'is_has_ekg' => $request->is_has_ekg,
                'keterangan' => $request->keterangan,
                'phone_num' => $request->phone_num,
                'contact_person' => $request->contact_person,
                'email' => $request->email,
                'status' => $request->status,
                'is_active' => "1"
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
        $data = HealthFacility::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'nama' => 'required',
            // 'alamat' => 'required',
            'kategori' => 'required',
            'is_fullday' => 'required',
            'is_has_ekg' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        HealthFacility::find($id)->update([
            'nama' => $request->nama,
            // 'alamat' => $request->alamat,
            'kategori' => $request->kategori,
            'is_fullday' => $request->is_fullday,
            'is_has_ekg' => $request->is_has_ekg,
            'keterangan' => $request->keterangan,
            'phone_num' => $request->phone_num,
            'contact_person' => $request->contact_person,
            'email' => $request->email,
            'status' => $request->status,
            'is_active' => "1"
        ]);

        return response()->json(['success' => 'Data telah diubah.']);
    }

    public function destroy($id)
    {
        HealthFacility::find($id)->delete();
        return response()->json(['success' => 'Data telah dihapus.']);
    }
}
