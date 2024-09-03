<?php

declare(strict_types=1);

namespace App\MoonShine\Fields;

use MoonShine\Fields\TinyMce;

class TinyMceAdv extends TinyMce
{
    protected function afterMake(): void
    {
        parent::afterMake();

        $this
            ->addConfig('forced_root_block', 'false')
            ->addConfig('force_br_newlines', 'true');
    }
}
