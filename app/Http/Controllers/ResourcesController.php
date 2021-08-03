<?php

namespace App\Http\Controllers;

use App\Models\HealthFacility;
use App\Models\Resource;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function getAmbulan()
    {
        $data = Resource::with('healthfacility')->orderBy('health_facility_id', 'asc')->get();
        return \DataTables::of($data)
            ->editColumn('pict_url', function ($data) {
                $img = '-';
                if ($data->pict_url) {
                    $img = '<a href="' . url("upload-photo/ambulan/" . $data->pict_url) . '" target="_blank">
                    <img src="' . url("upload-photo/ambulan/" . $data->pict_url) . '" style="max-width:100px"></a>';
                }
                return $img;
            })
            ->editColumn('is_active', function ($data) {

                $return = '<a id="btn-aktif" class="btn btn-sm btn-success" data-id="' .
                    $data->id . '"  title="Nonaktifkan">
                <i class="fa fa-check">
                </i>
                </a>
                ';
                if ($data->is_active != 1) {
                    $return = '<a id="btn-non-aktif" class=btn btn-sm btn-danger" data-id="' .
                        $data->id . '" title="Aktifkan">
                <i class="fa fa-times">
                 </i>
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
            ->rawColumns(['Aksi', 'is_active', 'pict_url'])
            ->addIndexColumn()
            ->make(true);
    }

    public function getHealthFacilities()
    {
        $health_facility = HealthFacility::select('id', 'nama')->orderBy('id', 'asc')->get();
        $data['health_facilities'] = "<option value=''>Pilih Lokasi</option>";
        foreach ($health_facility as $hf) {
            $data['health_facilities'] .= "<option value='" . $hf->id . "'>" . $hf->nama . "</option>";
        }
        // dd($data);
        return response()->json($data);
    }

    public function index()
    {
        return view('master.ambulan');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = \Validator::make($request->all(), [
            'jenis' => 'required',
            'nomor_polisi' => 'required',
            'kode' => 'required',
            'kelas' => 'required',
            'tahun_produksi' => 'required',
            'merk' => 'required',
            'tahun_pakai' => 'required',
            'pict' => 'image|mimes:jpeg,png,jpg,bmp,gif|max:2048',
            // 'health_facility_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            $kode = date('Y-md-His');
            $pict = null;
            if ($request->pict) {
                $pict = $kode . '.' . $request->pict->extension();
                $request->pict->move(public_path('upload-photo/ambulan/'), $pict);
            }

            Resource::create([
                'jenis' => $request->jenis,
                'nomor_polisi' => $request->nomor_polisi,
                'kode' => $request->kode,
                'kelas' => $request->kelas,
                'tahun_produksi' => $request->tahun_produksi,
                'merk' => $request->merk,
                'tahun_pakai' => $request->tahun_pakai,
                'pict_url' => $pict,
                'klasifikasi' => $request->klasifikasi,
                'health_facility_id' => $request->health_facility_id
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
        $data['resources'] = Resource::find($id);
        $health_facility = HealthFacility::select('id', 'nama')->orderBy('id', 'asc')->get();
        $data['health_facilities'] = "";
        foreach ($health_facility as $hf) {
            $data['health_facilities'] .= "<option value='" . $hf->id . "'>" . $hf->nama . "</option>";
        }
        // dd($data);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validator = \Validator::make($request->all(), [
            'jenis' => 'required',
            'nomor_polisi' => 'required',
            'kode' => 'required',
            'kelas' => 'required',
            'tahun_produksi' => 'required',
            'tahun_pakai' => 'required',
            'health_facility_id' => 'required',
            'pict' => 'image|mimes:jpeg,png,jpg,bmp,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $ambulan = Resource::find($id);
        $pictpath = public_path() . "/upload-photo/ambulan/" . $ambulan->pict_url;

        $kode = date('Y-md-His');
        $pict = null;
        if ($request->pict) {
            if ($ambulan->pict_url) {
                unlink($pictpath);
            }
            $pict = $kode . '.' . $request->pict->extension();
            $request->pict->move(public_path('upload-photo/ambulan'), $pict);
        } else {
            if ($request->pict_url) {
                $pict = $request->pict_url;
            } else {
                if ($ambulan->pict_url) {
                    unlink($pictpath);
                }
            }
        }

        Resource::find($id)->update([
            'jenis' => $request->jenis,
            'nomor_polisi' => $request->nomor_polisi,
            'kode' => $request->kode,
            'kelas' => $request->kelas,
            'tahun_produksi' => $request->tahun_produksi,
            'merk' => $request->merk,
            'tahun_pakai' => $request->tahun_pakai,
            'pict_url' => $pict,
            'klasifikasi' => $request->klasifikasi,
            'health_facility_id' => $request->health_facility_id
        ]);

        return response()->json(['success' => 'Data telah diubah.']);
    }

    public function destroy($id)
    {
        Resource::find($id)->delete();
        return response()->json(['success' => 'Data telah dihapus.']);
    }
}
