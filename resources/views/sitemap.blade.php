<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- Homepage --}}
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.00</priority>
    </url>
    
    {{-- Static Pages --}}
    <url>
        <loc>{{ url('/off-plans') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/ready') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/list-your-property') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/rent') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/services') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/about-us') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/career') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/invest-in-dubai') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/contact-us') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/buy') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/sell') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/news') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/listing') }}</loc>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
    </url>
    
    <url>
        <loc>{{ url('/mortgage-calculator') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.80</priority>
    </url>
    
    {{-- Dynamic Blog Pages --}}
    @foreach($blogs as $blog)
    <url>
        <loc>{{ url('/blog-details/' . $blog->slug) }}</loc>
        <lastmod>{{ $blog->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.70</priority>
    </url>
    @endforeach
    
    {{-- Dynamic Property Pages --}}
    @foreach($properties as $property)
    <url>
        <loc>{{ url('/off-plans-property/' . $property->slug) }}</loc>
        <lastmod>{{ $property->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.80</priority>
    </url>
    @endforeach
</urlset>