<?php

namespace App\Http\Controllers;

use App\Models\RShift;
use Illuminate\Http\Request;

class RShiftsController extends Controller
{
    public function index()
    {
        return view('master.shift');
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
