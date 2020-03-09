<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class UploadImageService
{
    public function uploadImagesWithThumbnail(array $files, string $path): Collection
    {
        $images = [];
        $thumbnails = [];
        foreach ($files as $index => $file) {
            $fileName = $file->hashName();
            $images[] = $file->storeAs($path, $fileName);
            File::makeDirectory($path.'/thumbnail/', $mode = 0777, true, true);
            Image::make($file)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path.'/thumbnail/'.$fileName);
            $thumbnails[] = $path.'/thumbnail/'.$fileName;
        }

        return Collect(compact('images', 'thumbnails'));
    }
}
