<template>
  <CustomLayout>
    <HomePage />

    <HeroCardHotel />
    <div class="h-screen">
    <div class="ml-[40%]">
      <div class="mb-10">
        <div class="flex flex-row gap-[30%]">
          <h1 class="text-3xl text-center ml-40">Day to Day itinerary</h1>
          <button
            class="rounded-full bg-[#379BD6] w-60 mt-2 p-2 text-xs font-semibold text-white"
          >pdf Version</button>
        </div>
      </div>
      <div class="flex flex-col gap-20 mt-5">
        <!-- <img src="images/day1.png" class="" />
            <img src="images/day2.png" class="" />
            <img src="images/day3.png" class="" />
            <img src="images/day4.png" class="" />
            <img src="images/day5.png" class="" />
            <img src="images/day6.png" class="" />
            <img src="images/day7.png" class="" />
            <img src="images/day8.png" class="" />
        <img src="images/day9.png" class="" />-->
        <div>
          <div class="bg-white h-28 w-28 rounded-[40px] mb-[30%] border-2 border-cyan-400">
            <div class="text-center">
              <h1 class="absolute ml-10 p-2">18</h1>
              <p class="p-8 text-sm flex flex-col gap-5"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
  </CustomLayout>
</template>
  
  <script setup>
import CustomLayout from "@/Layouts/CustomLayout.vue";
import HomePage from "@/Components/CustomGordon/HomePage.vue";
import HeroCardHotel from "@/Components/CustomGordon/HeroCardHotel.vue";
</script>