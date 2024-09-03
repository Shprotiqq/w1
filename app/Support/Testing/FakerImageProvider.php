<?php

namespace App\Support\Testing;

use Faker\Provider\Base;
use Illuminate\Support\Facades\Storage;

class FakerImageProvider extends Base
{
    public function fixturesImage(string $fixturesDir, string $storageDir): string
    {
        $storage = Storage::disk('public');

        if (!Storage::exists($storageDir)) {
            $storage->makeDirectory($storageDir);
        }

        $file = $this->generator->file(
            base_path("tests/Fixtures/images/$fixturesDir"),
            $storage->path($storageDir),
            false
        );

        return trim($storageDir, '/') . '/' . $file;
    }
}
