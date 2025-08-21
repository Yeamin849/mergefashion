<x-public-layout>

    @section('page-title')
        <title>{{ $pro_cat }} releted products</title>
        <meta name="description"
            content="A Quality pair of shoes is a great travel companion Merge Fashion BD">
        <meta name="keywords" content="Merge Fashion BD, online shoes shop, Merge Fashion BD bangladesh, buy shoes online,">
        <meta name="language" content="English">
        {{-- <meta name="robots" content="noindex, nofollow"> <!-- Prevents indexing and following --> --}}
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="bingbot" content="index, follow">
        <meta name="author" content="Merge Fashion BD">

        <!-- Add Open Graph meta tags to improve social media sharing -->
        <meta property="og:site_name" content="Merge Fashion BD">
        <meta property="og:title" content="{{ $pro_cat }} releted products">
        <meta property="og:description"
            content="A Quality pair of shoes is a great travel companion Merge Fashion BD">
        <meta property="og:image" content="{{ url('images/products/10_09_2024/1725912797.jpg') }}">
        <meta property="og:url" content="{{ route('welcome') }}">
        <meta property="og:type" content="website">
        {{-- <meta property="fb:app_id" content="878569510493849"> --}}

        <!-- Add Twitter Card meta tags for improved sharing on Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $pro_cat }} releted products">
        <meta name="twitter:description"
            content="A Quality pair of shoes is a great travel companion Merge Fashion BD">
        <meta name="twitter:image" content="{{ url('images/products/10_09_2024/1725912797.jpg') }}">
        <!-- Add canonical link to avoid duplicate content issues -->
        <link rel="canonical" href="{{ route('welcome') }}">
        <!-- META TAG END -->


        <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Merge Fashion BD - Online Shoes Shop",
        "description": "A Quality pair of shoes is a great travel companion Merge Fashion BD"
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

            @if ($products->isEmpty())
                <p class="text-4xl sm:text-4xl text-center font-bold text-gray-900 dark:text-gray-200">
                    No products found
                </p>
            @else
                <p class="text-4xl sm:text-4xl text-center font-bold text-gray-900 dark:text-gray-200">
                    {{ $pro_cat }} releted products
                </p>

                <div class="grid sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-5 gap-4 mt-8">
                    @foreach ($products as $product)
                        <div
                            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="{{ route('public.productView', ['id' => $product->pro_id]) }}">
                                <img class="p-4 rounded-t-lg" src="{{ asset($product->pro_cover) }}" alt="product image" />

                            </a>
                            <div class="px-5 pb-5">
                                <a href="{{ route('public.productView', ['id' => $product->pro_id]) }}">
                                    <h5
                                        class="text-sm font-semibold tracking-tight text-purple-600 dark:text-purple-600">
                                        {{ $product->pro_name }}
                                    </h5>
                                </a>
                                <div class="flex items-center justify-between mt-1">
                                    <span class="text-xl font-bold text-gray-900 dark:text-white">
                                        {{ $product->c_price }} TK</span>
                                    <a href="{{ route('public.productView', ['id' => $product->pro_id]) }}"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endif
        </section>


    </x-slot>
</x-public-layout>
