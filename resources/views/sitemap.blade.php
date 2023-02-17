<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:g="http://www.sitemaps.org/schemas/sitemap-image/1.1"
        xmlns:s="http://www.google.com/schemas/sitemap-news/0.9"
        xmlns:xhtml="http://www.w3.org/1999/xhtml"
        xmlns:mobile="http://www.google.com/schemas/sitemap-mobile/1.0"
        xmlns:v="http://www.google.com/schemas/sitemap-video/1.1">
    @foreach($urls as $url)
        <url>
            <loc>{{ $url }}</loc>
            <lastmod>{{ date('Y-m-d') }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach
</urlset>
