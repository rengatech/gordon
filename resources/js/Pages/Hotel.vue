<template>
  <CustomLayout>
    <HomePage />
    <HeroCardHotel />
    
      <div class="mt-[55rem] md:mt-0">
      <div class="md:ml-[35%] font-bold text-4xl space-y-5">
        <h1 class="text-center ml-50">Hotels Details</h1>
        <div class="space-y-1">
        <div class="flex flex-col md:flex-row gap-2 items-center mt-12">
          <div class="mt-5 md:mt-2">
            <img src="images/GrandBeach.png" class="rounded-[70px] ">
          </div>
          <div class="border-2 border-[#014F99] h-56 w-[380px] md:w-[680px] p-6 rounded-[70px] mt-4">
            <div class="mt-5  md:ml-7 flex justify-between">
              <div>
                <h3 class="text-md">Grand Beach</h3>
                <p class="text-lg text-[#797984] font-semibold">Hayarkon 250, Tel Aviv-Jaffa, 63113</p>
                <p class="text-lg text-[#797984] font-normal">Check-In: 2024-11-19</p>
                <p class="text-lg text-[#797984] font-normal">Check-Out: 2024-11-20</p>
              </div>
              <div>
              <Link href="/flight-details" class="rounded-full bg-[#014F99] w-28  md:w-30 mt-2 h-7  p-2  flex gap-2 text-xs font-semibold text-white">
                
                <img src="images/visitIcon.png" alt="">
               <h1>Visit Website</h1>
               
               </Link>
              <div class="flex justify-between mt-20 md:mt-14">
              <img src="images/Star.png">
              <img src="images/Star.png">
              <img src="images/Star.png">
              <img src="images/Star.png">
              </div>
            </div>
            </div>
           </div>
        </div>
        <div class="flex  flex-col md:flex-row gap-2 items-center">
          <div class="mt-5 md:mt-2">
            <img src="images/GinosarHotel.png" class="rounded-[70px]">
          </div>
          <div class="border-2 border-[#014F99] h-56 w-[380px] md:w-[680px] p-6 rounded-[70px] mt-4">
            <div class="mt-5  md:ml-7 flex justify-between">
              <div>
                <h1>Nof Ginosar Hotel</h1>
                <p class="text-lg text-[#797984] font-semibold">Ginosar, 1498000</p>
                <p class="text-lg text-[#797984] font-normal">Check-In: 2024-11-20</p>
                <p class="text-lg text-[#797984] font-normal">Check-Out: 2024-11-22</p>
              </div>
              <div>
                <Link href="/flight-details" class="rounded-full bg-[#014F99] w-28  md:w-30 mt-2 h-7  p-2  flex gap-2 text-xs font-semibold text-white">
                <img src="images/visitIcon.png" alt="">
               <h1>Visit Website</h1>
               
                </Link>
              <div class="flex justify-between mt-24 md:mt-14">
              <img src="images/Star.png">
              <img src="images/Star.png">
              <img src="images/Star.png">
              <img src="images/Star.png">
              </div>
            </div>
            </div>
           </div>
        </div>
        <div class="flex  flex-col md:flex-row gap-2 items-center">
          <div class="mt-5 md:mt-2">
            <img src="images/Jerusalem.png" class="rounded-[70px]">
          </div>
          <div class="border-2 border-[#014F99] h-56 w-[380px]  md:w-[680px] p-2 md:p-6 rounded-[70px] mt-4">
            <div class="mt-5  md:ml-7 flex justify-between">
              <div class="mt-5 md:mt-0">
                <h1>Dan Jerusalem</h1>
                <p class="text-lg text-[#797984] font-semibold">Lehi St 32, Jerusalem, 97856</p>
                <p class="text-lg text-[#797984] font-normal">Check-In: 2024-11-22</p>
                <p class="text-lg text-[#797984] font-normal">Check-Out: 2024-11-26</p>
              </div>
              <div>
                <Link href="/flight-details" class="rounded-full bg-[#014F99] w-28 md:w-30 mt-8 md:mt-2 h-7  p-2  flex gap-2 text-xs font-semibold text-white">
                <img src="images/visitIcon.png" alt="">
               <h1>Visit Website</h1>
               
                </Link>
              <div class="flex justify-between mt-14">
              <img src="images/Star.png">
              <img src="images/Star.png">
              <img src="images/Star.png">
              <img src="images/Star.png">
           
              </div>
            </div>
            </div>
           </div>
        </div>
        
 
        </div>
        <!-- <div> <img src="images/Nof Ginosar Hotel.png" class="" /></div>
        <div> <img src="images/Dan Jerusalem.png" class="" /></div>-->
      </div>
      </div>
    
  </CustomLayout>
</template>
  
  <script setup>
import CustomLayout from "@/Layouts/CustomLayout.vue";
import HomePage from "@/Components/CustomGordon/HomePage.vue";
import HeroCardHotel from "@/Components/CustomGordon/HeroCardHotel.vue";
import { Link } from '@inertiajs/vue3';
</script>
