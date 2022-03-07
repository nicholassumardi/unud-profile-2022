<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSejarahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sejarah', function (Blueprint $table) {
            $table->id('id_sejarah');
            $table->text('content')->default('<p>
            Fakultas Kedokteran merupakan salah satu fakultas yang telah ada sejak awal berdirinya Universitas
            Udayana pada tanggal 17 Agustus 1962. Fakultas Kedokteran merupakan salah satu fakultas yang menjadi
            cikal bakal berdirinya Universitas Udayana. Pendirian Universitas Udayana diawali dengan dibukanya
            Fakultas Sastra sebagai cabang Universitas Airlangga, Surabaya pada tanggal 29 September 1958. Pada
            waktu itu, salah satu syarat yang ditetapkan untuk dapat mendirikan sebuah Universitas adalah harus
            memiliki empat fakultas, dua fakultas eksakta dan dua fakultas non eksakta. Fakultas Kedokteran
            merupakan salah fakultas yang didirikan sebagai persyaratan pendirian Universitas Udayana
            bersama-sama
            Fakultas Sastra, Fakultas Kedokteran Hewan dan Fakultas Keguruan dan Ilmu Pendidikan. Universitas
            Udayana dinyatakan resmi berdiri sejak tanggal 17 Agustus 1962 melalui Surat Keputusan Menteri PTIP
            No.
            104/1962, tanggal 9 Agustus 1962, yang juga merupakan tanggal berdirinya berdirinya Fakultas
            Kedokteran
            Universitas Udayana
            <br><br>
            Fakultas Kedokteran pada awalnya adalah merupakan fakultas yang melaksanakan program pendidikan
            dokter,
            sehingga Fakultas Kedokteran yang didirikan adalah untuk mendidik mahasiswa calon dokter. Sementara
            itu
            di luar Fakultas Kedokteran telah berdiri Program Studi Ilmu Kesehatan Masyarakat. Dengan
            mempertimbangkan kemampuan sumber daya manusia maupun fasilitas yang ada di Fakultas Kedokteran
            Universitas Udayana, serta hasil studi kelayakan serta memperhatikan kebutuhan masyarakat, Fakultas
            Kedokteran Universitas Udayana dalam perkembangan terbarunya kemudian bergabung dengan beberapa
            Fakultas
            dibidang kesehatan dan membentuk Program Studi baru yaitu PS Sarjana Kesehatan Masyarakat, PS
            Sarjana
            Keperawatan dan Profesi Nurse, PS Psikologi, PS Fisioterapi dan PS Kedokteran Gigi. Hingga bulan
            Desember 2020 Fakultas Kedokteran Universitas Udayana membuka lebih luas akses pendidikan tinggi
            dengan
            telah memiliki 33 program studi yang terdiri dari 6 PS S1 (dengan 4 program profesi), 19 Program
            Pendidikan Dokter Spesialis 1, 4 PS S2 (Magister) dan 1 PS S3 (Doktor).
            <br><br>
            Program Studi Spesialis Bedah Plastik Rekonstruksi dan Estetik dirintis oleh dr. AAGN Asmarajaya,
            Sp.B,
            Sp.BP-RE(K). Setelah menyelesaikan Pendidikan Spesialis Bedah di Fakultas Kedokteran Universitas
            Airlangga pada tahun 1984, beliau melanjutkan Pendidikan Spesialis Bedah Plastik Rekonstruksi dan
            Estetik di Fakultas Kedokteran Univetsitas Indonesia dan berhasil mendapatkan gelar Spesialis Bedah
            Plastik pada tahun 1992. dr. AAGN Asmarajaya, Sp.B, Sp.BP-RE(K) menjadi dokter Spesialis Bedah
            Plastik
            pertama di Bali dan merintis pembentukan Seksi Bedah Plastik sebagai salah satu seksi di Bagian
            Bedah
            Fakultas Kedokteran Universitas Udayana/RSUP Sanglah. Seksi Bedah Plastik menjadi salah satu bagian
            dalam proses Pendidikan PPDS SP-1 Bedah Fakultas Kedokteran Universitas Udayana/ RSUP Sanglah. Seksi
            Bedah Plastik berubah menjadi Sub Bagian Bedah Plastik pada tanggal 14 Februari 2006.
            <br><br>
            Seiring dengan peningkatan kebutuhan Dokter Spesialis Bedah Plastik Rekonstruksi dan Estetik di
            Indonesia, maka diusulkanlah pendirian Program Studi Spesialis Bedah Plastik Rekonstruksi dan
            Estetik
            Fakultas Kedokteran Universitas Udayana didasarkan pada surat rekomendasi Kolegium Ilmu Bedah
            Plastik
            Rekonstruksi Dan Estetik Nomor 09/Kol.BPRE/PERAPI/II/2015 berdasarkan visitasi kolegium yang telah
            dilakukan pada tanggal 20 April 2015 dan surat pengusulan Program Studi Spesialis Bedah Plastik
            Rekonstruksi dan Estetik Fakultas Kedokteran Universitas Udayana Denpasar dari Pembantu Rektor I
            Universitas Udayana No.896/UN14.I/PR/2015 tanggal 20 Februari 2015. Desk Evaluasi usulan pembukaan
            Program Studi Spesialis Bedah Plastik Rekonstruksi dan Estetik Fakultas Kedokteran Universitas
            Udayana
            Denpasar dengan Konsil Kedokteran Indonesia dilakukan pada tanggal 12 Maret 2015 dan visitasi
            kelayakan
            pembukaan Program Studi Spesialis Bedah Plastik Rekonstruksi dan Estetik Fakultas Kedokteran
            Universitas
            Udayana pada tanggal 26 Maret 2015. Berdasarkan hasil visitasi tersebut, Konsil Kedokteran Indonesia
            memberikan rekomendasi pembukaan program studi dengan nomor KD.02.02.01/KKI/III/1122/2015.
            <br><br>
            Selanjutnya Pembukaan Program Studi Spesialis Bedah Plastik Rekonstruksi dan Estetik dinyatakan
            secara
            resmi berdiri dengan diterbitkannya Surat Keputusan Menteri Riset, Teknologi, dan Pendidikan Tinggi
            Republik Indonesia Nomor 90/KPT/I/2016 pada tanggal 10 Februari 2016 tentang pembukaan program studi
            di
            Universitas Udayana. Berdasarkan Surat Keputusan Rektor Universitas Udayana Nomor : 164/ UN14/
            KP/2016
            maka ditunjuklah Dr. dr. I Nyoman Putu Riasa, Sp.BP-RE (K) sebagai Plt. Ketua Program Studi
            Spesialis I
            Ilmu Bedah Plastik Fakultas Kedokteran Universitas Udayana. Sejak tahun 2016 Program Studi Bedah
            Plastik
            Rekonstruksi dan Estetik mulai menerima peserta didik.
            <br><br>
            Seiring peningkatan pelayanan Bedah Plastik Rekonstruksi dan Estetik di RSUP Sanglah, sejak tahun
            2017
            berdasarkan Surat Keputusan Direktur Utama RSUP Sanglah Denpasar Nomor : HK.02.04/IV.C.11.D23/ 4686/
            2017 tanggal 1 Maret 2017 dibentuk Staf Medis Fungsional (SMF) Bedah Plastik Rekonstruksi dan
            Estetik
            RSUP Sanglah Denpasar dengan dr. IGP Hendra Sanjaya, Sp.B, Sp.BP-RE sebagai ketua. Selanjutnya
            penamaan
            SMF berubah menjadi Kelompok Staf Medis (KSM). Berdasarkan Surat Keputusan Rektor Universitas
            Udayana
            Nomor 99/ UN14/ HK/ 2018 maka diangkatlah dr. IGP Hendra Sanjaya, Sp.B, Sp.BP-RE (K) sebagai
            Koordinator
            Program Studi Spesialis Bedah Plastik Rekonstruksi dan Estetik periode 2018 – 2022.
            <br><br>
            Pada tanggal 17 Januari 2022, berdasarkan Surat Keputusan Rektor Universitas Udayana Nomor 1352/UN14/HK.KP/2022 Tentang Pengangkatan Koordinator Program Studi Pada Fakultas Kedokteran Universitas Udayana, Keluarga Besar Program Studi Spesialis Bedah Plastik Rekonstruksi dan Estetik menyambut dr. I Made Suka Adnyana, Sp.BP-RE(K) sebagai Koordinator Program Studi Spesialis Bedah Plastik Rekonstruksi dan Estetik periode 2022-2026.       
            </p>');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sejarah');
    }
}
