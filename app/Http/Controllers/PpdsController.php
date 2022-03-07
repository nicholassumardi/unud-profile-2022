<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Ppds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PpdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->dataView['dataPpds'] = Ppds::all();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_profil.ppds.index', $this->dataView);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        // return view('admin.edit_profil.ppds.create', $this->dataView);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if ($request->hasFile('path_foto_ppds')) { // Jika foto ada
        //     if ($this->isMimeFileMatches(
        //         [$request->path_foto_ppds],
        //         ['image/jpeg', 'image/png']
        //     )) {
        //         $request->validate([
        //             'nama' => 'required',
        //             'ttl' => 'required',
        //             'path_foto_ppds' => 'required',
        //             'status' => 'required',
        //             'content' => 'required',
        //         ]);


        //         Ppds::create([
        //             'nama' => $request->nama,
        //             'ttl' => $request->ttl,
        //             'path_foto_ppds' => $request->path_foto_ppds->store('images/ppds', 'public'),
        //             'status' => $request->status,
        //             'content' => $request->content
        //         ]);
        //     } else {
        //         return redirect()->route('ppds_lulusan.index')
        //             ->with('error', 'Failed to create Data, Picture in wrong format');
        //     }
        // }
        // return redirect()->route('ppds_lulusan.index')
        //     ->with('success', 'Data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        $this->dataView['dp'] = Ppds::where('id_ppds', $id)->first();
        return view('admin.edit_profil.ppds.edit', $this->dataView);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('path_foto_ppds')) { // Jika foto ada
            if ($this->isMimeFileMatches(
                [$request->path_foto_ppds],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    // 'nama' => 'required',
                    // 'ttl' => 'required',
                    'path_foto_ppds' => 'required',
                    // 'status' => 'required',
                    // 'content' => 'required',
                ]);

                Ppds::where('id_ppds', $id)->update([
                    // 'nama' => $request->nama,
                    // 'ttl' => $request->ttl,
                    'path_foto_ppds' => $request->path_foto_ppds->store('images/ppds', 'public'),
                    // 'status' => $request->status,
                    // 'content' => $request->content
                ]);
            } else {
                return redirect()->route('ppds_lulusan.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        }
        // } else {
        //     $request->validate([
        //         'nama' => 'required',
        //         'ttl' => 'required',
        //         'status' => 'required',
        //         'content' => 'required',
        //     ]);


        //     Ppds::where('id_ppds', $id)->update([
        //         'nama' => $request->nama,
        //         'ttl' => $request->ttl,
        //         'status' => $request->status,
        //         'content' => $request->content
        //     ]);
        // }
        return redirect()->route('ppds_lulusan.index')
            ->with('success', 'Data edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Ppds::where('id_ppds', $id)->delete();
        // return redirect()->route('ppds_lulusan.index')
        //     ->with('success', 'Data deleted successfully.');
    }
}
