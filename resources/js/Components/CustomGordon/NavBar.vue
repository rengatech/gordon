<template>
  <Disclosure as="nav" class="bg-white" v-slot="{ open }">
    <div class=" mx-auto max-w-[90%] px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
          <div class="flex flex-shrink-0 items-center">
            <img class="h-14 w-auto" src="images/Gordon_logo.png" alt="Your Company"/>
          </div>
          <div class="hidden sm:ml-6 sm:flex sm:space-x-8">

            <Link href="/home" :class="[
                    'menu-item',
                    route().current('home') ? ' text-[#379BD6] ' : null,
                    ]" class="  md:text-sm  mt-2 text-base font-semibold">Home</Link>
            <Link href="/itinerary" :class="[
                    'menu-item',
                    route().current('itinerary') ? ' text-[#379BD6] ' : null,
                    ]" class="md:mr-5  md:text-sm  mt-2 text-base font-semibold">Itinerary</Link>
            <Link href="/hotel" :class="[
                    'menu-item',
                    route().current('hotel') ? ' text-[#379BD6] ' : null,
                    ]" class="md:mr-5  md:text-sm  mt-2 text-base font-semibold ">Hotel</Link>
            <Link href="/custom-register" :class="[
                    'menu-item',
                    route().current('custom-register') ? ' text-[#379BD6]' : null,
                    ]" class="md:mr-5  md:text-sm  mt-2 text-base font-semibold ">Register</Link>
            <Link
              href="/custom-login"
              class="rounded-full bg-[#379BD6] w-20 p-2 text-xs font-semibold text-center text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
               LOGIN
            </Link>
          </div>
          <div class="flex items-center sm:hidden">
          <DisclosureButton class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
            <span class="absolute -inset-0.5" />
            <span class="sr-only">Open main menu</span>
            <Bars3Icon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
            <XMarkIcon v-else class="block h-6 w-6" aria-hidden="true" />
          </DisclosureButton>
        </div>
        </div>
        
        
    </div>

    <DisclosurePanel class="sm:hidden">
      <div class="space-y-1 pb-3 pt-2">
        <!-- <DisclosureButton as="a" :class="[
                    'menu-item',
                    route().current('home') ? ' text-indigo-700  border-indigo-500 bg-indigo-50 ' : 'text-gray-500 bg-white',
                    ]" href="/home" class="block border-l-4  py-2 pl-3 pr-4 text-base font-medium ">Home</DisclosureButton>
        <DisclosureButton as="a" :class="[
                    'menu-item',
                    route().current('itinerary') ? ' text-indigo-700  border-indigo-500 bg-indigo-50 ' : 'text-gray-500 bg-white',
                    ]"  href="/itinerary" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium  hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Itinerary</DisclosureButton>
        <DisclosureButton as="a" href="/hotel" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Hotel</DisclosureButton>
        <DisclosureButton as="a" href="/custom-register" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Register</DisclosureButton> -->

        <DisclosureButton as="a" :class="[
                    'menu-item',
                    route().current('home') ? ' text-[#379BD6]  border-[#379BD6] bg-indigo-50 ' : 'text-gray-500 bg-white border-white',
                    ]" href="/home" class="block border-l-4  py-2 pl-3 pr-4 text-base font-medium ">Home</DisclosureButton>
                    <DisclosureButton as="a" :class="[
                    'menu-item',
                    route().current('itinerary') ? ' text-[#379BD6]  border-[#379BD6] bg-indigo-50 ' : 'text-gray-500 bg-white border-white',
                    ]" href="/itinerary" class="block border-l-4  py-2 pl-3 pr-4 text-base font-medium ">Itinerary</DisclosureButton>
                    <DisclosureButton as="a" :class="[
                    'menu-item',
                    route().current('hotel') ? ' text-[#379BD6]  border-[#379BD6] bg-indigo-50 ' : 'text-gray-500 bg-white border-white',
                    ]" href="/hotel" class="block border-l-4  py-2 pl-3 pr-4 text-base font-medium ">Hotel</DisclosureButton>
                    <DisclosureButton as="a" :class="[
                    'menu-item',
                    route().current('custom-register') ? 'text-[#379BD6]  border-[#379BD6] bg-indigo-50 ' : 'text-gray-500 bg-white border-white',
                    ]" href="/custom-register" class="block border-l-4  py-2 pl-3 pr-4 text-base font-medium ">Register</DisclosureButton>
        <Link
            href="/custom-login"
            type="button"
            class="rounded-full bg-[#379BD6] w-20 p-2 pl-4 text-xs font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          LOGIN
      </Link>
      </div>
      
    </DisclosurePanel>
  </Disclosure>
</template>

<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { Bars3Icon, BellIcon, XMarkIcon } from '@heroicons/vue/24/outline'
import { Link } from '@inertiajs/vue3';




</script>








