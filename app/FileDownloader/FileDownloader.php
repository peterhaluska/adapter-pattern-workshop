<?php

namespace App\FileDownloader;

interface FileDownloader
{
    /**
     * @param string $filepath
     *
     * @return void
     */
    public function download(string $filepath): void;
}
