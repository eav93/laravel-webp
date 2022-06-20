<?php


namespace Buglinjo\LaravelWebp\Interfaces;

use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;

interface WebpInterface
{
    /**
     * @param UploadedFile|File $image
     * @return mixed
     */
    public function make(UploadedFile|File $image);

    /**
     * @param $quality
     * @return mixed
     */
    public function quality($quality);

    /**
     * @param string $outputPath
     * @param int|null $quality
     * @return bool
     * @throws Exception
     */
    public function save(string $outputPath, int $quality = null): bool;
}
