<x-admin-layout>
    <x-slot name="main">

        @section('page-title')
            <title>Slider Create</title>
        @endsection

        <!-- Card Section -->
        <div class="w-full pt-5 px-4 sm:px-6 md:px-8">

            <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                        {{ $title }}
                    </h2>
                    <label class="inline-block text-sm font-medium dark:text-gray-400">
                        Slider info
                    </label>

                </div>

                <form action="{{ $url }}" method="POST">
                    @csrf
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                        <div class="sm:col-span-3">
                            <label for="image_link"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Slider Img url
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <input id="image_link" type="url" name="image_link"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="url" value="{{ $client_data->image_link }}" required>
                        </div>

                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label for="target_link"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Terget url
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <input id="target_link" type="url" name="target_link"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="url" value="{{ $client_data->target_link }}" required>
                        </div>

                        <!-- End Col -->

                    </div>
                    <!-- End Grid -->
                    @can('write')
                        <div class="mt-5 flex justify-end gap-x-2">
                            <input type="submit" value="Save"
                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">

                        </div>
                    @endcan
                </form>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Card Section -->

    </x-slot>
</x-admin-layout>
