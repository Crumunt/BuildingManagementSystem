@extends('layouts.app-layout')

@section('dashboard-content')
<div class="grid grid-cols-3 gap-4 mb-4">
   <div class="flex items-center justify-center h-24 rounded">
      <div class="p-6 rounded-lg shadow-lg card border-2 border-dashed border-slate-500 w-full">
         <h2 class="text-xl font-semibold">Total Projects/Buildings</h2>
         <p class="text-3xl">150</p>
      </div>
   </div>
   <div class="flex items-center justify-center h-24 rounded">
      <div class="p-6 rounded-lg shadow-lg card border-2 border-dashed border-slate-500 w-full">
         <h2 class="text-xl font-semibold">Ongoing Projects/Buildings</h2>
         <p class="text-3xl">100</p>
      </div>
   </div>
   <div class="flex items-center justify-center h-24 rounded">
      <div class="p-6 rounded-lg shadow-lg card border-2 border-dashed border-slate-500 w-full">
         <h2 class="text-xl font-semibold">Completed Projects/Buildings</h2>
         <p class="text-3xl">50</p>
      </div>
   </div>
</div>
<div class="grid grid-cols-3 gap-4 mb-4">
   <div class="flex items-center justify-center rounded h-28">
      <div class="border-2 border-dashed border-slate-500 p-4 rounded-lg shadow-md w-full">
         <h3 class="font-semibold text-gray-800">In Progress</h3>
         <p class="text-2xl text-gray-800">60</p>
      </div>
   </div>
   <div class="flex items-center justify-center rounded h-28">
      <div class="border-2 border-dashed border-slate-500 p-4 rounded-lg shadow-md w-full">
         <h3 class="font-semibold text-gray-800">Delayed</h3>
         <p class="text-2xl text-gray-800">20</p>
      </div>
   </div>
   <div class="flex items-center justify-center rounded h-28">
      <div class="border-2 border-dashed border-slate-500 p-4 rounded-lg shadow-md w-full">
         <h3 class="font-semibold text-gray-800">Completed</h3>
         <p class="text-2xl text-gray-800">70</p>
      </div>
   </div>


</div>
<div class="grid mb-4">
   <div class="border-2 border-dashed border-slate-500 p-2">
      <p class="text-4xl text-center font-semibold mb-4">Projects Location</p>
      <div
         class="h-96 border-2 border-dashed border-slate-500 mt-5 bg-gray-300 rounded-lg flex items-center justify-center">
         <p class="text-center text-gray-600">Interactive Map Placeholder</p>
      </div>
   </div>
</div>

@endsection