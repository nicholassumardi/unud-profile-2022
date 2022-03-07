<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Sejarah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->dataView['dataSejarah'] = Sejarah::all();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_profil.sejarah.index', $this->dataView);
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
        $this->dataView['sejarah'] = Sejarah::where('id_sejarah', $id)->first();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_profil.sejarah.edit', $this->dataView);
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

        $request->validate([
            'content' => 'required',
        ]);
        Sejarah::where('id_sejarah', $id)->update([
            'content' => $request->content
        ]);
        return redirect()->route('sejarah.index')
            ->with('success', 'Sejarah edited successfully.');
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
