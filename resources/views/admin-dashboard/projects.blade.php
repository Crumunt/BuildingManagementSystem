@extends('layouts.app-layout')

@push('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

@push('js')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>


@section('dashboard-content')
<!-- <h1 class="text-center text-3xl font-semibold">Project List</h1> -->
<div class="flex items-center justify-center p-4">
    <div class="flex flex-col gap-2 w-full">
        <div class="filter-wrapper w-full align-center">
            <form class="flex-1">
                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                        type="button">Filter <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>

                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="z-10 absolute mt-14 hidden w-56 p-3 bg-white rounded-lg shadow dark:bg-gray-700"
                        data-popper-placement="bottom">
                        <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                            Category
                        </h6>
                        <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                            <li class="flex items-center">
                                <input id="notStarted" type="checkbox" value=""
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                <label for="notStarted"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                    Not Started (56)
                                </label>
                            </li>

                            <li class="flex items-center">
                                <input id="inProgress" type="checkbox" value=""
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                <label for="inProgress"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                    In Progress (56)
                                </label>
                            </li>

                            <li class="flex items-center">
                                <input id="onHold" type="checkbox" value=""
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                <label for="onHold" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                    On Hold (56)
                                </label>
                            </li>

                            <li class="flex items-center">
                                <input id="completed" type="checkbox" value="" checked
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                <label for="completed"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                    Completed (97)
                                </label>
                            </li>

                            <li class="flex items-center">
                                <input id="cancelled" type="checkbox" value="" checked
                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                <label for="cancelled"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                    Cancelled (97)
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="relative w-full">
                        <input type="search" id="search-dropdown"
                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                            placeholder="Search Buildings, Contractors, Locations..." required />
                        <button type="submit"
                            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>


        </div>

    </div>
</div>
<div class="flex-1 px-4">
    <div class="rounded-lg bg-gray-200 h-full">
        <!-- Replace with your map implementation -->
        <div id="map" class="h-full w-full z-0">
            <!-- Interactive map will be rendered here -->
            <!-- <p>Map would be shown here</p> -->
        </div>
        <div id="drawer"
            class="fixed inset-y-0 right-0 bg-white shadow-lg translate-x-full transform transition-transform duration-300 ease-in-out">
            <div class="w-96 h-full p-4">
                <h2 class="text-2xl font-bold text-center mb-4 mt-14">Project Details</h2>
                <ul class="space-y-4">
                    <li class="flex justify-between items-center p-4 bg-gray-100 rounded-lg">
                        <span class="font-semibold text-gray-700">Project Name:</span>
                        <span class="text-gray-600">Adonis gay bar</span>
                    </li>
                    <li class="flex justify-between items-center p-4 bg-gray-100 rounded-lg">
                        <span class="font-semibold text-gray-700">Contractor Name:</span>
                        <span class="block text-gray-600">Totoy Biboy</span>
                    </li>
                    <li class="flex justify-between items-center p-4 bg-gray-100 rounded-lg">
                        <span class="font-semibold text-gray-700">Budget:</span>
                        <span class="text-gray-600">$100,000</span>
                    </li>
                    <li class="flex justify-between items-center p-4 bg-gray-100 rounded-lg">
                        <span class="font-semibold text-gray-700">Location:</span>
                        <span class="text-gray-600">Somewhere in Neverland</span>
                    </li>
                    <li class="flex justify-between items-center p-4 bg-gray-100 rounded-lg">
                        <span class="font-semibold text-gray-700">Completion Rate:</span>
                        <span class="text-gray-600">50%</span>
                    </li>
                </ul>

                <button id="closeDrawer" class="mt-4 w-full p-2 bg-red-500 text-white rounded-md">Close</button>
            </div>
        </div>
    </div>
</div>

<script>

    var map = L.map('map').setView([15.736340, -239.066648], 15);


    var mapTileLayer = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>'
    });

    mapTileLayer.addTo(map);

    const geojsonMarkerOptions = {
        radius: 11,
        fillColor: "#0000FF",
        color: "#0000",
        weight: 5,
        opacity: 1,
        fillOpacity: 0.8
    }

    var marker = L.circleMarker([15.737410, -239.068791]).addTo(map)

    marker.setStyle(geojsonMarkerOptions)

    marker.addEventListener('click', function () {
        console.log('this is happening')
        var drawer = document.getElementById('drawer');
        var closeDrawerButton = document.getElementById('closeDrawer');

        // Function to open the drawer
        drawer.classList.remove('translate-x-full');

        // Function to close the drawer
        closeDrawerButton.addEventListener('click', () => {
            drawer.classList.add('translate-x-full');
        });

        console.log('this is also happening')
    })


    window.addEventListener("load", function (event) {
        document.querySelector('[data-dropdown-toggle="dropdown"]').addEventListener('click', () => {
            var dropdown = document.querySelector('#dropdown')
            dropdown.classList.toggle('hidden')
            dropdown.classList.toggle('block')
        });
    });

</script>
@endsection