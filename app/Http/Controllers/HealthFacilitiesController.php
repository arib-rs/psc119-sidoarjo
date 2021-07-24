<?php

namespace App\Http\Controllers;

use App\Models\HealthFacility;
use App\Models\HFProfession;
use App\Models\Profession;
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
                    $img = '<a href="' . url("upload-photo/faskes/" . $data->pict_url) . '" target="_blank">
                    <img src="' . url("upload-photo/faskes/" . $data->pict_url) . '" style="max-width:100px"></a>';
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
                return '<a href="' . url('faskes/' . $data->id . '/beds') . '" id="btn-bed" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Informasi Bed">
                <i class="glyphicon glyphicon-list"></i>
                </a>
                ';
            })
            ->addColumn('Dokter', function ($data) {
                return '<a href="' . url('faskes/' . $data->id . '/doctors') . '" id="btn-doctor" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Informasi Dokter">
                <i class="glyphicon glyphicon-list"></i>
                </a>
                ';
            })
            ->addColumn('Darah', function ($data) {
                return '<a href="' . url('faskes/' . $data->id . '/bloodbags') . '"id="btn-bloodbag" class="btn btn-sm btn-primary" data-id="' .
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
                <a id="btn-edit-profesi" class="btn btn-sm btn-success" data-id="' .
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
    public function getBeds($idfaskes)
    {
        $data = HealthFacility::with('beds')->where('id', '=', $idfaskes)->orderBy('id', 'asc')->first();
        // dd($data->beds);
        $data = $data->beds;
        return \DataTables::of($data)
            ->addColumn('Aksi', function ($data) {
                return '
                <div style="margin-bottom:3px;">
                <a id="btn-edit-bed" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Edit Data">
                <i class="fa fa-pencil"></i>
                </a>
                <a id="btn-delete-bed" class="btn btn-sm btn-danger" data-id="' .
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
    public function showBeds($idfaskes)
    {
        $data['idfaskes'] = $idfaskes;
        return view('master.detail_faskes.bed', $data);
    }
    public function getDoctors($idfaskes)
    {
        $data = HealthFacility::with('doctors')->where('id', '=', $idfaskes)->orderBy('id', 'asc')->first();
        $data = $data->doctors;
        return \DataTables::of($data)
            ->addColumn('Aksi', function ($data) {
                return '
                <div style="margin-bottom:3px;">
                <a id="btn-edit-doctor" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Edit Data">
                <i class="fa fa-pencil"></i>
                </a>
                <a id="btn-delete-doctor" class="btn btn-sm btn-danger" data-id="' .
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
    public function showDoctors($idfaskes)
    {
        $data['idfaskes'] = $idfaskes;
        return view('master.detail_faskes.dokter', $data);
    }
    public function getBloodBags($idfaskes)
    {
        $data = HealthFacility::with('bloodBags')->where('id', '=', $idfaskes)->orderBy('id', 'asc')->first();
        $data = $data->bloodBags;
        return \DataTables::of($data)
            ->addColumn('Aksi', function ($data) {
                return '
                <div style="margin-bottom:3px;">
                <a id="btn-edit-bloodbag" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Edit Data">
                <i class="fa fa-pencil"></i>
                </a>
                <a id="btn-delete-bloodbag" class="btn btn-sm btn-danger" data-id="' .
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
    public function showBloodBags($idfaskes)
    {
        $data['idfaskes'] = $idfaskes;
        return view('master.detail_faskes.darah', $data);
    }
    public function getProfessions()
    {
        $data = Profession::orderBy('tipe_user', 'desc')->orderBy('profesi', 'asc')->get();
        return \DataTables::of($data)
            ->addColumn('Aksi', function ($data) {
                return '
                    <input type="checkbox" id="profesi' . $data->id . '" name="profesi[' . $data->id . ']" value="' . $data->id . '">
                ';
            })
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->make(true);
    }
    public function editProfessions($id)
    {
        $data = HFProfession::select('profession_id')->where('health_facility_id', '=', $id)->get();
        return response()->json($data);
    }
    public function updateProfessions(Request $request)
    {
        HFProfession::where('health_facility_id', '=', $request->id)->delete();
        foreach ($request->profesi as $d) {
            HFProfession::create([
                'health_facility_id' => $request->id,
                'profession_id' => $d
            ]);
        }
        return response()->json(['success' => 'Data telah disimpan.']);
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
        // dd($request->all());
        $validator = \Validator::make($request->all(), [
            'nama' => 'required',
            // 'alamat' => 'required',
            'kategori' => 'required',
            'is_fullday' => 'required',
            'is_has_ekg' => 'required',
            'pict' => 'image|mimes:jpeg,png,jpg,bmp,gif|max:2048',
        ], [
            'is_fullday.required' => 'Pilih status 24 jam terlebih dahulu',
            'is_has_ekg.required' => 'Pilih status EKG terlebih dahulu'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            $kode = date('Y-md-His');
            $pict = null;
            if ($request->pict) {
                $pict = $kode . '.' . $request->pict->extension();
                $request->pict->move(public_path('upload-photo/faskes/'), $pict);
            }

            HealthFacility::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'kategori' => $request->kategori,
                'is_fullday' => $request->is_fullday,
                'is_has_ekg' => $request->is_has_ekg,
                'keterangan' => $request->keterangan,
                'phone_num' => $request->phone_num,
                'contact_person' => $request->contact_person,
                'email' => $request->email,
                'status' => $request->status,
                'is_active' => "1",
                'lng' => $request->lng,
                'lat' => $request->lat,
                'pict_url' => $pict
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
        // dd($request->all());
        $validator = \Validator::make($request->all(), [
            'nama' => 'required',
            // 'alamat' => 'required',
            'kategori' => 'required',
            'is_fullday' => 'required',
            'is_has_ekg' => 'required',
            'pict' => 'image|mimes:jpeg,png,jpg,bmp,gif|max:2048',
        ], [
            'is_fullday.required' => 'Pilih status 24 jam terlebih dahulu',
            'is_has_ekg.required' => 'Pilih status EKG terlebih dahulu'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }



        $faskes = HealthFacility::find($id);
        $pictpath = public_path() . "/upload-photo/faskes/" . $faskes->pict_url;

        $kode = date('Y-md-His');
        $pict = null;
        if ($request->pict) {
            if ($faskes->pict_url) {
                unlink($pictpath);
            }
            $pict = $kode . '.' . $request->pict->extension();
            $request->pict->move(public_path('upload-photo/faskes'), $pict);
        } else {
            if ($request->pict_url) {
                $pict = $request->pict_url;
            } else {
                if ($faskes->pict_url) {
                    unlink($pictpath);
                }
            }
        }
        HealthFacility::find($id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kategori' => $request->kategori,
            'is_fullday' => $request->is_fullday,
            'is_has_ekg' => $request->is_has_ekg,
            'keterangan' => $request->keterangan,
            'phone_num' => $request->phone_num,
            'contact_person' => $request->contact_person,
            'email' => $request->email,
            'status' => $request->status,
            'is_active' => "1",
            'lng' => $request->lng,
            'lat' => $request->lat,
            'pict_url' => $pict
        ]);

        return response()->json(['success' => 'Data telah diubah.']);
    }

    public function destroy($id)
    {
        HealthFacility::find($id)->delete();
        return response()->json(['success' => 'Data telah dihapus.']);
    }
}
