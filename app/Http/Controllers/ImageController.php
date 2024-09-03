<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ImageController extends Controller
{
    public function generate(string $dir, string $method, string $size, string $file): BinaryFileResponse
    {
        $allowedSizes = config('thumbnails.allowed_sizes') ?? [];

        if (!in_array($size, $allowedSizes)) {
            abort(403, 'Size is not allowed');
        }

        $originalPath = "$dir/$file";
        $dirPath = "$dir/$method/$size";
        $fullPath = "$dirPath/$file";

        $storage = Storage::disk(config('thumbnails.disk') ?? null);

        if (!$storage->exists($dirPath)) {
            $storage->makeDirectory($dirPath);
        }

        if (!$storage->exists($fullPath)) {
            $image = Image::make($storage->path($originalPath));

            $size = Str::of($size);

            if ($size->contains('x')) {
                $image->orientate()->{$method}(
                    $size->before('x')->toString(),
                    $size->after('x')->toString()
                );
            } else {
                $image->{$method}($size->toString());
            }

            $image->save($storage->path($fullPath));
        }

        return response()->file($storage->path($fullPath));
    }
}
