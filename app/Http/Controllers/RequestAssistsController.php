<?php

namespace App\Http\Controllers;

use App\Models\HealthFacility;
use App\Models\Incident;
use App\Models\Resource;
use Illuminate\Http\Request;

class RequestAssistsController extends Controller
{
    public function getIncidents()
    {
        $data = Incident::with('category')->where('status', '<', 9)->orderBy('created_at', 'desc')->get();
        return \DataTables::of($data)
            ->setRowClass(
                function ($data) {
                    $cls = '';
                    if ($data->status == 0) {
                        $cls = 'butuh-bantuan';
                    }

                    return $cls;
                }
            )
            ->addColumn('Aksi', function ($data) {
                $btnAmbulan = '';
                if ($data->status == 0) {
                    $btnAmbulan = '<a id="btn-req" class="btn btn-sm btn-success" data-id="' .
                        $data->id .
                        '" title="Request Bantuan" style="margin: 4px 3px;">
                                <i class="fa fa-ambulance "></i>
                            </a>';
                } else {
                    $btnAmbulan = '<a id="btn-lihat" class="btn btn-sm btn-info" data-id="' .
                        $data->id .
                        '" title="Lihat Detail" style="margin: 4px 3px; background-color: #8e44ad; border-color: #8e44ad;">
                                <i class="fa fa-eye"></i>
                         </a>';
                }
                return $btnAmbulan .
                    '
                     <a id="btn-detail" class="btn btn-sm btn-primary" data-id="' .
                    $data->id .
                    '" title="Detail Penanganan" style="margin: 4px 3px; background-color: #428bca; border-color: #428bca;">
                            <i class="fa fa-files-o"></i>
                        </a>
                        <br>
                        <a id="btn-edit" class="btn btn-sm btn-warning" data-id="' .
                    $data->id .
                    '" title="Edit Kejadian" style="margin: 4px 3px; background-color: #45b6e0; border-color: #45b6e0;">
                        <i class="fa fa-pencil-square-o"></i>
                        </a>
                    <a id="btn-monitor" class="btn btn-sm btn-danger" data-id="' .
                    $data->id .
                    '" title="Monitoring Penanganan" style="margin: 4px 3px; background-color: #89c4f4; border-color: #89c4f4;">
                <i class="fa fa-desktop"></i>
                </a>
                ';
            })
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->make(true);
    }
    public function getIncident($id)
    {
        $data = Incident::with('category')->find($id);
        return response()->json($data);
    }
    public function getNotif()
    {
        $data = Incident::where('status', '=', 0)->count();
        return response()->json($data);
    }
    public function index()
    {
        return view('kejadian_bantuan.req_bantuan');
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
        return view('kejadian_bantuan.detail_penanganan');
    }

    public function edit($id)
    {
        $data = Incident::find($id);
        $data['faskes'] = HealthFacility::orderBy('nama', 'asc')->get();
        $data['resources'] = Resource::with(['healthfacility' => function ($q) {
            $q->orderBy('nama', 'asc');
        }, 'sessions' => function ($q) {
            $q->orderBy('updated_at', 'desc');
        }])->where('status', '=', 0)->orderBy('kode', 'asc')->get();
        return response()->json($data);
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
