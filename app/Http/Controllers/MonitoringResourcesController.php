<?php

namespace App\Http\Controllers;

use App\Models\HealthFacility;
use App\Models\Resource;
use Illuminate\Http\Request;

class MonitoringResourcesController extends Controller
{
    public function getResourcesRealTime()
    {
        $data = Resource::with(['healthfacility', 'sessions' => function ($q) {
            $q->orderBy('updated_at', 'desc');
        }])
            ->orderBy('status', 'asc')->get();
        // dd(now()->diffInSeconds($data[0]->sessions[0]->updated_at));
        $resource['total'] = $resource['tersedia'] =  $resource['sibuk'] =  $resource['belumsiap'] = $resource['menujutkp'] = $resource['ditkp'] = $resource['menujurs'] = 0;
        $resource['data'] = '';
        foreach ($data as $d) {

            $cls = $clsfilter = ''; //0=ready, 1=menuju tkp, 2=di tkp, 3=menuju rs, 4=sibuk, 5=belum siap
            if ($d->status == 0 || $d->status == 5) {
                if (count($d->sessions) > 0) {
                    // if (now()->diffInSeconds($d->sessions[0]->updated_at) <= 5) {
                    if ($d->status != 0) {
                        Resource::find($d->id)->update(['status' => 0]);
                    }
                    $cls = 'success';
                    $clsfilter = 'tersedia';
                    $resource['tersedia']++;
                    // } else {
                    //     $cls = 'default';
                    // }
                } else {
                    if ($d->status != 5) {
                        Resource::find($d->id)->update(['status' => 5]);
                    }
                    $cls = 'default';
                    $clsfilter = 'belumsiap';
                    $resource['belumsiap']++;
                }
            } else if ($d->status == 1) {
                $cls = 'primary';
                $clsfilter = 'menujutkp';
                $resource['menujutkp']++;
            } else if ($d->status == 2) {
                $cls = 'warning';
                $clsfilter = 'ditkp';
                $resource['ditkp']++;
            } else if ($d->status == 3) {
                $cls = 'info';
                $clsfilter = 'menujurs';
                $resource['menujurs']++;
            } else if ($d->status == 4) {
                $cls = 'danger';
                $clsfilter = 'sibuk';
                $resource['sibuk']++;
            }

            $clsfilter .= ' kelas-' . strtolower($d->kelas) . ' ' . strtolower($d->jenis);
            $resource['data'] .= '
                    <div class="col-md-2 ' . $clsfilter . '" style="padding: 0px 7px; ">
                        <div class="btn btn-' . $cls . '" style="width: 100%; margin: 5px 0px; overflow:hidden;" data-id="' .
                $d->id . '">
                            <span style="font-size: 16px;">' . $d->nomor_polisi . '</span> <br> <span
                                style="font-size: 11px;">' . $d->healthfacility->nama . '</span>
                        </div>
                    </div>
            ';
            $resource['total']++;
        }
        return response()->json($resource);
    }
    public function getHFRealTime()
    {

        $data = HealthFacility::orderBy('status', 'desc')->orderBy('nama', 'asc')->get();
        // dd($data);
        $faskes['total'] = 0;
        $faskes['online'] = 0;
        $faskes['data'] = '';
        foreach ($data as $d) {
            $faskes['data'] .= '
                    <div class="col-md-2" style="padding: 0px 7px; ">
                        <div class="btn btn-default" style="width: 100%; overflow:hidden; margin: 5px 0px;" data-id="' .
                $d->id . '">
                            <span style="font-size: 16px;">' . $d->nama . '</span>
                        </div>
                    </div>
            ';
            $faskes['total']++;
        }
        return response()->json($faskes);
    }
    public function index()
    {
        return view('monitoring.monitoring_resources');
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
