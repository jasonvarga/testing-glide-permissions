<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Statamic\Facades\Config;
use Statamic\Imaging\GlideServer as StatamicServer;

class GlideServer extends StatamicServer
{
    public function cachePath()
    {
        $path = Config::get('statamic.assets.image_manipulation.cache')
            ? Config::get('statamic.assets.image_manipulation.cache_path')
            : storage_path('statamic/glide');

        return Storage::build($path, ['driver' => 'local'])->getDriver();
    }
}
