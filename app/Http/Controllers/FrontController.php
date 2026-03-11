<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function __construct()
    {
        $ip = request()->ip();
        $locale = Session::get('locale');

        if (!$locale) {
            try {
                $response = Http::get("http://ip-api.com/json/{$ip}");

                if ($response->successful()) {
                    $data = $response->json();
                    $countryCode = $data['countryCode'] ?? null;

                    $locale = match($countryCode) {
                        'ID' => 'id',
                        default => config('app.locale')
                    };

                    Session::put('locale', $locale);
                } else {
                    try {
                        $fallbackResponse = Http::get("https://freeipapi.com/api/json/{$ip}");

                        if ($fallbackResponse->successful()) {
                            $fallbackData = $fallbackResponse->json();
                            $countryCode = $fallbackData['countryCode'] ?? null;

                            $locale = match($countryCode) {
                                'ID' => 'id',
                                default => config('app.locale')
                            };

                            Session::put('locale', $locale);
                        } else {
                            $locale = config('app.locale');
                        }
                    } catch (\Exception $e) {
                        $locale = config('app.locale');
                    }
                }
            } catch (\Exception $e) {
                $locale = config('app.locale');
            }
        }

        App::setLocale($locale);
    }

    public function home()
    {
        return view('welcome');
    }

    public function articles()
    {
        return view('articles');
    }

    public function articleShow($slug)
    {
        return view('article-show', compact('slug'));
    }

    public function docs()
    {
        return view('docs');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function terms()
    {
        return view('terms');
    }

    public function cookies()
    {
        return view('cookies');
    }
}
