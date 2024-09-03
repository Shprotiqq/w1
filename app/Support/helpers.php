<?php

use Illuminate\Support\Facades\File;

if (!function_exists('getThumbnail')) {
    function getThumbnail($field = null, $method = null, $size = null, $dir = null): string
    {
        $field = $field ?? config('thumbnails.defaults.field');

        $file = is_array($field)
            ? collect($field)->first()
            : $field;

        if (!$file) {
            return "https://via.placeholder.com/$size";
        }
        return route('thumbnails.generate', [
            'dir' => $dir ?? config('thumbnails.defaults.dir'),
            'method' => $method ?? config('thumbnails.defaults.method'),
            'size' => $size ?? config('thumbnails.defaults.size'),
            'file' => File::basename($file)
        ]);
    }
}
if (!function_exists('getYouTubeVideoId')) {
    function getYouTubeVideoId($url): string
    {
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $matches);
        return $matches[1];
    }
}
if (!function_exists('getYouTubePreview')) {
    function getYouTubePreview($url, $size = 'default'): string
    {
        $sizes = [
            'default',
            'hqdefault',
            'mqdefault',
            'sddefault',
            'maxresdefault',
        ];

        return 'https://img.youtube.com/vi/' .getYouTubeVideoId($url) . '/' . $size . '.jpg';
    }
}
