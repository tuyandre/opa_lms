<?php

namespace App\Providers;

use App\Helpers\Frontend\Auth\Socialite;
use App\Locale;
use App\Models\Blog;
use App\Models\Config;
use App\Models\Course;
use App\Models\Slider;
use Barryvdh\TranslationManager\Models\Translation;
use Carbon\Carbon;
use Harimayco\Menu\Models\MenuItems;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

/**
 * Class AppServiceProvider.
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * Application locale defaults for various components
         *
         * These will be overridden by LocaleMiddleware if the session local is set
         */

        /*
         * setLocale for php. Enables ->formatLocalized() with localized values for dates
         */
        setlocale(LC_TIME, config('app.locale_php'));


        /*
         * Set the session variable for whether or not the app is using RTL support
         * For use in the blade directive in BladeServiceProvider
         */
//        if (! app()->runningInConsole()) {
//            if (config('locale.languages')[config('app.locale')][2]) {
//                session(['lang-rtl' => true]);
//            } else {
//                session()->forget('lang-rtl');
//            }
//        }

        // Force SSL in production
        if ($this->app->environment() == 'production') {
            //URL::forceScheme('https');
        }

        // Set the default string length for Laravel5.4
        Schema::defaultStringLength(191);

        // Set the default template for Pagination to use the included Bootstrap 4 template
        \Illuminate\Pagination\AbstractPaginator::defaultView('pagination::bootstrap-4');
        \Illuminate\Pagination\AbstractPaginator::defaultSimpleView('pagination::simple-bootstrap-4');


        if (Schema::hasTable('configs')) {
            foreach (Config::all() as $setting) {
                \Illuminate\Support\Facades\Config::set($setting->key, $setting->value);
            }
        }

        /*
         * setLocale to use Carbon source locales. Enables diffForHumans() localized
         */

        Carbon::setLocale(config('app.locale'));
        App::setLocale(config('app.locale'));


        if (Schema::hasTable('sliders')) {
            $slides = Slider::where('status', 1)->orderBy('sequence', 'asc')->get();
            view()->composer('*', function ($view) use ($slides) {
                $view->with('slides', $slides);
            });
        }

        view()->composer(['frontend.layouts.*', 'frontend-rtl.layouts.*'], function ($view) {
            $custom_menus = MenuItems::where('menu', '=', config('nav_menu'))
                ->orderBy('sort')
                ->get();
            $custom_menus = $this->menuList($custom_menus);
            $max_depth = MenuItems::max('depth');
            $view->with(compact('custom_menus', 'max_depth'));
        });

        view()->composer(['frontend.layouts.partials.right-sidebar', 'frontend-rtl.layouts.partials.right-sidebar'], function ($view) {

            $featured_courses = Course::withoutGlobalScope('filter')->where('published', '=', 1)
                ->where('featured', '=', 1)->first();

            $recent_news = Blog::orderBy('created_at', 'desc')->take(2)->get();

            $view->with(compact('recent_news'));
        });

        view()->composer(['frontend.*', 'frontend-rtl.*'], function ($view) {

            $global_featured_course = Course::withoutGlobalScope('filter')->where('published', '=', 1)
                ->where('featured', '=', 1)->where('trending', '=', 1)->first();


            $view->with(compact('global_featured_course'));
        });

        view()->composer(['frontend.*', 'backend.*', 'frontend-rtl.*'], function ($view) {
//
//            if (Schema::hasTable('ltm_translations')) {
//                $locales = Translation::groupBy('locale')->pluck('locale')->toArray();
//
//            }
//            $view->with(compact('locales'));

            if (Schema::hasTable('locales')) {
                $locales = Locale::pluck('short_name as locale')->toArray();

            }
            $view->with(compact('locales'));

        });


    }

    function menuList($array)
    {
        $temp_array = array();
        foreach ($array as $item) {
            if ($item->getsons($item->id)->except($item->id)) {
                $item->subs = $this->menuList($item->getsons($item->id)->except($item->id)); // here is the recursion
                $temp_array[] = $item;
            }
        }
        return $temp_array;
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*
         * Sets third party service providers that are only needed on local/testing environments
         */
        if ($this->app->environment() != 'production') {
            /**
             * Loader for registering facades.
             */
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();

            /*
             * Load third party local aliases
             */
            $loader->alias('Debugbar', \Barryvdh\Debugbar\Facade::class);
        }
        \Illuminate\Support\Collection::macro('lists', function ($a, $b = null) {
            return collect($this->items)->pluck($a, $b);
        });
    }
}
