<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\CarouselAkademik;
use App\Models\CarouselNonAkademik;
use App\Models\Kegiatan;
use App\Models\KegiatanAkademik;
use App\Models\KegiatanNonAkademik;
use App\Models\News;
use App\Models\Ppds;
use App\Models\PrestasiAkademik;
use App\Models\PrestasiNonAkademik;
use App\Models\Profil;
use App\Models\Sejarah;
use App\Models\Staff;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class FrontPagesController extends Controller
{

     public function index()
     {
          $this->dataView['dataCarousel'] = Carousel::all();
          $this->dataView['fotoVisimisi'] = VisiMisi::first();
          $this->dataView['dataProfil'] = Profil::all();
          $this->dataView['dataKegiatan'] = Kegiatan::all();
          return view('frontpages/home/index',   $this->dataView);
     }
     public function sejarahPage()
     {
          $this->dataView['dataSejarah'] = Sejarah::all();
          return view('frontpages/profil/sejarah/index', $this->dataView);
     }
     public function staffPage()
     {
          $this->dataView['ds'] = Staff::first();
          return view('frontpages/profil/staff/index', $this->dataView);
     }
     // public function staffShow($id)
     // {
     //      $this->dataView['ds'] = Staff::where('id_staff', $id)->first();
     //      return view('frontpages/profil/staff/show', $this->dataView);
     // }
     public function ppdsPage()
     {
          $this->dataView['dataPpds'] = Ppds::paginate(1);
          $this->dataView['page'] = $this->dataView['dataPpds']->currentPage();
          return view('frontpages/profil/ppds/index',  $this->dataView);
     }
     // public function ppdsShow($id)
     // {
     //      $this->dataView['dp'] = Ppds::where('id_ppds', $id)->first();
     //      return view('frontpages/profil/ppds/show',  $this->dataView);
     // }
     public function akreditasiPage()
     {
          return view('frontpages/profil/akreditasi/index');
     }
     public function strukturOrganisasiPage()
     {
          return view('frontpages/profil/struktur/index');
     }
     public function akademikPage()
     {
          // $this->dataView['dataKegiatan'] = KegiatanAkademik::all();
          $this->dataView['dk'] = KegiatanAkademik::first();
          $this->dataView['dataPrestasi'] = PrestasiAkademik::all();
          $this->dataView['dataCarousel'] = CarouselAkademik::all();
          return view('frontpages/kegiatan/akademik/index', $this->dataView);
     }
     public function nonAkademikPage()
     {
          // $this->dataView['dataKegiatan'] = KegiatanNonAkademik::all();
          $this->dataView['dk'] = KegiatanNonAkademik::first();
          $this->dataView['dataPrestasi'] = PrestasiNonAkademik::all();
          $this->dataView['dataCarousel'] = CarouselNonAkademik::all();
          return view('frontpages/kegiatan/non-akademik/index', $this->dataView);
     }
     public function beritaPage()
     {

          // $this->dataView['dataBerita'] = News::paginate(6);
          $this->dataView['dataCarousel'] = Carousel::where('status', 1)->paginate(6);
          return view('frontpages/news/index',  $this->dataView);
     }
     public function beritaShow($id)
     {
          $this->dataView['dc'] = Carousel::where('id_carousel', $id)->first();
          // $this->dataView['db'] = News::where('id_news', $id)->first();
          return view('frontpages/news/show', $this->dataView);
     }
     public function kontakPage()
     {
          return view('frontpages/kontak/index');
     }
}
