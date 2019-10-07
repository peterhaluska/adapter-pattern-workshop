<?php

namespace App\FileDownloader;

class TextFileDownloader implements FileDownloader
{

    /**
     * @param string $filepath
     *
     * @return void
     */
    public function download(string $filepath): void
    {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        readfile($filepath);
    }
}
