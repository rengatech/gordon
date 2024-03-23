<template>
  <CustomLayout>
      <HomePage />
      <HeroCardHotel />
 <div class="h-screen">
  <div class="accordion ml-[35%] font-bold text-xl space-y-5">
    <div v-for="(item, index) in items" :key="index">
      <div @click="toggleAccordion(index)" class="accordion-item">
        <div class="accordion-title">
          {{ item.title }}
          <img src="images/passicon.png" alt="pass">
          <span v-if="activeIndex === index" class="accordion-icon"></span>
          <span v-else class="accordion-icon"></span>
        </div>
        <div v-show="activeIndex === index" class="accordion-content">
          {{ item.content }}
          <input class="rounded-full" placeholder="Select category *">
          <input class="rounded-full" placeholder="How many passengers *">
          <div class="item-end">
          <Link
              href="/custom-login"
              class="rounded-full bg-[#014F99] w-40 p-2 text-xs font-semibold text-center text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            next
          </Link>
          </div>
        </div>
      </div>
      <div @click="toggleAccordion(index)" class="accordion-item">
        <div class="accordion-title">
          {{ item.title }}
          <img src="images/passicon.png" alt="pass">
          <span v-if="activeIndex === index" class="accordion-icon"></span>
          <span v-else class="accordion-icon"></span>
        </div>
        <div v-show="activeIndex === index" class="accordion-content">
          {{ item.content }}
          <input class="rounded-full" placeholder="Select category *">
          <input class="rounded-full" placeholder="How many passengers *">
          <div class="item-end">
          <Link
              href="/custom-login"
              class="rounded-full bg-[#014F99] w-40 p-2 text-xs font-semibold text-center text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            next
          </Link>
          </div>
        </div>
      </div>
    </div>
  </div>

 </div>
      <Footer />
  </CustomLayout>
</template>

<script setup>
import CustomLayout from '@/Layouts/CustomLayout.vue';
import HomePage from '@/Components/CustomGordon/HomePage.vue';
import HeroCardHotel from '@/Components/CustomGordon/HeroCardHotel.vue';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const activeIndex = ref(null);

const items = [
  { title: 'Category & Passengers', content: '' },
 
];

const toggleAccordion = (index) => {
  activeIndex.value = activeIndex.value === index ? null : index;
};

</script>

<style scoped>
.accordion {
  width: 100%;
}

.accordion-item {
  border-bottom: 1px solid #ddd;
  cursor: pointer;
  padding: 1rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
}

.accordion-title {
  flex: 1;
}

.accordion-icon {
  font-size: 1.5rem;
}

.accordion-content {
  padding: 1rem;
}
</style>