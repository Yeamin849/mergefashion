<x-public-layout>

    @section('page-title')
        <title>{{ config('app.name', 'Octosync Software Ltd') }}</title>
        <meta name="description" content="Make your life easy">
        <meta name="keywords"
            content="Merge Fashion BD, Merge Fashion BD  bangladesh,">
        <meta name="language" content="English">
        {{-- <meta name="robots" content="noindex, nofollow"> <!-- Prevents indexing and following --> --}}
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="bingbot" content="index, follow">
        <meta name="author" content="Merge Fashion BD">

        <!-- Add Open Graph meta tags to improve social media sharing -->
        <meta property="og:site_name" content="Merge Fashion BD">
        <meta property="og:title" content="Merge Fashion BD">
        <meta property="og:description" content="Make your life easy">
        <meta property="og:image" content="{{ url('images/products/10_09_2024/1725912797.jpg') }}">
        <meta property="og:url" content="{{ route('welcome') }}">
        <meta property="og:type" content="website">
        {{-- <meta property="fb:app_id" content="878569510493849"> --}}

        <!-- Add Twitter Card meta tags for improved sharing on Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Merge Fashion BD">
        <meta name="twitter:description"
            content="Make your life easy">
        <meta name="twitter:image" content="{{ url('images/products/10_09_2024/1725912797.jpg') }}">
        <!-- Add canonical link to avoid duplicate content issues -->
        <link rel="canonical" href="{{ route('welcome') }}">
        <!-- META TAG END -->


        <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Merge Fashion BD",
        "description": "Make your life easy"
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

        <section class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mt-8">

            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    @foreach ($sliders as $slider)
                        <!-- Item -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <a href="{{ $slider->target_url }}">
                                <img src="<?= $slider->img_url ?>"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- Slider indicators (you can add these dynamically too) -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    @for ($i = 0; $i < count($sliders); $i++)
                        <button type="button" class="w-3 h-3 rounded-full"
                            aria-current="{{ $i == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $i + 1 }}"
                            data-carousel-slide-to="{{ $i }}"></button>
                    @endfor
                </div>
                <!-- Slider controls (previous and next) -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            <div class="text-center mt-10">
                <p class="text-2xl sm:text-2xl font-bold text-gray-900 dark:text-gray-200">
                    Featured Products
                </p>

                <p class="mt-3 text-gray-900 dark:text-gray-400">
                    Check & Get Your Desired Product!
                </p>
            </div>


            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-5 gap-4 mt-8">
                @foreach ($featured as $product)
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ route('public.productView', ['id' => $product->pro_id]) }}">
                            <img class="p-4 rounded-t-lg" src=" {{ $product->pro_cover }}" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                            <div class="flex items-center justify-between mt-1">
                                <a href="{{ route('public.productView', ['id' => $product->pro_id]) }}">
                                    <h5
                                        class="text-sm font-semibold tracking-tight text-purple-600 dark:text-purple-600">
                                        {{ $product->pro_name }}
                                    </h5>
                                </a>
                                <p
                                    class="text-sm font-bold bg-primary-200 pl-1 pr-1 text-red-500 rounded-lg dark:text-white">
                                    {{ $product->discount }}% OFF
                                </p>
                            </div>
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

            <div class="text-center mt-10">
                <p class="text-2xl sm:text-2xl font-bold text-gray-900 dark:text-gray-200">
                    Recently Added Products
                </p>

                <p class="mt-3 text-gray-900 dark:text-gray-400">
                    Check & Get Your Desired Product!
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-5 gap-4 mt-8">
                @foreach ($products as $product)
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ route('public.productView', ['id' => $product->pro_id]) }}">
                            <img class="p-4 rounded-t-lg" src=" {{ $product->pro_cover }}" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                            <div class="flex items-center justify-between mt-1">
                                <a href="{{ route('public.productView', ['id' => $product->pro_id]) }}">
                                    <h5
                                        class="text-sm font-semibold tracking-tight text-purple-600 dark:text-purple-600">
                                        {{ $product->pro_name }}
                                    </h5>
                                </a>
                                <p
                                    class="text-sm font-bold bg-primary-200 pl-1 pr-1 text-red-500 rounded-lg dark:text-white">
                                    {{ $product->discount }}% OFF
                                </p>
                            </div>
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
            {{ $products->links() }}





            <!-- Clients -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Title -->
                <div class="sm:w-1/2 xl:w-1/3 mx-auto text-center mb-6 md:mb-12">
                    <h2 class="text-xl font-semibold md:text-2xl md:leading-tight text-gray-800 dark:text-gray-200">
                        Trusted by 1000+
                    </h2>
                </div>
                <!-- End Title -->

                <!-- Grid -->
                <div class="grid sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-5 gap-3 lg:gap-6">

                    @foreach ($trusted_clients as $item)
                        <div class="p-4 md:p-7 bg-gray-100 rounded-lg dark:bg-slate-800">
                            <a href="{{ $item->target_link }}">
                                <img class="bg-cover bg-center" src="{{ $item->image_link }}" alt="">
                            </a>
                        </div>
                    @endforeach

                </div>
                <!-- End Grid -->
            </div>
            <!-- End Clients -->

            {{-- <x-modal name="promotion-banner" :show="true" focusable x-data="modalControl()" x-init="init()"
            x-ref="promotionBanner">
            <div class="flex justify-center items-center h-full">
                <img src="{{ url('images/products/10_09_2024/1725907883.jpg') }}" alt="Image Description"
                    class="max-w-full max-h-full">
            </div>
        </x-modal> --}}


        </section>





    </x-slot>
</x-public-layout>
