<template>
    <CustomLayout>
        <HomePage/>
        <HeroCardHotel/>
      
      
        <Footer/>
    </CustomLayout>
  </template>
  
  <script setup>
      import CustomLayout from '@/Layouts/CustomLayout.vue';
      import HomePage from '@/Components/CustomGordon/HomePage.vue';
      import Footer from "@/Components/CustomGordon/Footer.vue"
      import HeroCardHotel from '@/Components/CustomGordon/HeroCardHotel.vue';
</script>