<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <main>
                        <div class="contener">
                            <div class="main-content">
                                <div class="main-content-abaut">Restauran
                                </div>
                                <h1>Italian<br>Cuisine</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sodales senectus dictum arcu sit tristique donec eget.</p>
                                <div class="main-content-button">
                                    <a href="#">Order now</a>
                                    <a href="#">Reservation</a>
                                </div>
                            </div>
                            <div>
                                <img src="./assets/images/main_bg.png" alt="">
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
