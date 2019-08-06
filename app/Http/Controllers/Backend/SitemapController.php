<?php

namespace App\Http\Controllers\Backend;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SitemapController extends Controller
{
    public function getIndex(){
        return view('backend.sitemap.index');
    }

    public function generateSitemap(Request $request){

        ini_set('memory_limit', '-1');
        $chunk = (request('chunk') ? request('chunk') : 500);
        $chunk = (int)$chunk;
        $entry = Config::where('key','=','sitemap.chunk')->first();
        if($entry == null){
            $entry = new Config();
        }
        $entry->key = 'sitemap.chunk';
        $entry->value = $chunk;
        $entry->save();
        \Illuminate\Support\Facades\Artisan::call('generate:sitemap', ['--chunk' => $chunk]);
        return back()->withFlashSuccess(trans('labels.backend.sitemap.generated'));
    }
}
