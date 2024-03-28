<template>
    <CustomLayout>
        <HomePage/>
        <HeroCardHotel/>
        <div class="h-screen">
        <div class="ml-[38%] md:ml-[60%] text-2xl font-extrabold ">
            LOGIN
            <div class="ml-[-120px] mt-8">
            <div class="h-10 w-80 mt-28 rounded-full ">
                <input type="email" name="email" id="email" class=" rounded-full border-2 w-80 py-1.5  text-[#797984] border-[#014F99] placeholder:text-gray-400  text-sm " placeholder="Your email *" />

            </div>
            <div class="border h-10 w-80 mt-10 pr-10  rounded-full bg-[#379BD6] ">
                <h1 class=" mt-2 ml-10 text-center text-lg text-white ">CONTINUE *</h1>
            </div>
        </div>
        </div>
        
    </div>
        <Footer/>
    </CustomLayout>
  </template>
  
  <script setup>
      import CustomLayout from '@/Layouts/CustomLayout.vue';
      import HomePage from '@/Components/CustomGordon/HomePage.vue';
      import HeroCardHotel from '@/Components/CustomGordon/HeroCardHotel.vue';
</script>