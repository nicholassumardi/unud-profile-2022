<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\CarouselNonAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarouselNonAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->dataView['dataCarousel'] = CarouselNonAkademik::all();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_nonakademik.carousel.index', $this->dataView);
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
        $this->dataView['dataCarousel'] = CarouselNonAkademik::where('id_carousel_nonakademik', $id)->first();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_nonakademik.carousel.edit', $this->dataView);
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
            [$request->path_foto_carousel_nonakademik],
            ['image/jpeg', 'image/png']
        )) {
            $request->validate([
                'path_foto_carousel_nonakademik' => 'required',
            ]);

            CarouselNonAkademik::where('id_carousel_nonakademik', $id)->update([
                'path_foto_carousel_nonakademik' => $request->path_foto_carousel_nonakademik->store('images/carousel-nonakademik', 'public')
            ]);
        } else {
            return redirect()->route('carouselNonAkademik.index')
                ->with('error', 'Failed to edit Data, Picture in wrong format');
        }
        return redirect()->route('carouselNonAkademik.index')
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
