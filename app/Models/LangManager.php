<?php

namespace App\Models;

use App\Locale;
use Barryvdh\TranslationManager\Models\Translation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Events\Dispatcher;
use Barryvdh\TranslationManager\Manager;



class LangManager extends Manager
{

    public function __construct( Application $app, Filesystem $files, Dispatcher $events )
    {
        parent::__construct($app,$files,$events);
    }
//

    public function addLocale( $locale )
    {
        $localeDir = $this->app->langPath() . '/' . $locale;

        $this->ignoreLocales = array_diff( $this->ignoreLocales, [ $locale ] );
        $this->saveIgnoredLocales();
        $this->ignoreLocales = $this->getIgnoredLocales();

        if ( !$this->files->exists( $localeDir ) || !$this->files->isDirectory( $localeDir ) ) {
            return $this->files->makeDirectory( $localeDir );
        }
        $locale_data = Locale::where('short_name', '=', $locale)->first();
        if (!$locale_data) {
            $locale = new Locale();
            $locale->short_name = $locale;
            $locale->display_type = 0;
            $locale->save();
        }

        return true;
    }

    public function removeLocale( $locale )
    {
        if ( !$locale ) {
            return false;
        }
        $this->ignoreLocales = array_merge( $this->ignoreLocales, [ $locale ] );
        $this->saveIgnoredLocales();
        $this->ignoreLocales = $this->getIgnoredLocales();
        Locale::where('short_name', '=', $locale)->delete();
        Translation::where( 'locale', $locale )->delete();
    }
}
