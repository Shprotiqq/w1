<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <urlset xmlns:xsi="https://www.w3.org/2001/XMLSchema-instance" xmlns:image="https://www.google.com/schemas/sitemap-image/1.1" xsi:schemaLocation="https://www.sitemaps.org/schemas/sitemap/0.9 https://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        @foreach($menu as $menuItem)
            <url>
                <loc>https://{{ $_SERVER['HTTP_HOST'] }}{{ $menuItem->scroll_to }}/</loc>
                <lastmod>{{ date('c', strtotime(now()->toDateString())) }}</lastmod>
            </url>
        @endforeach
            @foreach($catalogMenu as $menuItem)
            <url>
                <loc>https://{{ $_SERVER['HTTP_HOST'] }}{{ $menuItem->scroll_to }}/</loc>
                <lastmod>{{ date('c', strtotime(now()->toDateString())) }}</lastmod>
            </url>
        @endforeach
    </urlset>
</sitemapindex>
