<x-public-layout>

    @section('page-title')
        <title>Check out -{{ config('app.name', 'Octosync Software Ltd') }}</title>

        <meta name="robots" content="noindex, nofollow"> <!-- Prevents indexing and following -->
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

            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg">

                <!-- Invoice -->
                <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
                    <!-- Grid -->
                    {{-- <div
                        class="mb-5 pb-5 flex justify-between items-center border-b border-gray-200 dark:border-gray-700">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Invoice</h2>
                        </div>
                        <!-- Col -->

                        <div class="inline-flex gap-x-2">
                            <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                href="#">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                </svg>
                                Invoice PDF
                            </a>
                            <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                href="#">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                                    <path
                                        d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                </svg>
                                Print
                            </a>
                        </div>
                        <!-- Col -->
                    </div> --}}
                    <!-- End Grid -->

                    <!-- Grid -->
                    <div class="grid md:grid-cols-2 gap-3">
                        <div>
                            <div class="grid space-y-3">
                                <dl class="grid sm:flex gap-x-3 text-sm">
                                    <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                                        Billed to:
                                    </dt>
                                    <dd class="text-gray-800 dark:text-gray-200">
                                        <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium"
                                            >
                                            {{ $address->email }}
                                        </a>
                                    </dd>
                                </dl>

                                <dl class="grid sm:flex gap-x-3 text-sm">
                                    <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                                        Billing details:
                                    </dt>
                                    <dd class="font-medium text-gray-800 dark:text-gray-200">
                                        <span class="block font-semibold">{{ $address->name }}</span>
                                        <address class="font-normal">
                                            {{ $address->mobile }}<br>
                                            {{ $address->address }}<br>
                                            {{ $address->upazila }}<br>
                                            {{ $address->zila }}<br>
                                            {{ $address->division }}
                                        </address>
                                    </dd>
                                </dl>

                                {{-- <dl class="grid sm:flex gap-x-3 text-sm">
                                    <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                                        Shipping details:
                                    </dt>
                                    <dd class="font-medium text-gray-800 dark:text-gray-200">
                                        <span class="block font-semibold">Sara Williams</span>
                                        <address class="not-italic font-normal">
                                            280 Suzanne Throughway,<br>
                                            Breannabury, OR 45801,<br>
                                            United States<br>
                                        </address>
                                    </dd>
                                </dl> --}}
                            </div>
                        </div>
                        <!-- Col -->

                        <div>
                            <div class="grid space-y-3">
                                <dl class="grid sm:flex gap-x-3 text-sm">
                                    <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                                        Company:
                                    </dt>
                                    <dd class="font-medium text-gray-800 dark:text-gray-200">
                                        {{ config('app.name', 'Octosync Software Ltd') }}
                                    </dd>
                                </dl>

                                <dl class="grid sm:flex gap-x-3 text-sm">
                                    <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                                        Currency:
                                    </dt>
                                    <dd class="font-medium text-gray-800 dark:text-gray-200">
                                        BDT - Bangladeshi TK
                                    </dd>
                                </dl>

                                <dl class="grid sm:flex gap-x-3 text-sm">
                                    <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                                        Date:
                                    </dt>
                                    <dd class="font-medium text-gray-800 dark:text-gray-200">
                                        {{ date('d.m.Y') }}
                                    </dd>
                                </dl>

                                {{-- <dl class="grid sm:flex gap-x-3 text-sm">
                                    <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                                        Billing method:
                                    </dt>
                                    <dd class="font-medium text-gray-800 dark:text-gray-200">
                                        Send invoice
                                    </dd>
                                </dl> --}}
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- End Grid -->

                    <!-- Table -->
                    <div class="mt-6 border border-gray-200 p-4 rounded-lg space-y-4 dark:border-gray-700">
                        <div class="hidden sm:grid sm:grid-cols-6">
                            <div class="sm:col-span-2 text-xs font-medium text-gray-500 uppercase">Item</div>
                            <div class="text-left text-xs font-medium text-gray-500 uppercase">Size</div>
                            <div class="text-left text-xs font-medium text-gray-500 uppercase">Qty</div>
                            <div class="text-left text-xs font-medium text-gray-500 uppercase">Rate</div>
                            <div class="text-right text-xs font-medium text-gray-500 uppercase">Amount</div>
                        </div>

                        @php $total = 0 @endphp
                        @if (session('cart'))
                            @foreach (session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp

                                <div class="hidden sm:block border-b border-gray-200 dark:border-gray-700"></div>

                                <div class="grid grid-cols-3 sm:grid-cols-6 gap-2">
                                    <div class="col-span-full sm:col-span-2">
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                                        <p class="font-medium text-gray-800 dark:text-gray-200">{{ $details['name'] }}
                                        </p>
                                    </div>
                                    <div>
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Size</h5>
                                        <p class="text-gray-800 dark:text-gray-200">{{ $details['size'] }}</p>
                                    </div>
                                    <div>
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Qty</h5>
                                        <p class="text-gray-800 dark:text-gray-200">{{ $details['quantity'] }}</p>
                                    </div>
                                    <div>
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Rate</h5>
                                        <p class="text-gray-800 dark:text-gray-200">{{ $details['price'] }} TK</p>
                                    </div>
                                    <div>
                                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                                        <p class="sm:text-right text-gray-800 dark:text-gray-200">
                                            {{ $details['price'] * $details['quantity'] }} TK</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!-- End Table -->
                    @php
                        $totalQuantity = 0;
                    @endphp

                    @if (session('cart'))
                        @foreach (session('cart') as $id => $details)
                            @php
                                $totalQuantity += $details['quantity'];
                            @endphp
                        @endforeach
                    @endif

                    <!-- Flex -->
                    <div class="mt-8 flex sm:justify-end">
                        <div class="w-full max-w-2xl sm:text-right space-y-2">
                            <!-- Grid -->
                            <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                                <dl class="grid sm:grid-cols-5 gap-x-3 text-sm">
                                    <dt class="col-span-3 text-gray-500">Subotal:</dt>
                                    <dd class="col-span-2 font-medium text-gray-800 dark:text-gray-200">
                                        {{ $total }} TK</dd>
                                </dl>

                                <dl class="grid sm:grid-cols-5 gap-x-3 text-sm">
                                    <dt class="col-span-3 text-gray-500">Total:</dt>
                                    <dd class="col-span-2 font-medium text-gray-800 dark:text-gray-200">
                                        {{ $total }} TK</dd>
                                </dl>

                                <dl class="grid sm:grid-cols-5 gap-x-3 text-sm">
                                    <dt class="col-span-3 text-gray-500">Tax:</dt>
                                    <dd class="col-span-2 font-medium text-gray-800 dark:text-gray-200">0.00 TK</dd>
                                </dl>

                                <dl class="grid sm:grid-cols-5 gap-x-3 text-sm">
                                    <dt class="col-span-3 text-gray-500">Amount paid:</dt>
                                    <dd class="col-span-2 font-medium text-gray-800 dark:text-gray-200">
                                        {{ $total }} TK</dd>
                                </dl>

                                <dl class="grid sm:grid-cols-5 gap-x-3 text-sm">
                                    <dt class="col-span-3 text-gray-500">Due balance:</dt>
                                    <dd class="col-span-2 font-medium text-gray-800 dark:text-gray-200">0.00 TK</dd>
                                </dl>
                                <dl class="grid sm:grid-cols-5 gap-x-3 text-sm mt-2">
                                    <dt class="col-span-3 text-gray-500">
                                        <a type="button"
                                            class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 mr-2 -ml-1 w-7"
                                                viewBox="-18.0015 -28.3525 156.013 170.115">
                                                <g fill="none">
                                                    <path fill="#D12053" d="M96.58 62.45l-53.03-8.31 7.03 31.6z" />
                                                    <path fill="#E2136E" d="M96.58 62.45L56.62 6.93 43.56 54.15z" />
                                                    <path fill="#D12053" d="M42.32 53.51L.45 0l54.83 6.55z" />
                                                    <path fill="#9E1638" d="M23.25 31.15L0 9.24h6.12z" />
                                                    <path fill="#D12053" d="M107.89 35.46l-9.84 26.69L82.1 40.09z" />
                                                    <path fill="#E2136E" d="M56.77 84.14l38.61-15.51L97 63.7z" />
                                                    <path fill="#9E1638" d="M25.89 113.41l16.54-58.02 8.39 37.75z" />
                                                    <path fill="#E2136E" d="M109.43 35.67l-4.06 11.02 14.64-.24z" />
                                                </g>
                                            </svg>
                                            Comming soon...
                                        </a>
                                    </dt>
                                    <dd class="col-span-2 font-medium text-gray-800 dark:text-gray-200">
                                        <form action="{{ route('confirm.order') }}" method="post">
                                            @csrf
                                            <button type="submit"
                                                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-check-circle h-4 mr-2 -ml-1 w-7"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                    <path
                                                        d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                                </svg>
                                                Confirm Order
                                            </button>
                                        </form>
                                    </dd>
                                </dl>
                            </div>
                            <!-- End Grid -->
                        </div>
                    </div>
                    <!-- End Flex -->
                </div>
                <!-- End Invoice -->



            </div>

        </section>


    </x-slot>
</x-public-layout>
