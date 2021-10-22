<?php

namespace App\Http\Controllers;

use App\Output;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OutputController extends Controller
{
    public function index()
    {
        //load data
        $output = DB::table('outputs')->get();
        //buka halaman dan kirim data, kirim data = compact

        return view('output/index', compact('output'));
    }

    public function create()
    {
        return view(
            'output/form',
            [
                'url' => 'output.store'
            ]
        );
    }
    public function store(Request $request, Output $output)
    {
        // dd($request->all());
        $request->validate([
            'name'     => 'required',

        ]);
        $output->name = $request->input('name');
        $output->save();

        return redirect()
            ->route('output')
            ->with('message', 'Data berhasil ditambahkan');
    }

    public function edit(Output $output)
    {
        return view(
            'output/form',
            [
                'url' => 'output.update',
                'output' => $output,

            ]
        );
    }

    public function update(Request $request, Output $output)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()
                ->route('output.update', $output->id)
                ->withErrors($validator)
                ->withInput();
        } else {
            // dd($target->id);
            $output->name = $request->input('name');
            $output->save();

            return redirect()
                ->route('output')
                ->with('message', 'Data berhasil diedit');
        }
    }

    public function destroy(Output $output)
    {
        $output->forceDelete();
        return redirect()
            ->route('output')
            ->with('message', 'Data berhasil dihapus');
    }

    // public function create()
    // {
    //     $outputs = Output::pluck('name', 'id');
    //     return view('kelolaoutput.create', compact('outputs'));
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //     ]);
    //     output::create([
    //         'name' => $request->name,
    //     ]);
    //     return redirect()->route('kelolaoutput.index');
    // }

    // public function show($id)
    // {
    //     //
    // }

    // public function edit($id)
    // {
    //     $outputs = Output::find($id);
    //     return view('kelolaoutput.edit', compact('outputs'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'name' => 'required',

    //     ]);
    //     $output = Output::find($id);
    //     $output->update([
    //         'name' => $request->name,

    //     ]);
    //     return redirect()->route('kelolaoutput.index');
    // }

    // public function destroy($id)
    // {
    //     $output = Output::find($id);
    //     $output->delete();

    //     return redirect()->route('kelolaoutput.index');
    // }
}
