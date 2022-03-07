<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->dataView['dataStaff'] = Staff::all();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_profil.staff.index', $this->dataView);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        // return view('admin.edit_profil.staff.create', $this->dataView);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if ($request->hasFile('path_foto_staff')) { // Jika foto ada
        //     if ($this->isMimeFileMatches(
        //         [$request->path_foto_staff],
        //         ['image/jpeg', 'image/png']
        //     )) {
        //         $request->validate([
        //             // 'nama' => 'required',
        //             // 'ttl' => 'required',
        //             'path_foto_staff' => 'required',
        //             'content' => 'required',
        //         ]);


        //         Staff::create([
        //             // 'nama' => $request->nama,
        //             // 'ttl' => $request->ttl,
        //             'path_foto_staff' => $request->path_foto_staff->store('images/staff', 'public'),
        //             // 'content' => $request->content
        //         ]);
        //     } else {
        //         return redirect()->route('staffPengajar.index')
        //             ->with('error', 'Failed to create Data, Picture in wrong format');
        //     }
        // }
        // return redirect()->route('staffPengajar.index')
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
        $this->dataView['ds'] = Staff::where('id_staff', $id)->first();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_profil.staff.edit', $this->dataView);
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
        if ($request->hasFile('path_foto_staff')) { // Jika foto ada
            if ($this->isMimeFileMatches(
                [$request->path_foto_staff],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    // 'nama' => 'required',
                    // 'ttl' => 'required',
                    'path_foto_staff' => 'required',
                    // 'content' => 'required',
                ]);


                Staff::where('id_staff', $id)->update([
                    // 'nama' => $request->nama,
                    // 'ttl' => $request->ttl,
                    'path_foto_staff' => $request->path_foto_staff->store('images/staff', 'public'),
                    // 'content' => $request->content
                ]);
            } else {
                return redirect()->route('staffPengajar.index')
                    ->with('error', 'Failed to create Data, Picture in wrong format');
            }
        }
        // } else {
        //     $request->validate([
        //         'nama' => 'required',
        //         'ttl' => 'required',
        //         'path_foto_staff' => 'required',
        //         'content' => 'required',
        //     ]);


        //     Staff::where('id_staff', $id)->update([
        //         'nama' => $request->nama,
        //         'ttl' => $request->ttl,
        //         // 'content' => $request->content
        //     ]);
        // }
        return redirect()->route('staffPengajar.index')
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
        Staff::where('id_staff', $id)->delete();
        return redirect()->route('staffPengajar.index')
            ->with('success', 'Data deleted successfully.');
    }
}
