<x-public-layout>

    @section('page-title')
        <title>Contact - {{ config('app.name', 'Octosync Software Ltd') }}</title>
        <meta name="description" content="A Quality pair of shoes is a great travel companion Merge Fashion BD">
        <meta name="keywords"
            content="Merge Fashion BD, online shop,buy online,">
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
        <meta property="og:image" content="{{ url('images/server/08_11_2023/1699427779.jpg') }}">
        <meta property="og:url" content="{{ route('welcome') }}">
        <meta property="og:type" content="website">
        {{-- <meta property="fb:app_id" content="878569510493849"> --}}

        <!-- Add Twitter Card meta tags for improved sharing on Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Merge Fashion BD">
        <meta name="twitter:description" content="Make your life easy">
        <meta name="twitter:image" content="{{ url('images/server/08_11_2023/1699427779.jpg') }}">
        <!-- Add canonical link to avoid duplicate content issues -->
        <link rel="canonical" href="{{ route('welcome') }}">
        <!-- META TAG END -->


        <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "Merge Fashion BD",
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


            <p class="text-gray-700 text-center">
                🏢 অফিসের ঠিকানা:
                <br>
                ৩৬০/১, রোড- ৪, পূর্ব রসুলপুর,কামরাঙ্গীরচর, ঢাকা-১২১১
                <br>
                মোবাইলঃ 01972477394
            </p>

            <!-- Contact Us -->
            {{-- <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

                <div class="mt-6">
                    <div class="max-w-xl mx-auto">
                        <div class="text-center">
                            <p class="mb-4 text-2xl text-gray-600 dark:text-gray-400">
                                Find us on Google Maps
                            </p>
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4331.13587567723!2d90.41347027589761!3d23.773187387900183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c726f6f505eb%3A0x2a81d7775c688911!2sJ%26J%20Fashion%20Shoes!5e1!3m2!1sen!2sbd!4v1725914993685!5m2!1sen!2sbd"
                        style="border:0;" allowfullscreen="" loading="lazy" class="w-full h-96"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                
                <div class="max-w-xl mx-auto">
                    <div class="text-center">
                        <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white">
                            Contact us
                        </h1>
                        <p class="mt-1 text-gray-600 dark:text-gray-400">
                            We'd love to talk about how we can help you.
                        </p>
                    </div>
                </div>

                <div class="mt-12 max-w-lg mx-auto">
                    <!-- Card -->
                    <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 dark:border-gray-700">
                        <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-gray-200">
                            Fill in the form
                        </h2>

                        <form>
                            <div class="grid gap-4 lg:gap-6">
                                <!-- Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div>
                                        <label for="hs-firstname-contacts-1"
                                            class="block text-sm text-gray-700 font-medium dark:text-white">First
                                            Name</label>
                                        <input type="text" name="hs-firstname-contacts-1"
                                            id="hs-firstname-contacts-1"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                    </div>

                                    <div>
                                        <label for="hs-lastname-contacts-1"
                                            class="block text-sm text-gray-700 font-medium dark:text-white">Last
                                            Name</label>
                                        <input type="text" name="hs-lastname-contacts-1" id="hs-lastname-contacts-1"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                    </div>
                                </div>
                                <!-- End Grid -->

                                <!-- Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div>
                                        <label for="hs-email-contacts-1"
                                            class="block text-sm text-gray-700 font-medium dark:text-white">Email</label>
                                        <input type="email" name="hs-email-contacts-1" id="hs-email-contacts-1"
                                            autocomplete="email"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                    </div>

                                    <div>
                                        <label for="hs-phone-number-1"
                                            class="block text-sm text-gray-700 font-medium dark:text-white">Phone
                                            Number</label>
                                        <input type="text" name="hs-phone-number-1" id="hs-phone-number-1"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                    </div>
                                </div>
                                <!-- End Grid -->

                                <div>
                                    <label for="hs-about-contacts-1"
                                        class="block text-sm text-gray-700 font-medium dark:text-white">Details</label>
                                    <textarea id="hs-about-contacts-1" name="hs-about-contacts-1" rows="4"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"></textarea>
                                </div>
                            </div>
                            <!-- End Grid -->

                            <div class="mt-6 grid">
                                <button type="submit"
                                    class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">Send
                                    inquiry</button>
                            </div>

                            <div class="mt-3 text-center">
                                <p class="text-sm text-gray-500">
                                    We'll get back to you in 1-2 business days.
                                </p>
                            </div>
                        </form>
                    </div>
                    <!-- End Card -->
                </div>



            </div> --}}
            <!-- End Contact Us -->


        </section>


    </x-slot>
</x-public-layout>
