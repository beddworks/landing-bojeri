<?php

namespace App\Http\Controllers;

use App\Models\Article;
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
        $articles = Article::published()
            ->byType('article')
            ->byLanguage(app()->getLocale())
            ->latest('published_at')
            ->paginate(9);

        return view('articles', compact('articles'));
    }

    public function articleShow($slug)
    {
        $article = Article::published()
            ->byType('article')
            ->where('slug', $slug)
            ->firstOrFail();

        // Switch session locale to match the article's language
        if ($article->language !== app()->getLocale()) {
            Session::put('locale', $article->language);
            App::setLocale($article->language);
        }

        $viewedKey = 'viewed_articles';
        $viewed = Session::get($viewedKey, []);

        if (!in_array($article->id, $viewed)) {
            $article->incrementView();
            $viewed[] = $article->id;
            Session::put($viewedKey, $viewed);
        }

        $related = Article::published()
            ->byType('article')
            ->byLanguage($article->language)
            ->where('id', '!=', $article->id)
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('article-show', compact('article', 'related'));
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
