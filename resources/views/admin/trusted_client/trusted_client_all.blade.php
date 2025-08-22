<x-admin-layout>
    <x-slot name="main">

        @section('page-title')
            <title>Clients SS</title>
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
                                                Clients SS
                                            </h2>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Add Clients SS, edit and more.
                                            </p>
                                        </div>

                                        <div>
                                            <div class="inline-flex gap-x-2">
                                                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                                    href="#">
                                                    View all
                                                </a>
                                                @can('write')
                                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                                        href="{{ route('admin.trusted_client_addPage') }}">
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
                                                            Image
                                                        </span>
                                                    </div>
                                                </th>
                                                <th scope="col" class="pl-6 lg:pl-3 xl:pl-6 pr-6 py-3 text-left">
                                                    <div class="flex items-center gap-x-2 ">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Link
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

                                            @foreach ($clients as $client)
                                                <tr>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <img class="flex-shrink-0 h-[2.375rem] w-[3] rounded-md"
                                                                src="{{ asset($client->image_link )}}" alt="Image Description">
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $client->target_link }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        @can('edit')
                                                            <div class="px-6 py-1.5">
                                                                <a class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium"
                                                                    href="{{ route('admin.trusted_client_edit', ['id' => $client->id]) }}">
                                                                    Edit
                                                                </a>
                                                            </div>
                                                        @endcan
                                                        @can('delete')
                                                            <div class="px-6 py-1.5">
                                                                <form
                                                                    action="{{ route('admin.trusted_client_delete', ['id' => $client->id]) }}"
                                                                    method="POST"
                                                                    onsubmit="return confirm('Are you sure you want to delete this trusted client?');"
                                                                    style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE') <!-- Use DELETE method -->
                                                                    <button type="submit"
                                                                        class="inline-flex items-center gap-x-1.5 text-sm text-red-600 decoration-2 hover:underline font-medium">
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        @endcan
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
                                                    {{ $clients->links() }}
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
