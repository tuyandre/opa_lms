<?php

use Illuminate\Database\Seeder;

class V215Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('memory_limit', '-1');

        $config = \App\Models\Config::where('key','=','sitemap.chunk')->first();
        if($config == null){
            $config = new Config();
        }
        $config->key = 'sitemap.chunk';
        $config->value = 100;
        $config->save();

        $config = \App\Models\Config::where('key','=','sitemap.schedule')->first();
        if($config == null){
            $config = new Config();
        }
        $config->key = 'sitemap.schedule';
        $config->value = 3;
        $config->save();

        $config = \App\Models\Config::where('key','=','show_offers')->first();
        if($config == null){
            $config = new Config();
        }
        $config->key = 'show_offers';
        $config->value = 0;
        $config->save();

        $chunk = (config('sitemap.chunk') ? config('sitemap.chunk') : 100);
        \Illuminate\Support\Facades\Artisan::call('generate:sitemap', ['--chunk' => $chunk]);
    }
}
