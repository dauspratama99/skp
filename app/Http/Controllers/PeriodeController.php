<?php

namespace App\Http\Controllers;

use App\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index()
    {
        //load data
        $periode= Periode::all();
        //buka halaman dan kirim data, kirim data = compact
        return view('kelolaperiode.index', compact('periode'));
    }

    public function create()
    {
       $periode=periode::pluck('start_date','finish_date');
        return view('kelolaperiode.create', compact('periode'));
    }

    public function store(Request $request)
    {
       $request->validate([
           'start_date'=>'required',
           'finish_date'=>'required'
       ]);
        periode::create([
            'start_date' => $request->start_date,
            'finish_date' => $request->finish_date
        ]);
        return redirect()->route('kelolaperiode.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id) 
    {
        $periode = periode::find($id);
        return view('kelolaperiode.edit', compact('periode'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'start_date'=>'required',
            'finish_date'=>'required'
        ]);
        $periode = periode::find($id);
        $periode->update([
            'start_date' => $request->start_date,
            'finish_date' => $request->finish_date
        ]);
         return redirect()->route('kelolaperiode.index');
    }

    public function destroy($id)
    {
        $periode = Periode::find($id);
        $periode->delete();

        return redirect()->route('kelolaperiode.index');
    }
}
