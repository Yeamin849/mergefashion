<x-public-layout>

    @section('page-title')
        <title>Address Edit</title>

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

            <form action="{{ route('client.address_update') }}">
                <div class="grid gap-4 mb-4 p-4 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name
                            (Not
                            changeable)</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="User name" value=" {{ $user->name }}" readonly>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            (Not
                            changeable)</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="User email" value=" {{ $user->email }}" readonly>
                    </div>
                    <div>
                        <label for="mobile"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile</label>
                        <input type="text" name="mobile" id="mobile"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="+880xxx" value="{{ $address->mobile }}">
                    </div>
                    <div>
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Division</label>
                        <select id="category" name="division"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select your division</option>
                            <option value="Dhaka" {{ $address->division == 'Dhaka' ? 'selected' : '' }}>Dhaka</option>
                            <option value="Khulna" {{ $address->division == 'Khulna' ? 'selected' : '' }}>Khulna
                            </option>
                            <option value="Barishal" {{ $address->division == 'Barishal' ? 'selected' : '' }}>Barishal
                            </option>
                            <option value="Chattogram" {{ $address->division == 'Chattogram' ? 'selected' : '' }}>
                                Chattogram</option>
                            <option value="Sylhet" {{ $address->division == 'Sylhet' ? 'selected' : '' }}>Sylhet
                            </option>
                            <option value="Rajshahi" {{ $address->division == 'Rajshahi' ? 'selected' : '' }}>Rajshahi
                            </option>
                            <option value="Mymensingh" {{ $address->division == 'Mymensingh' ? 'selected' : '' }}>
                                Mymensingh</option>
                            <option value="Rangpur" {{ $address->division == 'Rangpur' ? 'selected' : '' }}>Rangpur
                            </option>
                        </select>
                    </div>
                    <div>
                        <label for="zila"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Zila</label>
                        <input type="text" name="zila" id="zila"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Dhaka" value="{{ $address->zila }}">
                    </div>
                    <div>
                        <label for="upazila"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upazila</label>
                        <input type="text" name="upazila" id="upazila"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Savar" value="{{ $address->upazila }}">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="address"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="text" name="address" id="address"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Home, Road, Area" value="{{ $address->address }}">
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    <x-danger-button x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Cancel') }}</x-danger-button>

                    <button type="submit"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        Save
                    </button>
                </div>
            </form>



            <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>

                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 p-4">
                    {{ __('Are you sure you want to cancel without saving?') }}
                </h2>

                <div class="mt-6 flex justify-end p-4">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-secondary-button>

                    <a class="ml-3 py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="{{ route('client.account') }}">
                        {{ __('Confirm') }}
                    </a>
                </div>

            </x-modal>

        </section>


    </x-slot>
</x-public-layout>
