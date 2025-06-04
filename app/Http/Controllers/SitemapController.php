<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    public function index()
    {
        $data = json_decode(Storage::get('website.json'), true);

        $url = 'https://bizlink.sites.id/api/sitemap/'.$data['code'];

        $response = Http::get($url);

        if ($response->failed()) {
            return response()->json(['message' => 'Gagal mengambil data sitemap'], 500);
        }

        $data = $response->json();

        $sitemap = Sitemap::create()
            ->add(Url::create('/')->setLastModificationDate(now()))
            ->add(Url::create('/artikel')->setLastModificationDate(now()));

        foreach ($data['pages'] as $item) {
            $sitemap->add(
                Url::create($item['url'])
                    ->setLastModificationDate(Carbon::parse($item['updated_at']))
            );
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        return redirect('/sitemap.xml');
    }
}

