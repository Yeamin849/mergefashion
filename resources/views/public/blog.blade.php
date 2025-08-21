<x-public-layout>

    @section('page-title')
        <title>News - {{ config('app.name', 'Octosync Software Ltd') }}</title>
        <meta name="description"
            content="A Quality pair of shoes is a great travel companion Merge Fashion BD - Trustable Online Shop.">
        <meta name="keywords" content="Merge Fashion BD, online shoes shop, Merge Fashion BD bangladesh, buy shoes online,">
        <meta name="language" content="English">
        {{-- <meta name="robots" content="noindex, nofollow"> <!-- Prevents indexing and following --> --}}
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="bingbot" content="index, follow">
        <meta name="author" content="Merge Fashion BD">

        <!-- Add Open Graph meta tags to improve social media sharing -->
        <meta property="og:site_name" content="Merge Fashion BD">
        <meta property="og:title" content="News - {{ config('app.name', 'Octosync Software Ltd') }}">
        <meta property="og:description"
            content="Read all leatest news from - {{ config('app.name', 'Octosync Software Ltd') }}">
        <meta property="og:image" content="{{ url('images/products/10_09_2024/1725912797.jpg') }}">
        <meta property="og:url" content="{{ route('welcome') }}">
        <meta property="og:type" content="website">
        {{-- <meta property="fb:app_id" content="878569510493849"> --}}

        <!-- Add Twitter Card meta tags for improved sharing on Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="News - {{ config('app.name', 'Octosync Software Ltd') }}">
        <meta name="twitter:description"
            content="Read all leatest news from - {{ config('app.name', 'Octosync Software Ltd') }}">
        <meta name="twitter:image" content="{{ url('images/products/10_09_2024/1725912797.jpg') }}">
        <!-- Add canonical link to avoid duplicate content issues -->
        <link rel="canonical" href="{{ route('welcome') }}">
        <!-- META TAG END -->


        <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Merge Fashion BD",
        "description": "A Quality pair of shoes is a great travel companion Merge Fashion BD - Trustable Online Shop."
    }
    </script>
    @endsection

    <x-slot name="header">
        @foreach ($categories as $categorie)
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                href="{{ route('public.categoryView', ['pro_cat' => $categorie->catName]) }}">
                {{ $categorie->catName }}
            </a>
        @endforeach
    </x-slot>

    <x-slot name="main">

        <section class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 p-8">

            @if ($blogs->isEmpty())
                <p class="text-4xl sm:text-4xl text-center font-bold text-gray-900 dark:text-gray-200">
                    No blog found
                </p>
            @else
                <p class="text-4xl sm:text-4xl text-center font-bold text-gray-900 dark:text-gray-200">
                    Blogs
                </p>

                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4 mt-8">

                    @foreach ($blogs as $blog)
                        <a class="group relative block" href="{{ route('public.blog', ['id' => $blog->blog_id]) }}">
                            <div
                                class="flex-shrink-0 relative w-full rounded-xl overflow-hidden h-[350px] before:absolute before:inset-x-0 before:w-full before:h-full before:bg-gradient-to-t before:from-gray-900/[.7] before:z-[1]">
                                <img class="w-full h-full absolute top-0 left-0 object-cover"
                                    src="{{ asset(trim($blog->img_link)) }}" alt="Image Description">
                            </div>

                            <div class="absolute top-0 inset-x-0 z-10">
                                <div class="p-4 flex flex-col h-full sm:p-6">
                                    <!-- Avatar -->
                                    <div class="flex items-center">
                                        <div class="ml-2.5 sm:ml-4">
                                            <h4 class="font-semibold text-white">
                                                {{ $blog->date }}
                                            </h4>
                                        </div>
                                    </div>
                                    <!-- End Avatar -->
                                </div>
                            </div>

                            <div class="absolute bottom-0 inset-x-0 z-10">
                                <div class="flex flex-col h-full p-4 sm:p-6">
                                    <h3
                                        class="text-lg sm:text-3xl font-semibold text-white group-hover:text-white/[.8]">
                                        {{ $blog->title }}
                                    </h3>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            @endif
        </section>


    </x-slot>
</x-public-layout>
