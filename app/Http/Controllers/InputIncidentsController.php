<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use Illuminate\Http\Request;

class InputIncidentsController extends Controller
{
    public function index()
    {
        $data['ccn'] = Incident::orderBy('created_at', 'desc')->get();
        $data['categories'] = '';
        return view('kejadian_bantuan.input_kejadian', $data);
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
