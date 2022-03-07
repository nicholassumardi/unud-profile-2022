<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Carousel;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth.admin')->only(['index']);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->dataView['dataNews'] = array();
        for ($i = 1; $i <= 12; $i++) {
            $this->dataView['dataNews'][$i] = Carousel::whereMonth('created_at', $i)->whereYear('created_at', date('Y'))->count();
        }
        $this->dataView['activeNewsCount'] = Carousel::where('status', 1)->count();
        $this->dataView['inactiveNewsCount'] = Carousel::where('status', 0)->count();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.admin_dashboard.index', $this->dataView);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
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
        //
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
