<template>

    <Navbar/>
    <slot/>


    <Footer/>

  </template>
  
  <script setup>
  import Navbar from '@/Components/CustomGordon/NavBar.vue'
  import Footer from '@/Components/CustomGordon/Footer.vue'
  </script>