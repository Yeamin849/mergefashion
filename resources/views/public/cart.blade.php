<x-public-layout>

    @section('page-title')
        <title>Cart -{{ config('app.name', 'Octosync Software Ltd') }}</title>

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


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Image</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Product
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Size
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Quantity
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Price
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                            $price = $product->c_price;
                            $quantity = $request->quantity;
                            $total = $price * $quantity;
                        @endphp
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                            data-id="">
                            <td class="w-32 p-4">
                                <img src="{{ $product->pro_cover }}" alt="{{ $product->pro_name }}">
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $product->pro_name }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $request->size }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $product->c_price }} TK
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $request->quantity }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $total }} TK
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>


            <form action="{{ route('public.buyNowConfirm') }}" method="POST">
                @csrf
                <input type="number" hidden name="quantity" value="{{ $request->quantity }}">
                <input type="number" hidden name="size" value="{{ $request->size }}">
                <input type="number" hidden name="pro_id" value="{{ $product->pro_id }}">
                <input type="number" hidden name="total_price" value="{{ $total }}">

                @php
                    $product_images = explode(', ', $product->pro_images);
                @endphp
                <p class="p-4 font-bold text-red-500 dark:text-white  mt-8">আপনার পছন্দের রঙটি সিলেক্ট করুন:</p>

                <div class="p-4 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-6 gap-4">
                    @foreach ($product_images as $key => $product_image)
                        <label class="relative cursor-pointer">
                            <input type="radio" name="selected_image" value="{{ $product_image }}" required class="absolute opacity-0 peer">
                            <img class="rounded-lg border-2 border-transparent peer-checked:border-blue-500 peer-checked:shadow-lg peer-checked:shadow-blue-500/50 transform peer-checked:scale-105 transition-transform duration-300"
                                src="{{ $product_image }}" alt="product image" />
                            <span
                                class="absolute top-2 left-2 bg-white text-blue-500 p-1 rounded-full shadow-lg opacity-0 peer-checked:opacity-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 10.03a.75.75 0 0 0 1.08 0l3.992-4.01a.75.75 0 1 0-1.08-1.04l-3.42 3.433L6.324 7.384a.75.75 0 1 0-1.08 1.04l1.726 1.707z" />
                                </svg>
                            </span>
                        </label>
                    @endforeach
                </div>

                <div class="flex items-center mt-6 p-2">
                    <p class="font-bold text-red-500 dark:text-white">ডেলিভারি লোকেশন সিলেক্ট করুন:</p>
                    <div class="flex items-center mr-4">
                        <div class="flex items-center mr-4">
                            <input id="in-dhaka" type="radio" value="1" name="location" required
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="in-dhaka" class="ml-2 text-sm font-bold text-red-500 dark:text-gray-300">
                                ঢাকার ভিতরে (৮০৳)
                            </label>
                        </div>
                    </div>
                    <div class="flex items-center mr-4">
                        <div class="flex items-center mr-4">
                            <input id="out-dhaka" type="radio" value="0" name="location"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="out-dhaka" class="ml-2 text-sm font-bold text-red-500 dark:text-gray-300">
                                ঢাকার বাহিরে (১৫০৳)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="grid gap-4 mb-4 p-4 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">আপনার
                            নাম</label>
                        <input type="text" name="name" id="name" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="User name">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">আপনার
                            ইমেইল (যদি থাকে)</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="User email">
                    </div>
                    <div>
                        <label for="mobile"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">আপনার
                            সচল মোবাইল নাম্বার</label>
                        <input type="tel" name="mobile" id="mobile" required maxlength="11"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter 11-digit mobile number">

                    </div>
                    <div>
                        <label for="zila"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">আপনার জেলা</label>
                        <input type="text" name="zila" id="zila" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Dhaka">
                    </div>
                    <div>
                        <label for="upazila"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">আপনার উপজেলা / থানা</label>
                        <input type="text" name="upazila" id="upazila" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Savar">
                    </div>
                    <div>
                        <label for="address"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">আপনার সম্পূর্ন
                            ঠিকানা</label>
                        <input type="text" name="address" id="address" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Home, Road, Area">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="note"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> নোট 
                        </label>
                        <input type="text" name="note" id="note"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="আপনার প্রয়োজনীয় নোট এখানে লিখুন">
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <span
                        class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-2xl font-medium bg-blue-100 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500">
                        ❌ডেলিভারি লোকেশন সিলেক্ট করুন
                    </span>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 21">
                            <path
                                d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                        </svg>
                        Buy now
                    </button>
                </div>
            </form>
        </section>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const inDhakaRadio = document.getElementById('in-dhaka');
                const outDhakaRadio = document.getElementById('out-dhaka');
                const totalSpan = document.querySelector(
                    'span.inline-flex.items-center'); // Update this selector to match your specific span if needed

                const baseTotal = {{ $total }}; // Assuming $total is passed as a JavaScript variable

                function updateTotal() {
                    if (inDhakaRadio.checked) {
                        totalSpan.textContent = 'Total: ' + (baseTotal + 80) + ' TK';
                    } else if (outDhakaRadio.checked) {
                        totalSpan.textContent = 'Total: ' + (baseTotal + 150) + ' TK';
                    }
                }

                inDhakaRadio.addEventListener('change', updateTotal);
                outDhakaRadio.addEventListener('change', updateTotal);

                // Initialize the total on page load
                updateTotal();
            });
            
            // Select all image labels
            const imageLabels = document.querySelectorAll('label.relative');
        
            // Add event listener to each label
            imageLabels.forEach(label => {
                label.addEventListener('click', function () {
                    // Find the input element inside the label and set it to checked
                    const radioInput = label.querySelector('input[type="radio"]');
                    if (radioInput) {
                        radioInput.checked = true;
                    }
        
                    // Remove checked styling from other images
                    imageLabels.forEach(otherLabel => {
                        const otherRadioInput = otherLabel.querySelector('input[type="radio"]');
                        const otherImage = otherLabel.querySelector('img');
                        const otherIcon = otherLabel.querySelector('span');
        
                        if (otherRadioInput && otherRadioInput !== radioInput) {
                            otherRadioInput.checked = false;
                            otherImage.classList.remove('border-blue-500', 'shadow-lg', 'scale-105');
                            otherIcon.classList.add('opacity-0');
                        }
                    });
        
                    // Add checked styling to the selected image
                    const image = label.querySelector('img');
                    const icon = label.querySelector('span');
                    if (image && icon) {
                        image.classList.add('border-green-500', 'shadow-2xl', 'scale-105');
                        icon.classList.remove('opacity-0');
                    }
                });
            });
        </script>


    </x-slot>
</x-public-layout>
