<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Carousel;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->dataView['news'] = News::all();
        $this->dataView['dataCarousel'] = Carousel::all();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.admin_news.index', $this->dataView);
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
        if ($request->hasFile('path_foto_berita')) { // Jika foto ada
            if ($this->isMimeFileMatches(
                [$request->path_foto_berita],
                ['image/jpeg', 'image/png']
            )) {
                $request->validate([
                    'judul_berita' => 'required',
                    'tanggal_berita' => 'required',
                    'isi_berita' => 'required',
                ]);

                $idAdmin = Admin::where('user_id', Auth::id())->first();

                News::create([
                    'admin_id' => $idAdmin->id_admin,
                    'judul_berita' => $request->judul_berita,
                    'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                    'path_foto_berita' => $request->path_foto_berita->store('images/berita/foto', 'public'),
                    'isi_berita' => $request->isi_berita
                ]);
            } else {
                return redirect()->route('news.create')
                    ->with('error', 'Failed to create News, Picture in wrong format');
            }
        } else {
            $request->validate([
                'judul_berita' => 'required',
                'tanggal_berita' => 'required',
                'isi_berita' => 'required',
            ]);

            $idAdmin = Admin::where('user_id', Auth::id())->first();

            News::create([
                'admin_id' => $idAdmin->id_admin,
                'judul_berita' => $request->judul_berita,
                'tanggal_berita' => date('Y-m-d', strtotime($request->tanggal_berita)),
                'isi_berita' => $request->isi_berita
            ]);
        }

        return redirect()->route('news.index')
            ->with('success', 'News created successfully.');
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
        $this->dataView['dc'] = Carousel::where('id_carousel', $id)->first();
        $this->dataView['admin'] = Admin::where('user_id', Auth::id())->first();
        return view('admin.admin_news.edit', $this->dataView);
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
        // if ($request->hasFile('path_foto_berita')) { // Jika foto ada
        //     if ($this->isMimeFileMatches(
        //         [$request->path_foto_berita],
        //         ['image/jpeg', 'image/png']
        //     )) {
        //         $request->validate([
        //             'judul_berita' => 'required',
        //             'tanggal_berita' => 'required',
        //             'isi_berita' => 'required',
        //             'status' => 'required',
        //         ]);

        //         $idAdmin = Admin::where('user_id', Auth::id())->first();

        //         News::where('id_news', $id)->update([
        //             'admin_id' => $idAdmin->id_admin,
        //             'judul_berita' => $request->judul_berita,
        //             'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
        //             'path_foto_berita' => $request->path_foto_berita->store('images/berita/foto', 'public'),
        //             'isi_berita' => $request->isi_berita,
        //             'status' => $request->status
        //         ]);
        //     } else {
        //         return redirect()->route('news.edit')
        //             ->with('error', 'Failed to create News, Picture in wrong format');
        //     }
        // } else {
        //     $request->validate([
        //         'judul_berita' => 'required',
        //         'tanggal_berita' => 'required',
        //         'isi_berita' => 'required',
        //         'status' => 'required',
        //     ]);

        //     $idAdmin = Admin::where('user_id', Auth::id())->first();
        //     News::where('id_news', $id)->update([
        //         'admin_id' => $idAdmin->id_admin,
        //         'judul_berita' => $request->judul_berita,
        //         'tanggal_berita' => date('Y-m-d', strtotime($request->tanggal_berita)),
        //         'isi_berita' => $request->isi_berita,
        //         'status' => $request->status
        //     ]);
        // }

        // return redirect()->route('news.index')
        //     ->with('success', 'News updated successfully.');
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
        } else {
            $request->validate([
                'judul_berita' => 'required',
                'tanggal_berita' => 'required',

            ]);

            Carousel::where('id_carousel', $id)->update([
                'status' => $request->status,
                'judul_berita' => $request->judul_berita,
                'tanggal_berita' => date('d-m-Y', strtotime($request->tanggal_berita)),
                'isi_berita' => $request->isi_berita,

            ]);
        }
        return redirect()->route('news.index')
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

    public function deactiveNews($id_carousel)
    {
        Carousel::where('id_carousel', $id_carousel)->update([
            'status' => 0
        ]);

        return redirect()->route('news.index')
            ->with('success', 'News Inactivated successfully.');
    }
}
