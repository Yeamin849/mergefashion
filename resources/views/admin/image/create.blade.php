<x-admin-layout>
    <x-slot name="main">

        @section('page-title')
            <title>Upload Image</title>
        @endsection

        <div class="w-full pt-5 px-4 sm:px-6 md:px-8">

            <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                        Upload New Image
                    </h2>
                    <label class="inline-block text-sm font-medium dark:text-gray-400">
                        Image info
                    </label>

                </div>

                <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Grid -->
                    <div class="grid grid-cols-12 gap-4 sm:gap-6">

                        {{-- <div class="sm:col-span-3">
                            <label for="width" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Image Size (Width)
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <input id="width" type="number" name="width" required
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="1080">
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label for="hight" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Image Size (Hight)
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <input id="hight" type="number" name="hight" required
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="720">
                        </div>
                        <!-- End Col --> --}}

                        <div class="col-span-3">
                            <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Image choose
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="col-span-9">
                            <label for="small-file-input" class="sr-only">Choose file</label>
                            <input type="file" name="image" id="small-file-input"
                                class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
                                file:bg-transparent file:border-0
                                file:bg-gray-100 file:mr-4
                                file:py-2 file:px-4
                                dark:file:bg-gray-700 dark:file:text-gray-400"
                                accept="image/jpeg, image/png, image/jpg, image/gif, image/svg+xml" required>

                        </div>
                        <!-- End Col -->
                    </div>

                    @can('write')
                        <div class="mt-5 flex justify-center gap-x-2">
                            <input name="" type="submit" value="Save"
                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        </div>
                    @endcan
                    @can('read')
                        <div class="mt-5 flex justify-start gap-x-2">
                            <a type="button" href="{{ route('admin.categories_allPage') }}"
                                class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                                All categories
                            </a>
                            <a type="button" href="{{ route('admin.product_allPage') }}"
                                class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                                All products
                            </a>
                            <a type="button" href="{{ route('admin.images_all') }}"
                                class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                                All Images
                            </a>
                        </div>
                    @endcan
                </form>
            </div>
            <!-- End Card -->
        </div>

    </x-slot>
</x-admin-layout>
