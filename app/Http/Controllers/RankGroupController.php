<?php

namespace App\Http\Controllers;

use App\RankGroup;
use Illuminate\Http\Request;

class RankGroupController extends Controller
{
    public function index()
    {
        //load data
        $rankGroups = RankGroup::all();
        //buka halaman dan kirim data, kirim data = compact
        return view('daftarPangkat.index', compact('rankGroups'));
    }

    public function create()
    {
       $rankGroup=RankGroup::pluck('name','id');
        return view('daftarPangkat.create', compact('rankGroup'));
    }

    public function store(Request $request)
    {
       $request->validate([
           'name'=>'required',
           'group'=>'required'
       ]);
        RankGroup::create([
            'name' => $request->name,
            'group' => $request->group
        ]);
        return redirect()->route('daftarpangkat.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $rankGroup = RankGroup::find($id);
        return view('daftarPangkat.edit', compact('rankGroup'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'group'=>'required'
        ]);
        $RankGroup = RankGroup::find($id);
        $RankGroup->update([
            'name' => $request->name,
            'group' => $request->group
        ]);
         return redirect()->route('daftarpangkat.index');
    }

    public function destroy($id)
    {
        $RankGroup = RankGroup::find($id);
        $RankGroup->delete();

        return redirect()->route('daftarpangkat.index');
    }

    
}
