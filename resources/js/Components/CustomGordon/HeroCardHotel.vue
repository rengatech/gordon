<script setup>
import { Link } from '@inertiajs/vue3';
</script>
<template>
    <div class="absolute bg-white h-50 w-60 md:h-56 md:w-96 rounded-[30px] top-64 left-20 md:top-44 md:left-60">
      <div class="text-center p-5 pt-10">
        <h1 class="font-bold text-base md:text-3xl">Holy Land Experience</h1>
        <p class="text-gray-600 text-xs mt-4 md:text-xl">November 18 - November 27, 2024</p>
        <div class="flex gap-3">  
         <Link href="/custom-register" class="rounded-full bg-[#379BD6] w-32 h-10 md:w-80 mt-6 md:p-3 text-xs font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</Link>
         <Link href="/hotel" class="rounded-full bg-[#014F99] w-32 h-10 md:w-80 mt-6 md:p-3 text-xs font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Booking Hotel</Link> 
        
        </div>
      </div>
    </div>
</template>
