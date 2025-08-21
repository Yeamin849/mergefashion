<x-admin-layout>
    <x-slot name="main">

        @section('page-title')
            <title>Products All</title>
        @endsection

        <div class="w-full pt-5 px-4 sm:px-6 md:px-8">

            <div class="bg-slate-300 rounded-xl shadow dark:bg-slate-800">

                <!-- Table Section -->
                <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">

                    <!-- Card -->
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div
                                    class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                                    <!-- Header -->
                                    <div
                                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                                        <div>
                                            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                                Products
                                            </h2>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Add Products, edit and more.
                                            </p>
                                        </div>

                                        <div>
                                            <div class="inline-flex gap-x-2">
                                                @can('read')
                                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                                        href="{{ route('admin.categories_allPage') }}">
                                                        View all categories
                                                    </a>
                                                @endcan
                                                @can('read')
                                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                                        href="{{ route('admin.images_all') }}">
                                                        View all images
                                                    </a>
                                                @endcan
                                                @can('write')
                                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                                        href="{{ route('admin.product_addPage') }}">
                                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none">
                                                            <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" />
                                                        </svg>
                                                        Create New
                                                    </a>
                                                @endcan
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Header -->

                                    <!-- Table -->
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-gray-50 dark:bg-slate-800">
                                            <tr>
                                                <th scope="col" class="pl-6 lg:pl-3 xl:pl-6 pr-6 py-3 text-left">
                                                    <div class="flex items-center gap-x-2 ">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            SL. No
                                                        </span>
                                                    </div>
                                                </th>
                                                <th scope="col" class="pl-6 lg:pl-3 xl:pl-6 pr-6 py-3 text-left">
                                                    <div class="flex items-center gap-x-2 ">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Cover
                                                        </span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="pl-6 lg:pl-3 xl:pl-6 pr-6 py-3 text-left">
                                                    <div class="flex items-center gap-x-2 ">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Pro. Info
                                                        </span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="pl-6 lg:pl-3 xl:pl-6 pr-6 py-3 text-left">
                                                    <div class="flex items-center gap-x-2 ">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Price
                                                        </span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="pl-6 lg:pl-3 xl:pl-6 pr-6 py-3 text-left">
                                                    <div class="flex items-center gap-x-2 ">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Stock
                                                        </span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="pl-6 lg:pl-3 xl:pl-6 pr-6 py-3 text-left">
                                                    <div class="flex items-center gap-x-2 ">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Featured
                                                        </span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="pl-6 lg:pl-3 xl:pl-6 pr-6 py-3 text-left">
                                                    <div class="flex items-center gap-x-2 ">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Status
                                                        </span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="pl-6 lg:pl-3 xl:pl-6 pr-6 py-3 text-left">
                                                    <div class="flex items-center gap-x-2 ">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Action
                                                        </span>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">

                                            @foreach ($products as $product)
                                                <tr>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $product->id }}</span>
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $product->pro_id }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <a class="block h-full p-6" href="#">
                                                            <div class="flex items-center gap-x-4">
                                                                <img class="flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-md"
                                                                    src="{{ asset(trim($product->pro_cover)) }}"
                                                                    alt="Image Description">
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $product->pro_cat }}</span>
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $product->pro_name }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $product->discount }}%</span>
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $product->r_price }} TK</span>
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $product->c_price }} TK</span>
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            @php
                                                                $quantity = \App\Models\Stock::where(
                                                                    'pro_id',
                                                                    $product->pro_id,
                                                                )->get();
                                                            @endphp
                                                            @foreach ($quantity as $item)
                                                                <span
                                                                    class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                                    {{ $item->size }} - {{ $item->quantity }}
                                                                </span>
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            @if ($product->feature == 1)
                                                                <div
                                                                    class="h-4 w-4 rounded-full inline-block mr-2 bg-green-400">
                                                                </div>
                                                            @else
                                                                <div
                                                                    class="h-4 w-4 rounded-full inline-block mr-2 bg-red-700">
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            @if ($product->status == 1)
                                                                <div
                                                                    class="h-4 w-4 rounded-full inline-block mr-2 bg-green-400">
                                                                </div>
                                                            @else
                                                                <div
                                                                    class="h-4 w-4 rounded-full inline-block mr-2 bg-red-700">
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        <div class="px-6 py-2">
                                                            <div
                                                                class="hs-dropdown relative inline-block [--placement:bottom-right]">
                                                                <button id="hs-table-dropdown-1" type="button"
                                                                    class="hs-dropdown-toggle py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-md text-gray-700 align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                                    <svg class="w-4 h-4"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" viewBox="0 0 16 16">
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
                                                                        @can('edit')
                                                                            <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                                href="{{ route('admin.product_edit', ['id' => $product->id]) }}">
                                                                                Edit
                                                                            </a>
                                                                            <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                                href="{{ route('admin.pro_stockPage', ['pro_id' => $product->pro_id]) }}">
                                                                                Stock
                                                                            </a>
                                                                            @if ($product->feature == 1)
                                                                                <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                                    href="{{ route('admin.product_feature', ['id' => $product->id, 'status' => 0]) }}">
                                                                                    Featured down
                                                                                </a>
                                                                            @else
                                                                                <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                                    href="{{ route('admin.product_feature', ['id' => $product->id, 'status' => 1]) }}">
                                                                                    Featured public
                                                                                </a>
                                                                            @endif
                                                                            @if ($product->status == 1)
                                                                                <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                                    href="{{ route('admin.product_status', ['id' => $product->id, 'status' => 0]) }}">
                                                                                    Status down
                                                                                </a>
                                                                            @else
                                                                                <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                                    href="{{ route('admin.product_status', ['id' => $product->id, 'status' => 1]) }}">
                                                                                    Status public
                                                                                </a>
                                                                            @endif
                                                                        @endcan

                                                                    </div>
                                                                    @can('delete')
                                                                        <div class="py-2 first:pt-0 last:pb-0">
                                                                            <form
                                                                                action="{{ route('admin.product_delete', ['id' => $product->id]) }}"
                                                                                method="POST"
                                                                                onsubmit="return confirm('Are you sure you want to delete this product?');"
                                                                                style="display:inline;">
                                                                                @csrf
                                                                                @method('DELETE') <!-- Use DELETE method -->
                                                                                <button type="submit"
                                                                                    class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-red-600 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-red-500 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                                                                    Delete
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    @endcan
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- End Table -->

                                    <!-- Footer -->
                                    <div
                                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                                        <div>
                                            {{-- <p class="text-sm text-gray-600 dark:text-gray-400">
                                        <span class="font-semibold text-gray-800 dark:text-gray-200">6</span> results
                                    </p> --}}
                                        </div>

                                        <div>
                                            <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0"
                                                aria-label="Table navigation">
                                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                </span>
                                                <ul class="inline-flex items-stretch -space-x-px">
                                                    {{ $products->links() }}
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <!-- End Footer -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Table Section -->
    </x-slot>
</x-admin-layout>
