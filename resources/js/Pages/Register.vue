<template>
    <CustomLayout>
        <HomePage/>
        <HeroCardHotel/>

        <div class="ml-[60%]">
            Login
        </div>
        <Footer/>
    </CustomLayout>
  </template>
  
  <script setup>
      import CustomLayout from '@/Layouts/CustomLayout.vue';
      import HomePage from '@/Components/CustomGordon/HomePage.vue';
      import Footer from "../Components/CustomGordon/Footer.vue"
      import HeroCardHotel from '@/Components/CustomGordon/HeroCardHotel.vue';
      
</script>