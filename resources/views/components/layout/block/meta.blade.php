@php
if(Route::is('home')) {
    $processedTitle = config('app.name');
} else {
    $processedTitle = config('app.name') . ' | ' . $title;
}

$pm = [
    'keywords' => $metaData['keywords'] ?? null,
    'description' => $metaData['description'] ?? null,
    'subject' => config('meta.subject') ?? null,
    'robots' => $metaData['robots'] ?? 'index,follow',
    'abstract' => $metaData['abstract'] ?? null,
    'topic' => $metaData['topic'] ?? null,
    'summary' => $metaData['summary'] ?? null,
    'author' => config('meta.author') ?? null,
    'designer' => $processedMeta['author'] ?? null,
    'owner' => $processedMeta['author'] ?? null,
    'copyright' => $processedMeta['author'] ?? null,
    'reply-to' => config('meta.email') ?? null,
    'url' => url()->current(),
    'identifier-URL' => config('app.url'),
    'pagename' => $metaData['title'] ?? $processedTitle,
    'category' => config('meta.subject') ?? null,
    'coverage' => $metaData['coverage'] ?? 'Worldwide',
    'distribution' => $metaData['distribution'] ?? 'Global',
    'subtitle' => $processedMeta['subtitle'] ?? null,
    'target' => $metaData['target'] ?? 'all',
    'HandhekdFriendly' => $metaData['HandhekdFriendly'] ?? 'True',
    'MobileOptimized' => $metaData['MobileOptimized'] ?? '320',

    'og_title' => $metaData['title'] ?? $processedTitle,
    'og_type' => $metaData['type'] ?? 'website',
    'og_url' => url()->current(),
    'og_image' => $metaData['image'] ?? null,
    'og_site_name' => config('app.name'),
    'og_description' => $metaData['description'] ?? null,
    'og_fb_page_id' => $metaData['fb_page_id'] ?? null,
    'og_application-name' => $metaData['application-name'] ?? null,
    'og_email' => config('meta.email') ?? null,
    'og_phone_number' => config('meta.phone') ?? null,

    'news_keywords' => $metaData['keywords'] ?? null,

    'apple-mobile-web-app-title' => $metaData['title'] ?? $processedTitle,
    'apple-mobile-web-app-capable' => $metaData['apple-mobile-web-app-capable'] ?? 'yes',
    'apple-touch-fullscreen' => $metaData['apple-touch-fullscreen'] ?? 'yes',
    'apple-mobile-web-app-status-bar-style' => $metaData['apple-mobile-web-app-status-bar-style'] ?? 'black',
]
@endphp

{!! !is_null($pm['keywords']) ? '<meta name="keywords" content="' . $pm['keywords'] . '">' : '' !!}
{!! !is_null($pm['description']) ? '<meta name="description" content="' . $pm['description'] . '">' : '' !!}
{!! !is_null($pm['subject']) ? '<meta name="subject" content="' . $pm['subject'] . '">' : '' !!}
{!! !is_null($pm['robots']) ? '<meta name="robots" content="' . $pm['robots'] . '">' : '' !!}
{!! !is_null($pm['abstract']) ? '<meta name="abstract" content="' . $pm['abstract'] . '">' : '' !!}
{!! !is_null($pm['topic']) ? '<meta name="topic" content="' . $pm['topic'] . '">' : '' !!}
{!! !is_null($pm['summary']) ? '<meta name="summary" content="' . $pm['summary'] . '">' : '' !!}
{!! !is_null($pm['author']) ? '<meta name="author" content="' . $pm['author'] . '">' : '' !!}
{!! !is_null($pm['designer']) ? '<meta name="designer" content="' . $pm['designer'] . '">' : '' !!}
{!! !is_null($pm['owner']) ? '<meta name="owner" content="' . $pm['owner'] . '">' : '' !!}
{!! !is_null($pm['copyright']) ? '<meta name="copyright" content="' . $pm['copyright'] . '">' : '' !!}
{!! !is_null($pm['reply-to']) ? '<meta name="reply-to" content="' . $pm['reply-to'] . '">' : '' !!}
{!! !is_null($pm['url']) ? '<meta name="url" content="' . $pm['url'] . '">' : '' !!}
{!! !is_null($pm['pagename']) ? '<meta name="pagename" content="' . $pm['pagename'] . '">' : '' !!}
{!! !is_null($pm['category']) ? '<meta name="category" content="' . $pm['category'] . '">' : '' !!}
{!! !is_null($pm['coverage']) ? '<meta name="coverage" content="' . $pm['coverage'] . '">' : '' !!}
{!! !is_null($pm['distribution']) ? '<meta name="distribution" content="' . $pm['distribution'] . '">' : '' !!}
{!! !is_null($pm['subtitle']) ? '<meta name="subtitle" content="' . $pm['subtitle'] . '">' : '' !!}
{!! !is_null($pm['target']) ? '<meta name="target" content="' . $pm['target'] . '">' : '' !!}
{!! !is_null($pm['HandhekdFriendly']) ? '<meta name="HandhekdFriendly" content="' . $pm['HandhekdFriendly'] . '">' : '' !!}
{!! !is_null($pm['MobileOptimized']) ? '<meta name="MobileOptimized" content="' . $pm['MobileOptimized'] . '">' : '' !!}

{!! !is_null($pm['og_title']) ? '<meta name="og:title" content="' . $pm['og_title'] . '">' : '' !!}
{!! !is_null($pm['og_type']) ? '<meta name="og:type" content="' . $pm['og_type'] . '">' : '' !!}
{!! !is_null($pm['og_url']) ? '<meta name="og:url" content="' . $pm['og_url'] . '">' : '' !!}
{!! !is_null($pm['og_image']) ? '<meta name="og:image" content="' . $pm['og_image'] . '">' : '' !!}
{!! !is_null($pm['og_site_name']) ? '<meta name="og:site_name" content="' . $pm['og_site_name'] . '">' : '' !!}
{!! !is_null($pm['og_description']) ? '<meta name="og:description" content="' . $pm['og_description'] . '">' : '' !!}

{!! !is_null($pm['og_fb_page_id']) ? '<meta name="fb:page_id" content="' . $pm['og_fb_page_id'] . '">' : '' !!}
{!! !is_null($pm['og_application-name']) ? '<meta name="application-name" content="' . $pm['og_application-name'] . '">' : '' !!}
{!! !is_null($pm['og_email']) ? '<meta name="og:email" content="' . $pm['og_email'] . '">' : '' !!}
{!! !is_null($pm['og_phone_number']) ? '<meta name="og:phone_number" content="' . $pm['og_phone_number'] . '">' : '' !!}

{!! !is_null($pm['news_keywords']) ? '<meta name="news_keywords" content="' . $pm['news_keywords'] . '">' : '' !!}
