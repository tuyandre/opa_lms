<?php

namespace App\Http\Controllers;
use App\Locale;

/**
 * Class LanguageController.
 */
class LanguageController extends Controller
{
    /**
     * @param $locale
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function swap($locale)
    {
        $locales = Locale::get()->pluck('short_name')->toArray();

        if (in_array($locale, $locales)) {
            session()->put('locale', $locale);
        }

        return redirect()->back();
    }
}
