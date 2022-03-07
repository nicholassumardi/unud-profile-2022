<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('tipe_user')->insert([
            'nama' => 'Admin',
        ]);

        DB::table('user')->insert([
            'nama' => 'Admin',
            'email' => 'adminudayana@gmail.com',
            'password' => Hash::make('adminudayana500'),
            'status' => 1,
            'tipe_user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);

        DB::table('admin')->insert([
            'nama' => 'Admin UDAYANA',
            'alamat' => 'Kampus Bukit, Jl. Raya Kampus Unud Jimbaran',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);




        // SEJARAH
        DB::table('sejarah')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);

        // FOTO VISI MISI HOME
        DB::table('visimisi')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);

        // FOTO CAROUSEL HOME
        DB::table('carousel')->insert([
            'content' => 'PENERIMAAN <br> MAHASISWA <br> BARU',
            'link' => 'baca selengkapnya',
            'judul_berita' => 'PENERIMAAN MAHASISWA BARU',
            'tanggal_berita' => date('d-m-Y', strtotime('3/6/2022')),
            'path_foto_carousel' => 'images/carousel/gambarsementara.png',
            'path_foto_carousel2' => 'images/carousel/c1.jpg',
            'path_foto_carousel3' => 'images/carousel/c2.jpg',
            'path_foto_carousel4' => 'images/carousel/c3.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('carousel')->insert([
            'judul_berita' => 'Digrahayu BKFK',
            'tanggal_berita' => date('d-m-Y', strtotime('3/6/2022')),
            'path_foto_carousel' => 'images/carousel/gambarsementara2.png',
            'path_foto_carousel2' => 'images/carousel/c4.jpg',
            'path_foto_carousel3' => 'images/carousel/c5.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        // DB::table('carousel')->insert([
        //     'content' => 'Foto 3',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);

        // FOTO PROFIL HOME
        DB::table('profil')->insert([
            'content' => 'Sejarah',
            'route' => 'home.sejarah',
            'path_foto_profil' => 'images/profil/sejarah.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('profil')->insert([
            'content' => 'Staf<br>Pengajar',
            'route' => 'home.staff',
            'path_foto_profil' => 'images/profil/staff.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('profil')->insert([
            'content' => 'Lulusan <br> &  <br> PPDS',
            'route' => 'home.ppds',
            'path_foto_profil' => 'images/profil/ppds.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('profil')->insert([
            'content' => 'Akreditasi',
            'route' => 'home.akreditasi',
            'path_foto_profil' => 'images/profil/akreditasi.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);

        // FOTO KEGIATAN HOME
        DB::table('kegiatan')->insert([
            'content' => 'Akademik',
            'route' => 'home.akademik',
            'path_foto_kegiatan' => 'images/kegiatan/akademik.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('kegiatan')->insert([
            'content' => 'Non-Akademik',
            'route' => 'home.nonakademik',
            'path_foto_kegiatan' => 'images/kegiatan/nonakademik.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);

        // KEGIATAN AKADEMIK
        DB::table('kegiatan_akademik')->insert([
            'title' => 'KEGIATAN AKADEMIK',
            'path_foto_kegiatan_akademik' => 'images/kegiatan-akademik/1.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        // DB::table('kegiatan_akademik')->insert([
        //     'title' => 'Workshop OSTEOSYNTHESIS',
        //     'path_foto_kegiatan_akademik' => 'images/kegiatan-akademik/2.jpg',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);

        // KEGIATAN NON AKADEMIK
        DB::table('kegiatan_non_akademik')->insert([
            'title' => 'KEGIATAN NON AKADEMIK',
            'path_foto_kegiatan_nonakademik' => 'images/kegiatan-nonakademik/1.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        // DB::table('kegiatan_non_akademik')->insert([
        //     'title' => 'BAKTI SOSIAL',
        //     'path_foto_kegiatan_nonakademik' => 'images/kegiatan-nonakademik/2.jpg',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('kegiatan_non_akademik')->insert([
        //     'title' => 'KEGIATAN KEMANUSIAAN - GEMPA LOMBOK 2018',
        //     'path_foto_kegiatan_nonakademik' => 'images/kegiatan-nonakademik/3.jpg',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('kegiatan_non_akademik')->insert([
        //     'title' => 'TIRTA YATRA',
        //     'path_foto_kegiatan_nonakademik' => 'images/kegiatan-nonakademik/4.jpg',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('kegiatan_non_akademik')->insert([
        //     'title' => 'PARTISIPASI LOMBA',
        //     'path_foto_kegiatan_nonakademik' => 'images/kegiatan-nonakademik/5.jpg',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('kegiatan_non_akademik')->insert([
        //     'title' => 'BAND',
        //     'path_foto_kegiatan_nonakademik' => 'images/kegiatan-nonakademik/6.jpg',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('kegiatan_non_akademik')->insert([
        //     'title' => 'TARI BUDAYA',
        //     'path_foto_kegiatan_nonakademik' => 'images/kegiatan-nonakademik/7.jpg',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('kegiatan_non_akademik')->insert([
        //     'title' => 'KUNJUNGAN KEDUKAAN',
        //     'path_foto_kegiatan_nonakademik' => 'images/kegiatan-nonakademik/8.jpg',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('kegiatan_non_akademik')->insert([
        //     'title' => 'OUTBOND',
        //     'path_foto_kegiatan_nonakademik' => 'images/kegiatan-nonakademik/9.jpg',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);


        // CAROUSEL AKADEMIK
        DB::table('carousel_akademik')->insert([
            'path_foto_carousel_akademik' => 'images/carousel-akademik/1.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('carousel_akademik')->insert([
            'path_foto_carousel_akademik' => 'images/carousel-akademik/2.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('carousel_akademik')->insert([
            'path_foto_carousel_akademik' => 'images/carousel-akademik/3.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('carousel_akademik')->insert([
            'path_foto_carousel_akademik' => 'images/carousel-akademik/4.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('carousel_akademik')->insert([
            'path_foto_carousel_akademik' => 'images/carousel-akademik/5.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('carousel_akademik')->insert([
            'path_foto_carousel_akademik' => 'images/carousel-akademik/6.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);




        // CAROUSEL NON AKADEMIK
        DB::table('carousel_non_akademik')->insert([
            'path_foto_carousel_nonakademik' => 'images/carousel-nonakademik/1.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('carousel_non_akademik')->insert([
            'path_foto_carousel_nonakademik' => 'images/carousel-nonakademik/2.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('carousel_non_akademik')->insert([
            'path_foto_carousel_nonakademik' => 'images/carousel-nonakademik/3.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('carousel_non_akademik')->insert([
            'path_foto_carousel_nonakademik' => 'images/carousel-nonakademik/4.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('carousel_non_akademik')->insert([
            'path_foto_carousel_nonakademik' => 'images/carousel-nonakademik/5.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('carousel_non_akademik')->insert([
            'path_foto_carousel_nonakademik' => 'images/carousel-nonakademik/6.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);


        // PRESTASI AKADEMIK
        DB::table('prestasi_akademik')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);

        // PRESTASI NON AKADEMIK
        DB::table('prestasi_non_akademik')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);

        // Staff

        DB::table('staff')->insert([
            // 'nama' => 'dr. I Gusti Putu Hendra Sanjaya,
            // Sp.B, Sp.BP-RE (K)',
            // 'ttl' => 'Denpasar, 10 Maret 1966',
            'path_foto_staff' => 'images/staff/1.png',
            // 'content' => ' <p>Asal FK : <br>1. Universitas Udayana (1993) <br>
            // 2. Bedah Umum Universitas Udayana (2007)<br>
            // 3. Bedah Plastik Universitas Indonesia (2013)</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        // DB::table('staff')->insert([
        //     'nama' => 'dr. Agus Roy Rusly Hariantana Hamid, Sp.BP-RE (K)',
        //     'ttl' => 'Surabaya, 27 Agustus 1974',
        //     'path_foto_staff' => 'images/staff/2.png',
        //     // 'content' => ' <p>Asal FK : <br>1. Universitas Udayana (2000) <br>
        //     // 2. Bedah Plastik Universitas Airlangga (2008)<br>
        //     // 3. Konsultan Hand and Microsurgery (2017)</p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('staff')->insert([
        //     'nama' => ' dr. I Made Suka Adnyana, Sp.BP-RE (K)',
        //     'ttl' => 'Darma Kaja, 22 Januari 1979',
        //     'path_foto_staff' => 'images/staff/3.png',
        //     // 'content' => ' <p>Asal FK : <br>1. Universitas Udayana (2003)<br>
        //     // 2. Bedah Plastik Universitas Airlangga (2010)<br>
        //     // 3. Konsultan Craniofacial (2016)</p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);

        // LULUSAN
        DB::table('ppds')->insert([
            // 'nama' => ' Scania Riendravi',
            // 'ttl' => ' Surabaya, 27 November 1989',
            'path_foto_ppds' => 'images/ppds/1.jpg',
            //     'status' => '1',
            //     'content' => ' <p>
            //     <b>Asal FK :</b> Universitas Udayana (2007)
            //     <br>
            //     <b>Hobi : </b> Bersepeda, Menyanyi, Menonton Film
            //     <br>
            //     <b>Status :</b> Belum Menikah <br>
            //    </p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        DB::table('ppds')->insert([
            // 'nama' => 'Shita Diwyani Sudarsa',
            // 'ttl' => ' Denpasar, 25 Juni 1989',
            'path_foto_ppds' => 'images/ppds/2.jpg',
            // 'status' => '1',
            //     'content' => ' <p>
            //     <b>Asal FK :</b> Universitas Udayana (2007)
            //     <br>
            //     <b>Hobi : </b> Travelling
            //     <br>
            //     <b>Status :</b> Menikah <br>
            //    </p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        // DB::table('ppds')->insert([
        //     'nama' => 'A. A. Istri Yulan Permatasari',
        //     'ttl' => ' Denpasar, 7 November 1991',
        //     'path_foto_ppds' => 'images/ppds/3.jpg',
        //     'status' => '1',
        //     'content' => ' <p>
        //     <b>Asal FK :</b> Universitas Udayana (2008)
        //     <br>
        //     <b>Hobi : </b> Travelling
        //     <br>
        //     <b>Status :</b> Belum Menikah <br>
        //    </p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('ppds')->insert([
        //     'nama' => 'Astrinita Lestari Suyata',
        //     'ttl' => 'Ujung Pandang, 2 Maret 1991',
        //     'path_foto_ppds' => 'images/ppds/4.jpg',
        //     'status' => '1',
        //     'content' => ' <p>
        //     <b>Asal FK :</b> Universitas Hasanuddin (2008)
        //     <br>
        //     <b>Hobi : </b> Travelling
        //     <br>
        //     <b>Status :</b> Belum Menikah<br>
        //    </p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('ppds')->insert([
        //     'nama' => 'Loelita Marcelia Lumintang',
        //     'ttl' => 'Mataram, 5 Maret 1990',
        //     'path_foto_ppds' => 'images/ppds/5.jpg',
        //     'status' => '1',
        //     'content' => ' <p>
        //     <b>Asal FK :</b> Universitas Hang Tuah (2009)
        //     <br>
        //     <b>Hobi : </b> Menonton Film
        //     <br>
        //     <b>Status :</b> Belum Menikah <br>
        //    </p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('ppds')->insert([
        //     'nama' => 'Gede Wara Samsarga',
        //     'ttl' => 'Tabanan, 18 November 1993',
        //     'path_foto_ppds' => 'images/ppds/6.jpg',
        //     'status' => '1',
        //     'content' => ' <p>
        //     <b>Asal FK :</b> Universitas Udayana (2009)
        //     <br>
        //     <b>Hobi : </b> Bermain Piano, Karaoke, Fotografi
        //     <br>
        //     <b>Status :</b> Menikah <br>
        //    </p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);



        // // PPDS
        // DB::table('ppds')->insert([
        //     'nama' => 'Nyoman Siska Ananda',
        //     'ttl' => 'Singaraja, 20 Maret 1991',
        //     'path_foto_ppds' => 'images/ppds/7.jpg',
        //     'status' => '0',
        //     'content' => ' <p>
        //     <b>Asal FK :</b> Universitas Udayana (2009)
        //     <br>
        //     <b>Hobi : </b> Menggambar
        //     <br>
        //     <b>Status :</b> Menikah <br>
        //    </p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('ppds')->insert([
        //     'nama' => 'Eunice Geraldine Oenarta',
        //     'ttl' => 'Surabaya, 2 Juni 1994',
        //     'path_foto_ppds' => 'images/ppds/8.jpg',
        //     'status' => '0',
        //     'content' => ' <p>
        //     <b>Asal FK :</b> Universitas Airlangga (2009)
        //     <br>
        //     <b>Hobi : </b> Musik, Menyanyi
        //     <br>
        //     <b>Status :</b> Belum Menikah <br>
        //    </p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('ppds')->insert([
        //     'nama' => 'Grace Inriani Rongre',
        //     'ttl' => 'Balikpapan, 23 Juli 1987',
        //     'path_foto_ppds' => 'images/ppds/9.jpg',
        //     'status' => '0',
        //     'content' => ' <p>
        //     <b>Asal FK :</b> Universitas Hang Tuah (2005)
        //     <br>
        //     <b>Hobi : </b> Menyanyi, Fotografi
        //     <br>
        //     <b>Status :</b> Belum Menikah <br>
        //    </p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('ppds')->insert([
        //     'nama' => 'A.A.N.G. Hendra Prayoga Setiawan',
        //     'ttl' => 'Denpasar, 28 November 1989',
        //     'path_foto_ppds' => 'images/ppds/10.jpg',
        //     'status' => '0',
        //     'content' => ' <p>
        //     <b>Asal FK :</b> Universitas Udayana (2008)
        //     <br>
        //     <b>Hobi : </b> Menyanyi, Menggambar, Fotografi
        //     <br>
        //     <b>Status :</b> Belum Menikah<br>
        //    </p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('ppds')->insert([
        //     'nama' => 'Intan Permata Wijaya',
        //     'ttl' => 'Jakarta, 1 Februari 1992',
        //     'path_foto_ppds' => 'images/ppds/11.jpg',
        //     'status' => '0',
        //     'content' => ' <p>
        //     <b>Asal FK :</b> Universitas Kristen Krida Wacana (2010)
        //     <br>
        //     <b>Hobi : </b> Menggambar, Membaca
        //     <br>
        //     <b>Status :</b> Belum Menikah <br>
        //    </p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
        // DB::table('ppds')->insert([
        //     'nama' => 'Zendio Abednego Santoso',
        //     'ttl' => 'Surabaya, 19 Juni 1994',
        //     'path_foto_ppds' => 'images/ppds/39.jpg',
        //     'status' => '0',
        //     'content' => ' <p>
        //     <b>Asal FK :</b> Universitas Hang Tuah (2012)
        //     <br>
        //     <b>Hobi : </b> Fotografi
        //     <br>
        //     <b>Status :</b> Belum Menikah <br>
        //    </p>',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        // ]);
    }
}
