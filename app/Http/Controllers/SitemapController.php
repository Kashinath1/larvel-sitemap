<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [
            // Add your URLS here
            URL::to('/'),
            URL::to('/products'),
            URL::to('/contact'),
            URL::to('/about')
        ];

        $content = view('sitemap', compact('urls'))->render();
        $response = Response::make($content, 200);
        $response->header('Content-Type', 'text/xml');

        return $response;
    }
}
