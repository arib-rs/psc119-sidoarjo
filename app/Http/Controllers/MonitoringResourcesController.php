<?php

namespace App\Http\Controllers;

use App\Models\HealthFacility;
use App\Models\Resource;
use Illuminate\Http\Request;

class MonitoringResourcesController extends Controller
{
    public function getResourcesRealTime()
    {
        $data = Resource::with('healthfacility')->orderBy('status', 'desc')->get();
        $resource['total'] = 0;
        $resource['data'] = '';
        foreach ($data as $d) {
            $resource['data'] .= '
                    <div class="col-md-2" style="padding: 0px 7px;">
                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;" data-id="' .
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
        $faskes['total'] = 0;
        $faskes['online'] = 0;
        $faskes['data'] = '';
        foreach ($data as $d) {
            $faskes['data'] .= '
                    <div class="col-md-2" style="padding: 0px 7px;">
                        <div class="btn btn-default" style="width: 100%; margin: 5px 0px;" data-id="' .
                $d->id . '">
                            <span style="font-size: 16px;">' . $d->nama . '</span> <br> <span
                                style="font-size: 11px;">' .  '-' . '</span>
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
