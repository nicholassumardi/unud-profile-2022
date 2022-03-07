<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->dataView['dataCarousel'] = Carousel::all();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_home.section1.index', $this->dataView);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.admin_news.create', $this->dataView);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('path_foto_carousel2') && $request->hasFile('path_foto_carousel3') && $request->hasFile('path_foto_carousel4')) {
            if (
                $this->isMimeFileMatches(
                    [
                        $request->path_foto_carousel2,
                        $request->path_foto_carousel3,
                        $request->path_foto_carousel4
                    ],
                    ['image/jpeg', 'image/png']
                )
            ) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'path_foto_carousel2' => 'required',
                    'path_foto_carousel3' => 'required',
                    'path_foto_carousel4' => 'required',
                ]);

                Carousel::create([
                    'status' => $request->status,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'isi_berita' => $request->isi_berita,
                    'path_foto_carousel2' => $request->path_foto_carousel2->store('images/carousel', 'public'),
                    'path_foto_carousel3' => $request->path_foto_carousel3->store('images/carousel', 'public'),
                    'path_foto_carousel4' => $request->path_foto_carousel4->store('images/carousel', 'public')
                ]);
            } else {
                return redirect()->route('news.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        } elseif ($request->hasFile('path_foto_carousel2') && $request->hasFile('path_foto_carousel3')) {

            if (
                $this->isMimeFileMatches(
                    [
                        $request->path_foto_carousel2,
                        $request->path_foto_carousel3
                    ],
                    ['image/jpeg', 'image/png']
                )
            ) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'path_foto_carousel2' => 'required',
                    'path_foto_carousel3' => 'required',

                ]);

                Carousel::create([
                    'status' => $request->status,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'isi_berita' => $request->isi_berita,
                    'path_foto_carousel2' => $request->path_foto_carousel2->store('images/carousel', 'public'),
                    'path_foto_carousel3' => $request->path_foto_carousel3->store('images/carousel', 'public'),
                ]);
            } else {
                return redirect()->route('news.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        } elseif ($request->hasFile('path_foto_carousel2' && $request->hasFile('path_foto_carousel 4'))) {
            if ($this->isMimeFileMatches(
                [
                    $request->path_foto_carousel2,
                    $request->path_foto_carousel4
                ],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'path_foto_carousel2' => 'required',
                    'path_foto_carousel4' => 'required',
                ]);

                Carousel::create([
                    'status' => $request->status,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'isi_berita' => $request->isi_berita,
                    'path_foto_carousel2' => $request->path_foto_carousel2->store('images/carousel', 'public'),
                    'path_foto_carousel4' => $request->path_foto_carousel4->store('images/carousel', 'public')
                ]);
            } else {
                return redirect()->route('news.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        } elseif ($request->hasFile('path_foto_carousel3') && $request->hasFile('path_foto_carousel4')) {
            if ($this->isMimeFileMatches(
                [
                    $request->path_foto_carousel3,
                    $request->path_foto_carousel4
                ],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'path_foto_carousel3' => 'required',
                    'path_foto_carousel4' => 'required',
                ]);

                Carousel::create([
                    'status' => $request->status,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'isi_berita' => $request->isi_berita,
                    'path_foto_carousel3' => $request->path_foto_carousel3->store('images/carousel', 'public'),
                    'path_foto_carousel4' => $request->path_foto_carousel4->store('images/carousel', 'public')
                ]);
            } else {
                return redirect()->route('news.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        } elseif ($request->hasFile('path_foto_carousel3')) {

            if ($this->isMimeFileMatches(
                [$request->path_foto_carousel3],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'path_foto_carousel3' => 'required',
                ]);

                Carousel::create([
                    'status' => $request->status,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'isi_berita' => $request->isi_berita,
                    'path_foto_carousel3' => $request->path_foto_carousel3->store('images/carousel', 'public'),
                ]);
            } else {
                return redirect()->route('news.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        } elseif ($request->hasFile('path_foto_carousel4')) {
            if ($this->isMimeFileMatches(
                [$request->path_foto_carousel4],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'path_foto_carousel4' => 'required',
                ]);

                Carousel::create([
                    'status' => $request->status,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'isi_berita' => $request->isi_berita,
                    'path_foto_carousel4' => $request->path_foto_carousel4->store('images/carousel', 'public')
                ]);
            } else {
                return redirect()->route('news.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        } elseif ($request->hasFile('path_foto_carousel2')) {
            if ($this->isMimeFileMatches(
                [$request->path_foto_carousel2],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'path_foto_carousel2' => 'required',
                ]);

                Carousel::create([
                    'status' => $request->status,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'isi_berita' => $request->isi_berita,
                    'path_foto_carousel2' => $request->path_foto_carousel2->store('images/carousel', 'public')
                ]);
            } else {
                return redirect()->route('news.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        }
        return redirect()->route('news.index')
            ->with('success', 'Data edited successfully.');
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
        $this->dataView['dataCarousel'] = Carousel::where('id_carousel', $id)->first();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.edit_home.section1.edit', $this->dataView);
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
            [$request->path_foto_carousel],
            ['image/jpeg', 'image/png']
        )) {
            $request->validate([
                'path_foto_carousel' => 'required',
            ]);

            Carousel::where('id_carousel', $id)->update([
                'content' => $request->content,
                'link' => $request->link,
                'path_foto_carousel' => $request->path_foto_carousel->store('images/carousel', 'public')
            ]);
        } else {
            return redirect()->route('section1.index')
                ->with('error', 'Failed to edit Data, Picture in wrong format');
        }
        return redirect()->route('section1.index')
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
    public function updateContent(Request $request, $id)
    {
        dd($request->all());
        if ($request->hasFile('path_foto_carousel2') && $request->hasFile('path_foto_carousel3') && $request->hasFile('path_foto_carousel4')) {
            if ($this->isMimeFileMatches(
                [
                    $request->path_foto_carousel2,
                    $request->path_foto_carousel3,
                    $request->path_foto_carousel4,
                ],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'path_foto_carousel2' => 'required',
                    'path_foto_carousel3' => 'required',
                    'path_foto_carousel4' => 'required',
                ]);

                Carousel::where('id_carousel', $id)->update([
                    'status' => $request->status,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'isi_berita' => $request->isi_berita,
                    'path_foto_carousel2' => $request->path_foto_carousel2->store('images/carousel', 'public'),
                    'path_foto_carousel3' => $request->path_foto_carousel3->store('images/carousel', 'public'),
                    'path_foto_carousel4' => $request->path_foto_carousel4->store('images/carousel', 'public')
                ]);
            } else {
                return redirect()->route('news.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        } elseif ($request->hasFile('path_foto_carousel2') && $request->hasFile('path_foto_carousel3')) {

            if ($this->isMimeFileMatches(
                [
                    $request->path_foto_carousel2,
                    $request->path_foto_carousel3,
                ],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'path_foto_carousel2' => 'required',
                    'path_foto_carousel3' => 'required',

                ]);

                Carousel::where('id_carousel', $id)->update([
                    'status' => $request->status,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'isi_berita' => $request->isi_berita,
                    'path_foto_carousel2' => $request->path_foto_carousel2->store('images/carousel', 'public'),
                    'path_foto_carousel3' => $request->path_foto_carousel3->store('images/carousel', 'public'),
                ]);
            } else {
                return redirect()->route('news.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        } elseif ($request->hasFile('path_foto_carousel2' && $request->hasFile('path_foto_carousel 4'))) {
            if ($this->isMimeFileMatches(
                [
                    $request->path_foto_carousel2,
                    $request->path_foto_carousel4,

                ],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'path_foto_carousel2' => 'required',
                    'path_foto_carousel4' => 'required',
                ]);

                Carousel::where('id_carousel', $id)->update([
                    'status' => $request->status,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'isi_berita' => $request->isi_berita,
                    'path_foto_carousel2' => $request->path_foto_carousel2->store('images/carousel', 'public'),
                    'path_foto_carousel4' => $request->path_foto_carousel4->store('images/carousel', 'public')
                ]);
            } else {
                return redirect()->route('news.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        } elseif ($request->hasFile('path_foto_carousel3') && $request->hasFile('path_foto_carousel4')) {
            if ($this->isMimeFileMatches(
                [
                    $request->path_foto_carousel3,
                    $request->path_foto_carousel4,
                ],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'path_foto_carousel3' => 'required',
                    'path_foto_carousel4' => 'required',
                ]);

                Carousel::where('id_carousel', $id)->update([
                    'status' => $request->status,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'isi_berita' => $request->isi_berita,
                    'path_foto_carousel3' => $request->path_foto_carousel3->store('images/carousel', 'public'),
                    'path_foto_carousel4' => $request->path_foto_carousel4->store('images/carousel', 'public')
                ]);
            } else {
                return redirect()->route('news.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        } elseif ($request->hasFile('path_foto_carousel3')) {

            if ($this->isMimeFileMatches(
                [$request->path_foto_carousel3],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'path_foto_carousel3' => 'required',
                ]);

                Carousel::where('id_carousel', $id)->update([
                    'status' => $request->status,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'isi_berita' => $request->isi_berita,
                    'path_foto_carousel3' => $request->path_foto_carousel3->store('images/carousel', 'public'),
                ]);
            } else {
                return redirect()->route('news.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        } elseif ($request->hasFile('path_foto_carousel4')) {
            if ($this->isMimeFileMatches(
                [$request->path_foto_carousel4],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'path_foto_carousel4' => 'required',
                ]);

                Carousel::where('id_carousel', $id)->update([
                    'status' => $request->status,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'isi_berita' => $request->isi_berita,
                    'path_foto_carousel4' => $request->path_foto_carousel4->store('images/carousel', 'public')
                ]);
            } else {
                return redirect()->route('news.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        } elseif ($request->hasFile('path_foto_carousel2')) {
            if ($this->isMimeFileMatches(
                [$request->path_foto_carousel2],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'path_foto_carousel2' => 'required',
                ]);

                Carousel::where('id_carousel', $id)->update([
                    'status' => $request->status,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'isi_berita' => $request->isi_berita,
                    'path_foto_carousel2' => $request->path_foto_carousel2->store('images/carousel', 'public')
                ]);
            } else {
                return redirect()->route('news.index')
                    ->with('error', 'Failed to edit Data, Picture in wrong format');
            }
        }
        return redirect()->route('news.index')
            ->with('success', 'Data edited successfully.');
    }
}
