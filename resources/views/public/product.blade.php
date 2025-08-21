<x-public-layout>
    @if ($product == null)
        @section('page-title')
            <title> Product not found</title>
        @endsection
    @else
        @section('page-title')
            <title>{{ $product->pro_name }}</title>
            <meta name="description" content="A Quality pair of shoes is a great travel companion J & J Fashion Shoe's">
            <meta name="keywords"
                content="J & J Fashion Shoe's, online shoes shop, J & J Fashion Shoe's bangladesh, buy shoes online,{{ $product->pro_name }}">
            <meta name="language" content="English">
            {{-- <meta name="robots" content="noindex, nofollow"> <!-- Prevents indexing and following --> --}}
            <meta name="robots" content="index, follow">
            <meta name="googlebot" content="index, follow">
            <meta name="bingbot" content="index, follow">
            <meta name="author" content="J & J Fashion Shoe's">

            <!-- Add Open Graph meta tags to improve social media sharing -->
            <meta property="og:site_name" content="J & J Fashion Shoe's">
            <meta property="og:title" content="{{ $product->pro_name }}">
            <meta property="og:description" content="{{ $product->content }}">
            <meta property="og:image" content="{{ $product->pro_cover }}">
            <meta property="og:url" content="{{ route('welcome') }}">
            <meta property="og:type" content="website">
            {{-- <meta property="fb:app_id" content="878569510493849"> --}}

            <!-- Add Twitter Card meta tags for improved sharing on Twitter -->
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:title" content="J & J Fashion Shoe's">
            <meta name="twitter:description"
                content="A Quality pair of shoes is a great travel companion J & J Fashion Shoe's">
            <meta name="twitter:image" content="{{ url('images/products/10_09_2024/1725912797.jpg') }}">
            <!-- Add canonical link to avoid duplicate content issues -->
            <link rel="canonical" href="{{ route('welcome') }}">
            <!-- META TAG END -->


            <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "WebPage",
                "name": "Merge Fashion BD ",
                "description": "Make your life easy"
            }
            </script>
        @endsection
    @endif

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

            @if ($product == null)
                <p class="text-4xl sm:text-4xl text-center font-bold text-gray-900 dark:text-gray-200">
                    Product not found
                </p>
            @else
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4">

                    <div class="sm:col-span-2 md:col-span-2 lg:col-span-2 xl:col-span-2 p-2">
                        @php
                            $product_images = explode(', ', $product->pro_images);
                        @endphp
                        <div class="grid grid-cols-2 gap-4">
                            {{-- @foreach ($product_images as $product_image)
                                <!-- Trigger for Modal -->
                                <a class="group block relative overflow-hidden rounded-lg" href="#">
                                    <img class="w-full object-cover bg-gray-100 rounded-lg dark:bg-neutral-800 transform transition-transform duration-300 group-hover:scale-150"
                                        src="{{ $product_image }}" alt="Project" style="transform-origin: center;"
                                        onmouseover="this.style.transformOrigin = 'center';"
                                        onmousemove="this.style.transformOrigin = `${((event.clientX - this.getBoundingClientRect().left) / this.offsetWidth) * 100}% ${((event.clientY - this.getBoundingClientRect().top) / this.offsetHeight) * 100}%`;">
                                    <div class="absolute bottom-1 end-1 opacity-0 group-hover:opacity-100 transition">
                                        <div
                                            class="flex items-center gap-x-1 py-1 px-2 bg-white border border-gray-200 text-gray-800 rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-zoom-in zoom-icon" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11M13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0" />
                                                <path
                                                    d="M10.344 11.742q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1 6.5 6.5 0 0 1-1.398 1.4z" />
                                                <path fill-rule="evenodd"
                                                    d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            @endforeach --}}
                            @foreach ($product_images as $product_image)
                                <a class="group block relative overflow-hidden rounded-lg" href="#">
                                    <img class="w-full object-cover bg-gray-100 rounded-lg dark:bg-neutral-800 transform transition-transform duration-300 group-hover:scale-150"
                                        src="{{ asset(trim($product_image)) }}" alt="Project"
                                        style="transform-origin: center;"
                                        onmouseover="this.style.transformOrigin = 'center';"
                                        onmousemove="this.style.transformOrigin = `${((event.clientX - this.getBoundingClientRect().left) / this.offsetWidth) * 100}% ${((event.clientY - this.getBoundingClientRect().top) / this.offsetHeight) * 100}%`;">
                                    <!-- rest same... -->
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-span-1 p-2 bg-lime-200">
                        <section class="rounded-lg">
                            <div class="p-4 mx-auto max-w-2xl">
                                <h2
                                    class="mb-2 text-xl font-semibold leading-none text-gray-900 md:text-2xl dark:text-white">
                                    {{ $product->pro_name }}-[{{ $product->pro_id }}]</h2>
                                <p
                                    class="mb-4 text-xl font-extrabold leading-none text-red-600 md:text-2xl dark:text-red-600">
                                    Discount: {{ $product->discount }}%</p>

                                <dl class="flex items-center space-x-6">
                                    <div>
                                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                            Regular
                                            Price
                                        </dt>
                                        <del>
                                            <dd class="mb-4 font-medium text-red-500 sm:mb-5 dark:text-gray-400">
                                                {{ $product->r_price }} TK
                                            </dd>
                                        </del>
                                    </div>
                                    <div>
                                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                            Offer
                                            Price
                                        </dt>
                                        <dd class="mb-4 font-medium text-gray-900 sm:mb-5 dark:text-gray-400">
                                            {{ $product->c_price }} TK
                                        </dd>
                                    </div>
                                </dl>

                                <dl class="flex items-center space-x-6">
                                    <div>
                                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                            Size
                                        </dt>
                                    </div>
                                </dl>
                                <form action="{{ route('public.buyNow', ['id' => $product->pro_id]) }}" method="post">
                                    @csrf
                                    @php
                                        $uniqueSizes = [];
                                    @endphp

                                    @foreach ($stocks as $stock)
                                        @php
                                            if (!in_array($stock->size, $uniqueSizes) && $stock->quantity >= 1) {
                                                $uniqueSizes[] = $stock->size;
                                            }
                                        @endphp
                                    @endforeach

                                    @if (!empty($uniqueSizes))
                                        <div class="grid grid-cols-4">
                                            @foreach ($uniqueSizes as $size)
                                                <div class="flex items-center mr-4">
                                                    <div class="flex items-center mr-4">
                                                        <input id="{{ $size }}-checkbox" type="radio"
                                                            required value="{{ $size }}" name="size"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="{{ $size }}-checkbox"
                                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                            {{ $size }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                    <div class="custom-number-input h-full my-4">
                                        <label for="custom-input-number"
                                            class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Quantity
                                        </label>
                                        <div class="flex flex-row h-10 w-32 rounded-lg relative mt-1">
                                            <button data-action="decrement" type="button"
                                                class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                <span class="m-auto text-2xl font-thin">−</span>
                                            </button>
                                            <input type="number" id="custom-input-number"
                                                class="focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                                name="quantity" value="1"></input>
                                            <button data-action="increment" type="button"
                                                class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                                <span class="m-auto text-2xl font-thin">+</span>
                                            </button>
                                        </div>
                                        <div class="mt-2">
                                            <button type="submit"
                                                class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                                Buy Now</button>
                                            <a href="tel:01756555100"
                                                class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                                Call Now
                                            </a>
                                        </div>
                                    </div>
                                </form>

                        </section>
                        <h2 class="mb-2 text-xl font-semibold leading-none text-gray-900 md:text-2xl dark:text-white">
                            Foot size for shoes
                        </h2>

                        <a class="group block relative overflow-hidden rounded-lg zoom-icon" href="#">
                            <img class="w-full size-40 object-cover bg-gray-100 rounded-lg dark:bg-neutral-800"
                                src="{{ url('images/products/10_09_2024/1725967776.jpg') }}" alt="Project">
                            <div class="absolute bottom-1 end-1 opacity-0 group-hover:opacity-100 transition">
                                <div
                                    class="flex items-center gap-x-1 py-1 px-2 bg-white border border-gray-200 text-gray-800 rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-zoom-in zoom-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11M13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0" />
                                        <path
                                            d="M10.344 11.742q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1 6.5 6.5 0 0 1-1.398 1.4z" />
                                        <path fill-rule="evenodd"
                                            d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5" />
                                    </svg>
                                </div>
                            </div>
                        </a>

                        <!-- Modal Structure -->
                        <div id="imageModal"
                            class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-80">
                            <div class="relative w-auto h-auto max-w-3xl max-h-full">
                                <span id="closeModal"
                                    class="absolute top-4 right-4 text-white cursor-pointer text-4xl">&times;</span>
                                <img id="modalImage" class="w-full h-auto object-contain" src=""
                                    alt="Full Image">
                            </div>
                        </div>

                    </div>

                </div>




                <div class="p-4">
                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Details</dt>
                    <dd class="mb-4 font-medium text-gray-800 sm:mb-5 dark:text-gray-400">
                        {!! $product->content !!}
                    </dd>
                </div>

                <div class="text-center mt-10">
                    <p class="text-4xl sm:text-4xl font-bold text-gray-900 dark:text-gray-200">
                        Releted Products
                    </p>

                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-5 gap-4 mt-8">
                        @foreach ($products as $product)
                            <div
                                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                {{-- <a href="{{ route('public.productView', ['id' => $product->pro_id]) }}">
                                    <img class="p-4 rounded-t-lg" src=" {{ $product->pro_cover }}"
                                        alt="product image" />
                                </a> --}}
                                <a href="{{ route('public.productView', ['id' => $product->pro_id]) }}">
                                    <img class="p-4 rounded-t-lg" src="{{ asset(trim($product->pro_cover)) }}"
                                        alt="product image" />
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
                                            {{ $product->c_price }} TK
                                        </span>

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
                </div>

            @endif

        </section>



        <style>
            input[type='number']::-webkit-inner-spin-button,
            input[type='number']::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            .custom-number-input input:focus {
                outline: none !important;
            }

            .custom-number-input button:focus {
                outline: none !important;
            }
        </style>

        <script>
            function decrement(e) {
                const btn = e.target.parentNode.parentElement.querySelector(
                    'button[data-action="decrement"]'
                );
                const target = btn.nextElementSibling;
                let value = Number(target.value);
                if (value > 1) {
                    value--;
                    target.value = value;
                }
            }

            function increment(e) {
                const btn = e.target.parentNode.parentElement.querySelector(
                    'button[data-action="decrement"]'
                );
                const target = btn.nextElementSibling;
                let value = Number(target.value);
                value++;
                target.value = value;
            }

            const decrementButtons = document.querySelectorAll(
                `button[data-action="decrement"]`
            );

            const incrementButtons = document.querySelectorAll(
                `button[data-action="increment"]`
            );

            decrementButtons.forEach(btn => {
                btn.addEventListener("click", decrement);
            });

            incrementButtons.forEach(btn => {
                btn.addEventListener("click", increment);
            });

            document.addEventListener('DOMContentLoaded', function() {
                const zoomIcons = document.querySelectorAll('.zoom-icon');
                const modal = document.getElementById('imageModal');
                const modalImage = document.getElementById('modalImage');
                const closeModal = document.getElementById('closeModal');

                zoomIcons.forEach(function(zoomIcon) {
                    zoomIcon.addEventListener('click', function(event) {
                        event.preventDefault();
                        const imageUrl = this.closest('a').querySelector('img').src;
                        modalImage.src = imageUrl;
                        modal.classList.remove('hidden');
                    });
                });

                closeModal.addEventListener('click', function() {
                    modal.classList.add('hidden');
                });

                // Close modal when clicking outside the image
                modal.addEventListener('click', function(event) {
                    if (event.target === modal) {
                        modal.classList.add('hidden');
                    }
                });
            });
        </script>



    </x-slot>
</x-public-layout>
