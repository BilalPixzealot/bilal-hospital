<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url><loc>{{ url('/') }}</loc><changefreq>weekly</changefreq><priority>1.0</priority></url>
    <url><loc>{{ url('/about') }}</loc><changefreq>monthly</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/departments') }}</loc><changefreq>weekly</changefreq><priority>0.9</priority></url>
    <url><loc>{{ url('/doctors') }}</loc><changefreq>weekly</changefreq><priority>0.9</priority></url>
    <url><loc>{{ url('/gallery') }}</loc><changefreq>monthly</changefreq><priority>0.6</priority></url>
    <url><loc>{{ url('/cashless') }}</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/blog') }}</loc><changefreq>daily</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/contact') }}</loc><changefreq>monthly</changefreq><priority>0.6</priority></url>
    <url><loc>{{ url('/book-appointment') }}</loc><changefreq>monthly</changefreq><priority>0.8</priority></url>
    @foreach($departments as $dept)
    <url><loc>{{ url('/departments/' . $dept->slug) }}</loc><lastmod>{{ $dept->updated_at->toAtomString() }}</lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
    @endforeach
    @foreach($doctors as $doctor)
    <url><loc>{{ url('/doctors/' . $doctor->slug) }}</loc><lastmod>{{ $doctor->updated_at->toAtomString() }}</lastmod><changefreq>monthly</changefreq><priority>0.6</priority></url>
    @endforeach
    @foreach($posts as $post)
    <url><loc>{{ url('/blog/' . $post->slug) }}</loc><lastmod>{{ $post->updated_at->toAtomString() }}</lastmod><changefreq>monthly</changefreq><priority>0.5</priority></url>
    @endforeach
</urlset>
