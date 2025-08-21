<x-admin-layout>
    <x-slot name="main">

        @section('page-title')
            <title>Sells History</title>
        @endsection

        <!-- Card Section -->
        <div class="w-full pt-5 px-4 sm:px-6 md:px-8">

            <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">


                <section class="bg-gray-50 dark:bg-gray-900">
                    <div class="mx-auto max-w-screen-2xl">
                        <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 rounded-lg">
                            <div
                                class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                                <div class="flex items-center flex-1 space-x-4">
                                    {{-- <h5>
                                        <span class="text-gray-500">All Products:</span>
                                        <span class="dark:text-white">123456</span>
                                    </h5>
                                    <h5>
                                        <span class="text-gray-500">Total sales:</span>
                                        <span class="dark:text-white">{{$total_sells}} TK</span>
                                    </h5> --}}
                                </div>
                                <div
                                    class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                                    {{-- <button type="button"
                                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                        </svg>
                                        Add new product
                                    </button>
                                    <button type="button"
                                        class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                            fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                        </svg>
                                        Update stocks 1/250
                                    </button>
                                    <button type="button"
                                        class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewbox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                        </svg>
                                        Export
                                    </button> --}}
                                </div>
                            </div>
                            <div class="overflow-x-auto">

                                <form action="" method="get">
                                    <div class="inline-flex gap-x-2 p-2 md:flex md:justify-between md:items-center">

                                        <input type="tel" name="mobile"
                                            class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                            placeholder="017xxxxxxxx">

                                        <input type="date" name="date_from"
                                            class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                            placeholder="mm/dd/yyyy" value="<?php echo date('Y-m-d'); ?>">

                                        <input type="date" name="date_to"
                                            class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                            placeholder="mm/dd/yyyy" value="<?php echo date('Y-m-d'); ?>">

                                        <button type="submit"
                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                            Search
                                        </button>
                                    </div>
                                </form>

                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-4 py-3">Product</th>
                                            <th scope="col" class="px-4 py-3">Mobile</th>
                                            <th scope="col" class="px-4 py-3">Tran. No</th>
                                            <th scope="col" class="px-4 py-3">Size</th>
                                            <th scope="col" class="px-4 py-3">Quantity</th>
                                            <th scope="col" class="px-4 py-3">Rate</th>
                                            <th scope="col" class="px-4 py-3">Total</th>
                                            <th scope="col" class="px-4 py-3">Status</th>
                                            <th scope="col" class="px-4 py-3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total_pro_sell = 0;
                                            $total_sells = 0;
                                        @endphp
                                        @foreach ($sells as $item)
                                            @php
                                                $total_pro_sell = $total_pro_sell + $item->quantity;
                                                $total_sells = $total_sells + $item->total_price;
                                            @endphp
                                            <tr
                                                class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <th scope="row"
                                                    class="flex items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    <img src="{{ $item->pro_cover }}" alt="Product Image"
                                                        class="w-auto h-8 mr-3">
                                                    {{ $item->pro_name }}
                                                </th>
                                                <td class="px-4 py-2">
                                                    {{ $item->c_mobile }}
                                                    <span
                                                        class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">
                                                        @if ($item->location == 1)
                                                            Dhaka
                                                        @else
                                                            Out Dhaka
                                                        @endif
                                                    </span>
                                                </td>
                                                <td
                                                    class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    <div class="flex items-center">
                                                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                                            href="{{ route('admin.invoice', ['id' => $item->tran_id]) }}">
                                                            {{ $item->tran_id }}
                                                        </a>
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $item->size }}
                                                </td>
                                                <td
                                                    class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $item->quantity }}
                                                </td>
                                                <td
                                                    class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $item->c_price }}
                                                </td>
                                                <td
                                                    class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $item->total_price }}
                                                </td>
                                                <td
                                                    class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    @if ($item->delivery_status == 1)
                                                        <div title="Deliveried"
                                                            class="h-4 w-4 rounded-full inline-block mr-2 bg-green-400">
                                                        </div>
                                                    @elseif ($item->delivery_status == 2)
                                                        <div title="Shiping"
                                                            class="h-4 w-4 rounded-full inline-block mr-2 bg-yellow-300">
                                                        </div>
                                                    @elseif ($item->delivery_status == 3)
                                                        <div title="Confirmed"
                                                            class="h-4 w-4 rounded-full inline-block mr-2 bg-slate-900">
                                                        </div>
                                                    @elseif ($item->delivery_status == 4)
                                                        <div title="Canceled"
                                                            class="h-4 w-4 rounded-full inline-block mr-2 bg-red-800">
                                                        </div>
                                                    @else
                                                        <div title="Processing"
                                                            class="h-4 w-4 rounded-full inline-block mr-2 bg-primary-600">
                                                        </div>
                                                    @endif
                                                </td>
                                                <td class="px-4 py-2">
                                                    <div
                                                        class="hs-dropdown relative inline-block [--placement:bottom-right]">
                                                        <button id="hs-table-dropdown-1" type="button"
                                                            class="hs-dropdown-toggle py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-md text-gray-700 align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                                            </svg>
                                                        </button>
                                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-[10rem] z-20 bg-white shadow-2xl rounded-lg p-2 mt-2 dark:divide-gray-700 dark:bg-gray-800 dark:border dark:border-gray-700"
                                                            aria-labelledby="hs-table-dropdown-1">
                                                            <div class="py-2 first:pt-0 last:pb-0">
                                                                <span
                                                                    class="block py-2 px-3 text-xs font-medium uppercase text-gray-400 dark:text-gray-600">
                                                                    Action
                                                                </span>
                                                                @can('write')
                                                                    <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                        href="{{ route('admin.delivery_status', ['id' => $item->id, 'delivery_status' => 3]) }}">
                                                                        Statud Confirm
                                                                    </a>
                                                                    <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                        href="{{ route('admin.delivery_status', ['id' => $item->id, 'delivery_status' => 4]) }}">
                                                                        Statud Cancel
                                                                    </a>
                                                                    <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                        href="{{ route('admin.delivery_status', ['id' => $item->id, 'delivery_status' => 2]) }}">
                                                                        Statud Shipping
                                                                    </a>
                                                                    <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                        href="{{ route('admin.delivery_status', ['id' => $item->id, 'delivery_status' => 1]) }}">
                                                                        Status Deliveried
                                                                    </a>
                                                                @endcan
                                                                {{-- @can('write')
                                                                    <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                        href="#">
                                                                        Featured down
                                                                    </a>
                                                                    <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                        href="#">
                                                                        Featured public
                                                                    </a>
                                                                @endcan
                                                                @can('write')
                                                                    <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                        href="#">
                                                                        Status down
                                                                    </a>
                                                                    <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                        href="#">
                                                                        Status public
                                                                    </a>
                                                                @endcan --}}

                                                            </div>
                                                            @can('delete')
                                                                <div class="py-2 first:pt-0 last:pb-0">
                                                                    <form
                                                                        action="{{ route('admin.delete_order', ['id' => $item->id]) }}"
                                                                        method="POST" style="display: inline;"
                                                                        onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-red-600 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-red-500 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                                                            Delete
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            @endcan
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="font-semibold text-gray-900 dark:text-white">
                                            <th scope="row" class="px-6 py-4 text-base">Total</th>
                                            <td class="px-6 py-4"></td>
                                            <td class="px-6 py-4"></td>
                                            <td class="px-6 py-4"></td>
                                            <td class="px-6 py-4">{{ $total_pro_sell }}</td>
                                            <td class="px-6 py-4"></td>
                                            <td class="px-6 py-4">{{ $total_sells }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0"
                                aria-label="Table navigation">
                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                </span>
                                <ul class="inline-flex items-stretch -space-x-px">
                                    {{ $sells->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </section>

            </div>

        </div>
        <!-- End Card Section -->

    </x-slot>
</x-admin-layout>
