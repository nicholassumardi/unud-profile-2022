<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\KegiatanNonAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatanNonAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->dataView['dataKegiatan'] = KegiatanNonAkademik::all();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_nonakademik.kegiatan.index', $this->dataView);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->dataView['dataKegiatan'] = KegiatanNonAkademik::all();
        // $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        // return view('admin.edit_nonakademik.kegiatan.create', $this->dataView);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if ($this->isMimeFileMatches(
        //     [$request->path_foto_kegiatan_nonakademik],
        //     ['image/jpeg', 'image/png']
        // )) {
        //     $request->validate([
        //         'title' => 'required',
        //         'path_foto_kegiatan_nonakademik' => 'required',
        //     ]);

        //     KegiatanNonAkademik::create([
        //         'title' => $request->title,
        //         'path_foto_kegiatan_nonakademik' => $request->path_foto_kegiatan_nonakademik->store('images/kegiatan-nonakademik', 'public')
        //     ]);
        // } else {
        //     return redirect()->route('kegiatanNonAkademik.index')
        //         ->with('error', 'Failed to create Data, Picture in wrong format');
        // }

        // return redirect()->route('kegiatanNonAkademik.index')
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
        $this->dataView['dataKegiatan'] = KegiatanNonAkademik::where('id_kegiatan_nonakademik', $id)->first();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_nonakademik.kegiatan.edit', $this->dataView);
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
            [$request->path_foto_kegiatan_nonakademik],
            ['image/jpeg', 'image/png']
        )) {
            $request->validate([

                'path_foto_kegiatan_nonakademik' => 'required',
            ]);

            KegiatanNonAkademik::where('id_kegiatan_nonakademik', $id)->update([
                'path_foto_kegiatan_nonakademik' => $request->path_foto_kegiatan_nonakademik->store('images/kegiatan-nonakademik', 'public')
            ]);
        } else {
            return redirect()->route('kegiatanNonAkademik.index')
                ->with('error', 'Failed to create Data, Picture in wrong format');
        }

        return redirect()->route('kegiatanNonAkademik.index')
            ->with('success', 'Data created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // KegiatanNonAkademik::where('id_kegiatan_nonakademik', $id)->delete();

        // return redirect()->route('kegiatanNonAkademik.index')
        //     ->with('success', 'Data deleted successfully.');
    }
}
