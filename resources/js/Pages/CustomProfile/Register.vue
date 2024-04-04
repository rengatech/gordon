<template>
    <CustomLayout>
        <HomePage />
        <HeroCardHotel />

           
            <div class="mt-[55rem] md:mt-0">

            <div class="md:ml-[50%] text-2xl font-extrabold ">
                <h1 class="ml-20">Set up your account</h1>
                <div class=" flex  gap-4 mb-8">
                    <div class="mt-10">
                        <input type="text" name="email" id="email"
                            class=" rounded-full border-2 md:w-48 md:py-1.5 ml-2 p-2 text-[#797984] border-[#014F99] placeholder:text-gray-400  text-sm "
                            placeholder="First Name*" />
                    </div>
                    <div class="mt-10">
                        <input type="text" name="email" id="email"
                            class=" rounded-full border-2 md:w-48 md:py-1.5 p-2 text-[#797984] border-[#014F99] placeholder:text-gray-400  text-sm "
                            placeholder="Last Name*" />
                    </div>
                </div>
                <div>
                    <div class="">
                        <input type="email" name="email" id="email"
                            class=" rounded-full border-2 md:w-96  ml-2 w-[92%] md:py-1.5  text-[#797984] border-[#014F99] placeholder:text-gray-400  text-sm "
                            placeholder="Your email *" />
                    </div>
                    <div class="border md:h-14 md:w-96  w-[92%] ml-2 h-12 mt-10 pt-2 rounded-full bg-[#379BD6] ">
                        <Link href="/verfication-code" class="text-center text-lg  ml-5 pl-28 text-white">CONTINUE *</Link>
                    </div>
                    <p class="text-xs mt-5 md:ml-4 text-[#014F99] flex gap-2 ml-2">if you have already an account please login
                        from here
                        <Link href="/custom-login"
                            class="text-center rounded-full p-0.5 bg-[#014F99] h-5 w-20 text-[#FFFFFF]">Login</Link>
                    </p>
                </div>
            </div>
        </div>
        

        
        
    </CustomLayout>
</template>

<script setup>
import CustomLayout from '@/Layouts/CustomLayout.vue';
import HomePage from '@/Components/CustomGordon/HomePage.vue';
import HeroCardHotel from '@/Components/CustomGordon/HeroCardHotel.vue';
import { Link } from '@inertiajs/vue3';

</script>
