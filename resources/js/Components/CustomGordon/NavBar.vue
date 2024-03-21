<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
  import { Bars3Icon, BellIcon, XMarkIcon } from '@heroicons/vue/24/outline'
</script>

<template>
            <Disclosure as="nav" class="bg-white" v-slot="{ open }">
      <div class="mx-auto max-w-[90%] px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 justify-between">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          
            <DisclosureButton class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="absolute -inset-0.5" />
              <span class="sr-only">Open main menu</span>
              <Bars3Icon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
              <XMarkIcon v-else class="block h-6 w-6" aria-hidden="true" />
            </DisclosureButton>
          </div>
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-between">
            <div class="flex flex-shrink-0 items-center">
              <img class="h-10 w-auto" src="images/Gordon_logo.png" alt="Your Company" />
            </div>
            <div class="hidden sm:ml-6 sm:flex items-center sm:space-x-8">
             
              <a href="/" class="inline-flex items-center border-b-2 border-indigo-500 px-1 pt-1 text-sm font-medium text-gray-900">Home</a>
              <a href="/itinerary" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-#2A2A2A hover:border-gray-300 hover:text-gray-700">Itinerary</a>
              <a href="/hotel" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-#2A2A2A hover:border-gray-300 hover:text-gray-700">Hotel</a>
              <a href="/" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-#2A2A2A hover:border-gray-300 hover:text-gray-700">Register</a>
              <button type="button" class="rounded-full bg-[#379BD6] w-20 p-2 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">LOGIN</button>
              
            </div>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          </div>
        </div>
      </div>
    </Disclosure>
</template>