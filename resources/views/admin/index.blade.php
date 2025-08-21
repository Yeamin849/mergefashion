<x-admin-layout>
    <x-slot name="main">

        @section('page-title')
            <title>Dashboard</title>
        @endsection

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <main class="p-4 h-auto pt-4">
                        {{-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                            <div
                                class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64">
                                6
                            </div>
                            <div
                                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64">
                                6</div>
                            <div
                                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64">
                                6</div>
                            <div
                                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64">
                                6</div>
                        </div> --}}
                        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 mb-4">
                            {!! $sellsAmount->container() !!}

                            <script src="{{ $sellsAmount->cdn() }}"></script>

                            {{ $sellsAmount->script() }}
                        </div>
                        {{-- <div class="grid grid-cols-2 gap-4 mb-4">
                            <div
                                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72">
                                7</div>
                            <div
                                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72">
                                7</div>
                            <div
                                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72">
                                7</div>
                            <div
                                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72">
                                7</div>
                        </div> --}}
                        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 mb-4">
                            {!! $yearlySells->container() !!}

                                <script src="{{ $yearlySells->cdn() }}"></script>

                                {{ $yearlySells->script() }}
                        </div>
                        {{-- <div class="grid grid-cols-2 gap-4">
                            <div
                                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72">
                                8</div>
                            <div
                                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72">
                                8</div>
                            <div
                                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72">
                                8</div>
                            <div
                                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72">
                                8</div>
                        </div> --}}
                    </main>
                </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>
