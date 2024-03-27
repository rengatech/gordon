<template>
  <CustomLayout>
    <HomePage />
    <HeroCardHotel />
    <div class="">
      <div class="ml-0 md:ml-[35%] font-bold text-4xl space-y-10">
    <h1 class="ml-[30%] ">Flights Details</h1>
    <div> <img src="images/Flight-map.png" class="ml" /></div>
    </div>
    </div>
  </CustomLayout>
</template>
  
  <script setup>
import CustomLayout from "@/Layouts/CustomLayout.vue";
import HomePage from "@/Components/CustomGordon/HomePage.vue";
import HeroCardHotel from "@/Components/CustomGordon/HeroCardHotel.vue";
</script>