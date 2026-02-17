<!DOCTYPE html>
<html lang="{{ $site->lang ?? 'en' }}" class="scroll-smooth" dir="ltr" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'page.title') &raquo; OrbxDirect</title>
    <meta name="description" content="A concise, 150-160 character summary of your page content to entice clicks from search results.">
    <link rel="canonical" href="{{ request()->url() }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'page.title' }}">
    <meta property="og:description" content="page.desc">

    <meta property="og:image" content="{{ asset('images/social-share-home.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Preview of Orbx Direct flight simulation products">

    <meta property="og:site_name" content="Orbx Direct">
    <meta property="og:locale" content="en_US">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@orbxdirect">

    <link rel="icon" href="/assets/favicons/favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <meta name="theme-color" content="#111111">

    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-biblioteq::container>
        <x-slot:nav>
            <x-biblioteq::nav />
            </x-slot>

            <x-slot:sidebar>
                <x-biblioteq::sidebar :links="$links" :item="$item" />
            </x-slot:sidebar />

            <x-slot:page>
                <main class="bg-base-200 text-base-content mx-auto w-full max-w-7xl flex-1 grow p-6">
                    <div class="min-h-150 flex-col space-y-6 rounded-lg">
                        @if ($item)
                        <div class="justify-content-between flex gap-2">
                            <div class="highlight w-100">
                                <h4 class="text-base-content mb-2 text-3xl">#{{ $item }}</h4>
                                <h5 class="text-base-content text-lg font-semibold">Options</h5>
                                <pre><code class="language-json">{{ $options }}</code></pre>
                            </div>

                            <div class="mockup-browser border-base-content/20 min-h-150 border">
                                <div class="mockup-browser-toolbar text-center">
                                    <div class="bg-base-200 text-base-content input">{{ $item }}</div>
                                </div>
                                <div class="bg-base-100 text-base-content min-h-150 p-6 gap-6 flex flex-col">
                                    <x-dynamic-component :component="$item" />
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="flex gap-6">
                            @foreach ($links as $key => $paths)
                            {{-- <h1>{{ $paths }}</h1> --}}

                            @foreach($paths as $path)
                            {{-- <x-dynamic-component :component="$path" /> --}}
                            <div class="card sm:max-w-sm">
                                <div class="card-body">
                                    <h5 class="card-title mb-0"><i class="text-primary">#</i> {{ $path }}</h5>
                                    <div class="text-base-content/50 mb-6">-</div>
                                    <p class="mb-4">-</p>
                                    <div class="card-actions">
                                        <a href="#" class="btn btn-primary no-underline">View</a>
                                        <a href="#" class="btn btn-neutral no-underline">Make</a>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            @endforeach
                        </div>
                        @endif
                    </div>
                </main>
            </x-slot:page>

            <x-slot:footer>
                <x-biblioteq::footer />
            </x-slot:footer>

    </x-biblioteq::container>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(() => {
                const activeId = {
                    {
                        Js::from($item)
                    }
                };
                const element = document.getElementById(activeId);

                if (element) {
                    element.scrollIntoView({
                        behavior: 'auto'
                        , block: 'nearest'
                        , inline: 'start'
                    });
                }
            }, 100);
        });

    </script>
</body>
</html>
