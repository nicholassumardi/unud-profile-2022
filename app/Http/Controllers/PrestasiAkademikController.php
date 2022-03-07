<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\PrestasiAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrestasiAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->dataView['dataPrestasi'] = PrestasiAkademik::all();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_akademik.prestasi.index', $this->dataView);
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
        $this->dataView['dataPrestasi'] = PrestasiAkademik::where('id_prestasi_akademik', $id)->first();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_akademik.prestasi.edit', $this->dataView);
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
        PrestasiAkademik::where('id_prestasi_akademik', $id)->update([
            'content' => $request->content
        ]);
        return redirect()->route('prestasiAkademik.index')
            ->with('success', 'Prestasi edited successfully.');
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
