<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageHelper
{
    public static function uploadWithThumbnail($image, $folder = 'posts')
    {
        $originalPath = $image->store("public/{$folder}");
        $filename = basename($originalPath);

        $thumbnailPath = "public/{$folder}/thumbnails/{$filename}";

        $thumbnail = Image::make($image)->fit(300, 200);
        Storage::put($thumbnailPath, (string) $thumbnail->encode());

        return [
            'original' => Storage::url($originalPath), 
            'thumbnail' => Storage::url($thumbnailPath), 
        ];
    }

}
