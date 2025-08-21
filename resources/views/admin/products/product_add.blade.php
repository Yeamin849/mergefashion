<x-admin-layout>
    <x-slot name="main">

        @section('page-title')
            <title>Product Create</title>
        @endsection

        <!-- Card Section -->
        <div class="w-full pt-5 px-4 sm:px-6 md:px-8">

            <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                        {{ $title }}
                    </h2>
                    <label class="inline-block text-sm font-medium dark:text-gray-400">
                        Products info
                    </label>

                </div>

                <form id="data-form" action="{{ $url }}" method="POST">
                    @csrf
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                        <div class="sm:col-span-3">
                            <label for="pro_id" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Product ID
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <input id="pro_id" type="number" name="pro_id"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="1050" value="{{ $product_data->pro_id }}" required>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label for="pro_cat" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Category Name
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <select id="pro_cat" name="pro_cat" autocomplete="pro_cat" required
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>Select a category</option>

                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->catName }}"
                                        {{ $product_data->pro_cat == $categorie->catName ? 'selected' : '' }}>
                                        {{ $categorie->catName }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label for="pro_cover" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Product Cover url
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <input id="pro_cover" type="url" name="pro_cover"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="url" value="{{ $product_data->pro_cover }}" required>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label for="pro_name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Product Name
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <input id="pro_name" type="text" name="pro_name"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Product name" value="{{ $product_data->pro_name }}" required>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label for="discount" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Discount
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <input id="discount" type="number" name="discount"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="10" value="{{ $product_data->discount }}" required>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label for="r_price" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Regular Price
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <input id="r_price" type="number" name="r_price"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="1000" value="{{ $product_data->r_price }}" required>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label for="c_price" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Current Price
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <input id="c_price" type="number" name="c_price"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="900" value="{{ $product_data->c_price }}" required>
                        </div>
                        <!-- End Col -->

                        <div class="col-span-3">
                            <label for="keyword" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Images Link
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="col-span-9">

                            <textarea name="pro_images" required
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                rows="3" id="keywordInput" onkeydown="handleKeywordInput(event)" placeholder="product images link,">{{ $product_data->pro_images }}</textarea>

                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label for="content" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Product Description
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <textarea name="content" id="contant" required
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                rows="3">{{ $product_data->content }}</textarea>
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
                    @can('read')
                        <div class="mt-5 flex justify-start gap-x-2">
                            <a type="button" href="{{ route('admin.product_allPage') }}"
                                class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-left-circle-fill mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                                All products
                            </a>
                            <a type="button" href="{{ route('admin.images_all') }}"
                                class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-left-circle-fill mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                                All cover images
                            </a>
                            <a type="button" href="{{ route('admin.server_img.images_all') }}"
                                class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-left-circle-fill mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                                All slider images
                            </a>
                        </div>
                    @endcan
                </form>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Card Section -->


        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

        <script>
            CKEDITOR.replace('content');
        </script>

        <script>
            // Get references to the input fields
            const rPriceInput = document.getElementById('r_price');
            const discountInput = document.getElementById('discount');
            const cPriceInput = document.getElementById('c_price');

            // Add an event listener to the "Regular Price" input
            rPriceInput.addEventListener('input', () => {
                // Parse the values from the input fields as numbers
                const regularPrice = parseFloat(rPriceInput.value) || 0;
                const discount = parseFloat(discountInput.value) || 0;

                // Calculate the discount amount and update the "Current Price" input
                const discountAmount = (regularPrice * discount) / 100;
                const currentPrice = regularPrice - discountAmount;
                cPriceInput.value = currentPrice.toFixed(2); // Display current price with 2 decimal places
            });

            // Add an event listener to the "Discount" input
            discountInput.addEventListener('input', () => {
                // Parse the values from the input fields as numbers
                const regularPrice = parseFloat(rPriceInput.value) || 0;
                const discount = parseFloat(discountInput.value) || 0;

                // Calculate the discount amount and update the "Current Price" input
                const discountAmount = (regularPrice * discount) / 100;
                const currentPrice = regularPrice - discountAmount;
                cPriceInput.value = currentPrice.toFixed(2); // Display current price with 2 decimal places
            });

            function handleKeywordInput(event) {
                if (event.key === "Enter") {
                    event.preventDefault(); // Prevent the newline from being added
                    var keywordInput = document.getElementById("keywordInput");
                    var inputValue = keywordInput.value.trim(); // Trim leading and trailing spaces
                    if (inputValue) {
                        if (keywordInput.value.slice(-1) === ',') {
                            keywordInput.value += ' '; // Add a space after the comma if needed
                        } else {
                            keywordInput.value += ', '; // Add a comma and a space
                        }
                    }
                }
            }
        </script>

        <script>
            let formChanged = false;

            // Track changes in form inputs
            document.querySelectorAll('#data-form input').forEach(function(input) {
                input.addEventListener('change', function() {
                    formChanged = true;
                });
            });

            // Confirm when user tries to leave the page
            window.addEventListener('beforeunload', function(e) {
                if (formChanged) {
                    // Cancel the event and show a confirmation dialog
                    e.preventDefault();
                    e.returnValue = ''; // This is required for most browsers
                }
            });

            // Reset formChanged if the form is successfully submitted
            document.getElementById('data-form').addEventListener('submit', function() {
                formChanged = false;
            });
        </script>


    </x-slot>
</x-admin-layout>
