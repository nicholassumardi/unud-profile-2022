<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\KegiatanAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatanAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->dataView['dataKegiatan'] = KegiatanAkademik::all();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_akademik.kegiatan.index', $this->dataView);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        // return view('admin.edit_akademik.kegiatan.create', $this->dataView);
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
        //     [$request->path_foto_kegiatan_akademik],
        //     ['image/jpeg', 'image/png']
        // )) {
        //     $request->validate([
        //         'title' => 'required',
        //         'path_foto_kegiatan_akademik' => 'required',
        //     ]);

        //     KegiatanAkademik::create([
        //         'title' => $request->title,
        //         'path_foto_kegiatan_akademik' => $request->path_foto_kegiatan_akademik->store('images/kegiatan-akademik', 'public')
        //     ]);
        // } else {
        //     return redirect()->route('kegiatanAkademik.index')
        //         ->with('error', 'Failed to create Data, Picture in wrong format');
        // }

        // return redirect()->route('kegiatanAkademik.index')
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
        $this->dataView['dataKegiatan'] = KegiatanAkademik::where('id_kegiatan_akademik', $id)->first();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_akademik.kegiatan.edit', $this->dataView);
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
            [$request->path_foto_kegiatan_akademik],
            ['image/jpeg', 'image/png']
        )) {
            $request->validate([
                // 'title' => 'required',
                'path_foto_kegiatan_akademik' => 'required',
            ]);

            KegiatanAkademik::where('id_kegiatan_akademik', $id)->update([
                // 'title' => $request->title,
                'path_foto_kegiatan_akademik' => $request->path_foto_kegiatan_akademik->store('images/kegiatan-akademik', 'public')
            ]);
        } else {
            return redirect()->route('kegiatanAkademik.index')
                ->with('error', 'Failed to create Data, Picture in wrong format');
        }
        return redirect()->route('kegiatanAkademik.index')
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
        // KegiatanAkademik::where('id_kegiatan_akademik', $id)->delete();
        // return redirect()->route('kegiatanAkademik.index')
        //     ->with('success', 'Data deleted successfully.');
    }
}
