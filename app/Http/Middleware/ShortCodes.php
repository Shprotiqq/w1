<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;

class ShortCodes
{
    public function handle($request, Closure $next)
    {

        $response = $next($request);

        $shortCodes = Setting::query()
            ->firstWhere('slug', 'shortcodes')
            ->data
            ->pluck('value', 'key');

        $response->setContent($this->replaceShortcodes($response->getContent(), $shortCodes));
        return $response;

    }

    public function replaceShortcodes($input, $shortCodes): array|string
    {

        foreach ($shortCodes as $code => $value) {
            $input = str_replace($code, $value, $input);
        }

        return $input;
    }
}
