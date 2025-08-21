<x-public-layout>

    @section('page-title')
        <title>{{ config('app.name', 'Octosync Software Ltd') }}</title>
        <meta name="description" content="A Quality pair of shoes is a great travel companion J & J Fashion Shoe's.">
        <meta name="keywords"
            content="J & J Fashion Shoe's, online shoes shop, J & J Fashion Shoe's  bangladesh, buy shoes online,">
        <meta name="language" content="English">
        {{-- <meta name="robots" content="noindex, nofollow"> <!-- Prevents indexing and following --> --}}
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="bingbot" content="index, follow">
        <meta name="author" content="J & J Fashion Shoe's">

        <!-- Add Open Graph meta tags to improve social media sharing -->
        <meta property="og:site_name" content="J & J Fashion Shoe's">
        <meta property="og:title" content="J & J Fashion Shoe's">
        <meta property="og:description" content="A Quality pair of shoes is a great travel companion J & J Fashion Shoe's.">
        <meta property="og:image" content="{{ url('images/products/10_09_2024/1725912797.jpg') }}">
        <meta property="og:url" content="{{ route('welcome') }}">
        <meta property="og:type" content="website">
        {{-- <meta property="fb:app_id" content="878569510493849"> --}}

        <!-- Add Twitter Card meta tags for improved sharing on Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="J & J Fashion Shoe's">
        <meta name="twitter:description"
            content="A Quality pair of shoes is a great travel companion J & J Fashion Shoe's.">
        <meta name="twitter:image" content="{{ url('images/products/10_09_2024/1725912797.jpg') }}">
        <!-- Add canonical link to avoid duplicate content issues -->
        <link rel="canonical" href="{{ route('welcome') }}">
        <!-- META TAG END -->


        <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "J & J Fashion Shoe's",
        "description": "A Quality pair of shoes is a great travel companion J & J Fashion Shoe's."
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

        <div>
            <!-- Hero -->
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Grid -->
                <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
                    <div>
                        <h1
                            class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-4xl lg:leading-tight dark:text-white">
                            আপনাকে ধন্যবাদ ~ <span
                                class="text-blue-600">{{ config('app.name', 'Octosync Software Ltd') }}</span>এর সাথে
                            থাকার জন্য।</h1>
                        <p class="mt-3 text-lg text-gray-800 dark:text-neutral-400">আমরা দ্রুততম সময়ের মধ্যে আপনার সাথে
                            যোগাযোগ করব।</p>

                        <!-- Buttons -->
                        <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                            <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('welcome') }}">
                                আরো কেনাকাটা করুন
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </a>
                            {{-- <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                href="#">
                                Contact sales team
                            </a> --}}
                        </div>
                        <!-- End Buttons -->

                        <!-- Review -->
                        <div class="mt-6 lg:mt-10 grid grid-cols-2 gap-x-5">
                            <!-- Review -->
                            <div class="py-5">
                                <div class="flex gap-x-1">
                                    <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51"
                                        height="51" viewBox="0 0 51 51" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                            fill="currentColor" />
                                    </svg>
                                    <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51"
                                        height="51" viewBox="0 0 51 51" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                            fill="currentColor" />
                                    </svg>
                                    <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51"
                                        height="51" viewBox="0 0 51 51" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                            fill="currentColor" />
                                    </svg>
                                    <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51"
                                        height="51" viewBox="0 0 51 51" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                            fill="currentColor" />
                                    </svg>
                                    <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51"
                                        height="51" viewBox="0 0 51 51" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                            fill="currentColor" />
                                    </svg>
                                </div>

                                <p class="mt-3 text-sm text-gray-800 dark:text-neutral-200">
                                    <span class="font-bold">4.6</span> /5 - from 12k reviews
                                </p>

                                <a target="_blank" href="https://maps.app.goo.gl/bHdiCZfti79B91ZX7"
                                    class="mt-5 font-bold text-2xl">
                                    <!-- Star -->
                                    Google
                                    <!-- End Star -->
                                </a>
                            </div>
                            <!-- End Review -->

                            <!-- Review -->
                            <div class="py-5">
                                <div class="flex gap-x-1">
                                    <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51"
                                        height="51" viewBox="0 0 51 51" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                            fill="currentColor" />
                                    </svg>
                                    <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51"
                                        height="51" viewBox="0 0 51 51" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                            fill="currentColor" />
                                    </svg>
                                    <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51"
                                        height="51" viewBox="0 0 51 51" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                            fill="currentColor" />
                                    </svg>
                                    <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51"
                                        height="51" viewBox="0 0 51 51" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                            fill="currentColor" />
                                    </svg>
                                    <svg class="size-4 text-gray-800 dark:text-neutral-200" width="51"
                                        height="51" viewBox="0 0 51 51" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M49.6867 20.0305C50.2889 19.3946 49.9878 18.1228 49.0846 18.1228L33.7306 15.8972C33.4296 15.8972 33.1285 15.8972 32.8275 15.2613L25.9032 0.317944C25.6021 0 25.3011 0 25 0V42.6046C25 42.6046 25.3011 42.6046 25.6021 42.6046L39.7518 49.9173C40.3539 50.2352 41.5581 49.5994 41.2571 48.6455L38.5476 32.4303C38.5476 32.1124 38.5476 31.7944 38.8486 31.4765L49.6867 20.0305Z"
                                            fill="transparent" />
                                        <path
                                            d="M0.313299 20.0305C-0.288914 19.3946 0.0122427 18.1228 0.915411 18.1228L16.2694 15.8972C16.5704 15.8972 16.8715 15.8972 17.1725 15.2613L24.0968 0.317944C24.3979 0 24.6989 0 25 0V42.6046C25 42.6046 24.6989 42.6046 24.3979 42.6046L10.2482 49.9173C9.64609 50.2352 8.44187 49.5994 8.74292 48.6455L11.4524 32.4303C11.4524 32.1124 11.4524 31.7944 11.1514 31.4765L0.313299 20.0305Z"
                                            fill="currentColor" />
                                    </svg>
                                </div>

                                <p class="mt-3 text-sm text-gray-800 dark:text-neutral-200">
                                    <span class="font-bold">4.8</span> /5 - from 5k reviews
                                </p>

                                <a target="_blank" href="https://www.facebook.com/groups/jjfashion20"
                                    class="mt-5 font-bold text-2xl">
                                    <!-- Star -->
                                    Facebook
                                    <!-- End Star -->
                                </a>
                            </div>
                            <!-- End Review -->
                        </div>
                        <!-- End Review -->
                    </div>
                    <!-- End Col -->

                    <div class="relative ms-4">
                        <img class="w-full rounded-md" src="{{ $img }}"
                            alt="Hero Image">
                        <div
                            class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-neutral-800 dark:via-neutral-900/0 dark:to-neutral-900/0">
                        </div>

                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Hero -->
        </div>










    </x-slot>
</x-public-layout>
