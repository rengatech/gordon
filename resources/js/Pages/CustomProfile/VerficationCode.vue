<template>
    <CustomLayout>
        <HomePage />
        <HeroCardHotel />
      
    
        <div class=" h-screen " >
            <div class="mt-[55rem] md:mt-0">
            <div class="flex flex-col  justify-center items-center  mb-20  text-2xl font-extrabold ">
                <div class="text-sm text-[#014F99] mt-20 ml-3 ">
                 <p class="mb-4">Hello Mr. Dennis,</p>
                 
                 <p class="mb-4">It's good to see you again, we sent you a login code to your email </p>
                 
                 <p class="mb-4">and we'll be happy to get it back</p>
                </div>
           
                    <div class="">
                        <input type="email" name="email" id="email"
                            class=" rounded-full border-2 w-96 py-1.5  text-[#797984] border-[#014F99] pl-6 placeholder:text-gray-400  text-sm "
                            placeholder="Code"/>
                    </div>
                    <div class="border h-14 w-96  mt-10 pt-3 rounded-full bg-[#379BD6] ">
                        <Link href="/booking-details" class="text-center text-lg ml-5 pl-28 text-white">CONTINUE *</Link>
                        <div class="text-sm mt-5 pl-5 text-[#014F99]">
                            <p>If you did not receive the email, check your spam and you can</p>
                            <p><a class="underline underline-offset-1 cursor-pointer">click here</a> to receive it again</p>
                        </div>
                    </div>
                    
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

