<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>

    <link rel="preload" as="style" href="{{ asset('build/assets/app-ad555dc9.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/app-ad555dc9.css') }}" />
    <link rel="modulepreload" href="{{ asset('build/assets/preline-90866586.js') }}" />
    <script type="module" src="{{ asset('build/assets/preline-90866586.js') }}"></script>
    <style>
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body>
    <section class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 p-8">

        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg">

            <!-- Invoice -->
            <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
                <!-- Grid -->
                <div class="mb-5 pb-5 flex justify-between items-center border-b border-gray-200 dark:border-gray-700">
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">
                            <a href="{{ route('welcome') }}">
                                {{ config('app.name', 'Octosync Software Ltd') }}
                            </a>
                        </h2>
                        <dl class="grid sm:flex gap-x-3 text-sm">
                            <dd class="font-medium text-gray-800 dark:text-gray-200">
                                Office:  Road-4,  Kamrangirchar,Dhaka-1212
                                <br>
                                Phone: +8801972477394
                                <br>
                                Website: www.mergefashion.xyz
                            </dd>
                        </dl>
                    </div>
                    <!-- Col -->

                    <div class="inline-flex gap-x-2">
                        {{-- <a href="{{ route('admin.invoice', ['id' => $address->tran_id, 'download' => true]) }}"
                            class="btn btn-primary">
                            Download PDF
                        </a> --}}
                        <a class="no-print py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                            onclick="window.print()">
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
                </div>
                <!-- End Grid -->

                <!-- Grid -->
                <div class="flex justify-between">
                    <div>
                        <div class="grid space-y-3">
                            {{-- <dl class="grid sm:flex gap-x-3 text-sm">
                                <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                                    Billed to:
                                </dt>
                                <dd class="text-gray-800 dark:text-gray-200">
                                    <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium"
                                        href="#">
                                        sara@site.com
                                    </a>
                                </dd>
                            </dl> --}}

                            <dl class="grid sm:flex gap-x-3 text-sm">
                                <dt class="min-w-[150px] max-w-[200px] text-gray-500 no-print">
                                    Billing details:
                                </dt>

                                <dd class="font-medium text-gray-800 dark:text-gray-200">
                                    <span class="block font-semibold">{{ $address->client_name }}</span>
                                    <address class="font-normal">
                                        {{ $address->c_email }}<br>
                                        {{ $address->c_mobile }}<br>
                                        {{ $address->c_address }}<br>
                                        {{ $address->c_upazila }},
                                        {{ $address->c_zila }}<br>
                                        {{ $address->notes }}
                                    </address>
                                </dd>
                            </dl>
                            <dl class="grid sm:flex gap-x-3 text-sm">
                                <dt class="min-w-[150px] max-w-[200px] text-gray-500 no-print">
                                    Date & Time:
                                </dt>
                                <dd class="font-medium text-gray-800 dark:text-gray-200">
                                    <span class="block font-semibold">{{ $address->created_at }}</span>
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

                    <div class="">
                        <img src="{{ asset($address->pro_cover) }}" alt="Product Image" class="object-cover h-48 w-96">
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
                    @foreach ($sells as $details)
                        <div class="hidden sm:block border-b border-gray-200 dark:border-gray-700"></div>

                        <div class="grid grid-cols-3 sm:grid-cols-6 gap-2">
                            <div class="col-span-full sm:col-span-2">
                                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                                <p class="font-medium text-gray-800 dark:text-gray-200">{{ $details['pro_name'] }}
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
                                <p class="text-gray-800 dark:text-gray-200">{{ $details['c_price'] }} TK</p>
                            </div>
                            <div>
                                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                                <p class="sm:text-right text-gray-800 dark:text-gray-200">
                                    {{ $details['total_price'] }} TK</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End Table -->
                @php
                    $total = $details->total_price;
                    if ($address->location == 1) {
                        $total = $total + 80;
                    } else {
                        $total = $total + 150;
                    }

                @endphp


                <!-- Flex -->
                <div class="mt-8 flex justify-end">
                    <div class="w-full max-w-2xl sm:text-right space-y-2">
                        <!-- Grid -->
                        <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                            <dl class="grid sm:grid-cols-5 gap-x-3 text-sm">
                                <dt class="col-span-3 text-gray-500">Subotal:</dt>
                                <dd class="col-span-2 font-medium text-gray-800 dark:text-gray-200">
                                    {{ $details['total_price'] }} TK</dd>
                            </dl>
                            <dl class="grid sm:grid-cols-5 gap-x-3 text-sm">
                                <dt class="col-span-3 text-gray-500">Dalivery charge:</dt>
                                <dd class="col-span-2 font-medium text-gray-800 dark:text-gray-200">
                                    @if ($address->location == 1)
                                        80
                                    @else
                                        150
                                    @endif
                                    TK
                                </dd>
                            </dl>

                            <dl class="grid sm:grid-cols-5 gap-x-3 text-sm">
                                <dt class="col-span-3 text-gray-500">Total:</dt>
                                <dd class="col-span-2 font-medium text-gray-800 dark:text-gray-200">
                                    {{ $total }} TK</dd>
                            </dl>

                            {{-- <dl class="grid sm:grid-cols-5 gap-x-3 text-sm">
                                <dt class="col-span-3 text-gray-500">Amount paid:</dt>
                                <dd class="col-span-2 font-medium text-gray-800 dark:text-gray-200">
                                    {{ $total }} TK</dd>
                            </dl>

                            <dl class="grid sm:grid-cols-5 gap-x-3 text-sm">
                                <dt class="col-span-3 text-gray-500">Due balance:</dt>
                                <dd class="col-span-2 font-medium text-gray-800 dark:text-gray-200">0.00 TK</dd>
                            </dl> --}}
                        </div>
                        <!-- End Grid -->
                    </div>
                </div>
                <!-- End Flex -->
            </div>
            <!-- End Invoice -->



        </div>

    </section>


</body>

</html>
