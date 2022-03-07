<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->dataView['dataVisimisi'] = VisiMisi::all();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_home.section2.index', $this->dataView);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $this->dataView['dataVisimisi'] = VisiMisi::where('id_visimisi', $id)->first();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_home.section2.edit', $this->dataView);
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
        if ($this->isMimeFileMatches(
            [$request->path_foto_visimisi],
            ['image/jpeg', 'image/png']
        )) {
            $request->validate([
                'path_foto_visimisi' => 'required',
            ]);

            VisiMisi::where('id_visimisi', $id)->update([
                'path_foto_visimisi' => $request->path_foto_visimisi->store('images/visimisi', 'public')
            ]);
        } else {
            return redirect()->route('section2.index')
                ->with('error', 'Failed to edit Data, Picture in wrong format');
        }
        return redirect()->route('section2.index')
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
        //
    }
}
