<script setup>

import HomePageSide from '@/Pages/HomePageSide.vue'
</script>
<template>
  
  <div class="relative flex gap-[34%] bg-[url('images/banner.png')] h-screen bg-no-repeat bg-center bg-top">
    <div>
    <div class="absolute bg-white h-56 w-96 rounded-[30px] top-28 left-60">
      <div class="text-center p-5 pt-10">
        <h1 class="font-bold text-3xl">Holy Land Experience</h1>
        <p class="text-gray-600 text-xl">November 18 - November 27, 2024</p>
        <button type="button"
          class="rounded-full bg-[#379BD6] w-80 mt-4 p-4 text-xs font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          <h1 class="font-bold text-xl">$4,500</h1>
          <p>Price per person</p>
        </button>
      </div>
    </div>
    <div class="absolute top-[36%] left-40 ">
      <div>
        <img src="images/card.png" class="relative space-y-20" />


        <div class="absolute top-20 left-20 flex justify-between gap-20 border-b-2 pb-10 border-[#014F99]">
          <div>
            <img src="images/Mask.png" />
          </div>
          <div>
            <img src="images/logo.png" />
          </div>
        </div>
      </div>
      <div class="absolute top-80 left-20 mt-0 border-b-2 pb-10 border-[#014F99]">

        <h1 class="text-2xl font-bold">Pastor Mo Huggins</h1>
        <h2 class="mt-8">Price includes:</h2>

        <p class="max-w-xs text-left text-slate-500 text-bold">Round Trip flight from Atlanta airport to Tel Aviv with 1
          stop in EU.Meet & assist upon arrival and Transfer to/from Airport.6 Days S/Seeing as per Itinerary.All
          entrance fees to the sites during the S/Seeing7 NTs at the above-mentioned hotels.7 full Israeli breakfasts
          and dinners at hotels.1 farewell dinner in a local restaurantDesignated Website for registration and
          payment.Porterage at hotels & at APT.English-speaking licensed tour guide.All transfers & S/Seeing in an A/C
          tourist vehicle.Tips</p>
        <h1 class="mt-8">Above rates exclude:</h1>
        <p class="max-w-xs text-slate-500 ">Personal items such as drinks with meals and telephone calls.InsuranceCovid
          tests if neededLunches en-routeAny other service not mentioned above.</p>
        <button type="button"
          class="rounded-full bg-[#379BD6] w-80 mt-10 p-4 text-xs font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          <h1 class="font-bold text-xl">$4,500</h1>
          <p>Price per person</p>
        </button>
        <div class="absolute inset-x-0 bottom-0 h-0">
          <h1 class="mt-5 text-gray-600">Single Room Supplement- $940</h1>
          <p class="text-xs text-gray-400">Single supplement - If You want to take a room alone.</p>
          <h2 class="mt-5 text-gray-600">Land Only - $2492</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-[36%] mx-10 ">
        <HomePageSide/>
      </div>
  
  </div>
</template>
