@extends('layouts.app-layout')

@push('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

@push('js')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>


@section('dashboard-content')
<h1 class="text-center text-3xl font-semibold">Project List</h1>
<div class="flex-1">
    <div class="rounded-lg mt-5 bg-gray-200 h-full">
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

    // L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    // }).addTo(map);

    var mapTileLayer = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_satellite/{z}/{x}/{y}{r}.{ext}', {
        minZoom: 0,
        maxZoom: 20,
        attribution: '&copy; CNES, Distribution Airbus DS, © Airbus DS, © PlanetObserver (Contains Copernicus Data) | &copy; <a href="https://www.stadiamaps.com/" target="_blank">Stadia Maps</a> &copy; <a href="https://openmaptiles.org/" target="_blank">OpenMapTiles</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        ext: 'jpg'
    });

    mapTileLayer.addTo(map);

    const geojsonMarkerOptions = {
        radius: 10,
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

</script>
@endsection