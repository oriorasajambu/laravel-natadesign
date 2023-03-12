<title>{{ $seo->page_title }}</title>
<link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon.svg') }}" />
<link rel="apple-touch-icon" href="{{ asset('assets/favicon.svg') }}" />
<meta name="description" content="{{ $seo->meta_description }}" />
<meta name="keywords" content="{{ $seo->meta_keywords }}" />
<meta name="author" content="{{ $seo->meta_authors }}" />
<meta property="og:title" content="{{ $seo->og_title }}" />
<meta property="og:description" content="{{ $seo->og_description }}" />
<meta property="og:image" content="{{ asset('assets/fixed_background.webp') }}" />
<meta property="og:url" content="{{ $seo->og_url }}" />
<meta name="twitter:card" content="summary_large_image" />
