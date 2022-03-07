<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Function untuk mengecek apakah MIME type dari file telah sesuai.
    // $files = array, $mimeTypes = array.
    protected function isMimeFileMatches($files, $mimeTypes)
    {
        $jumlahSemuaFile = count($files);
        $jumlahFileYangBenar = 0;

        foreach ($files as $file) {
            $fileMimeType = $file->getMimeType();
            $isMimeFileTelahSesuai = false;

            foreach ($mimeTypes as $mimeType) {
                // Jika MIME type dari file sudah sesuai dengan yang diinginkan.
                if ($fileMimeType === $mimeType && ! $isMimeFileTelahSesuai) {
                    $jumlahFileYangBenar += 1;
                    $isMimeFileTelahSesuai = true;
                }
            }
        }

        if ($jumlahFileYangBenar === $jumlahSemuaFile) {
            return true;
        }

        return false;
    }
}
