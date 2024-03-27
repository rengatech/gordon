<template>
  <CustomLayout>
    <HomePage />
    <HeroCard />
    <div class="mt-[55rem] md:mt-0">
      <div class="flex md:ml-[38%] gap-5 p-2">
        <div>
          <img src="images/Mask 1.png " class="w-80 rounded-[70px]" />
        </div>
        <div>
          <img src="images/Mask 2.png" class="w-80 rounded-[70px]" />
        </div>
        <div>
          <img src="images/Mask 3.png" class="w-80 rounded-[70px]" />
        </div>
      </div>
      <div class="md:w-[55%] p-5 md:ml-[37%] mb-[20%] mt-20">
        <h1 class="text-3xl  font-semibold">Holy land</h1>
        <p class="mt-5 text-gray-600">
          The Holy Land is an area roughly located between the Mediterranean Sea and the eastern bank of the Jordan
          River, traditionally synonymous both with the biblical Land of Israel and with the region of Palestine.
          Today, the term "Holy Land" usually refers to a territory roughly corresponding to the modern State of
          Israel and the State of Palestine. Jews, Christians, Muslims and Baháʼís regard it as holy.
        </p>
        <p class="mt-5 text-gray-600">
          Part of the significance of the land stems from the religious significance of Jerusalem (the holiest
          city to Judaism, and the location of the First and Second Temples), as well as its historical
          significance as the setting for most of the Bible, the historical locale of Jesus' ministry, the
          location of the first Qibla before Kaaba in Mecca and the site of the Isra and Mi'raj event in Islam,
          and the site of the most revered pilgrimage sites in the Baháʼí faith.
        </p>
      </div>
    </div>
  </CustomLayout>
</template>

<script setup>
import CustomLayout from "@/Layouts/CustomLayout.vue";
import HomePage from "@/Components/CustomGordon/HomePage.vue";

import HeroCard from "@/Components/CustomGordon/HeroCard.vue";
</script>