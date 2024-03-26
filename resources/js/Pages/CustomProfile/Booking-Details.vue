<template>
  <CustomLayout>
    <HomePage />
    <HeroCardHotel />
    <div class="h-screen ml-[30%] mr-[12%]">
      <div class="accordion ml-[10%] font-bold text-xl space-y-5">
        <div>
          <div @click="toggleAccordion(1)" class="accordion-item">
            <div class="border-8 w-full  rounded-md">
          <div class="accordion-title w-full flex bg-gray-200 gap-2">
              <img src="images/passicon.png" class="w-8" />
              Category & Passengers
              </div>
              </div>
          </div>
          <div v-show="activeIndex === 1" class="accordion-content">
            <!-- {{ item.content }} -->
            <div class="flex gap-64">
              <input class="rounded-full w-96" placeholder="Select category *" />
              <input class="rounded-full w-96" placeholder="How many passengers *" />
            </div>
            <div class="item-end">
              <Link
                href="/custom-login"
                class=" flex rounded-full bg-[#014F99] w-30 p-2 mt-7 text-xs font-semibold ml-[90%]  justify-center text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              next</Link>
            </div>
          </div>
        </div>
        <div>
          <div @click="toggleAccordion(2)" class="accordion-item">
            <div class="border-8  w-full  rounded-md">
            <div class="accordion-title w-full flex bg-gray-200 gap-2 " >
              <img src="images/Familyicon.png" class="w-8" />
              Personal details
              </div>
              </div>
          </div>
          <div v-show="activeIndex === 2" class="accordion-content">
            <!-- {{ item.content }} -->
            <div class="text-gray-600">
              <p>Please make sure the details is identical as it written in the passport</p>

              <div class="flex flex-wrap justify-between mt-5">
                <div>
                  <p class="ml-2">Title</p>
                  <div class="rounded">
                    <select class="rounded-full w-40">
                    <option value="volvo"></option>
                    <option value="volvo">volvo</option>
                    <option value="saab">saab</option>
                    <option value="opel">opel</option>
                  </select>
                  </div>
                  </div>
                <div>
                  <p class="ml-5">First Name*</p>
                  <input class="rounded-full w-60" />
                </div>
                <div>
                  <p class="ml-5">Middle Name</p>
                  <input class="rounded-full w-60" />
                </div>
                <div>
                  <p class="ml-5">Last Name*</p>
                  <input class="rounded-full w-60" />
                </div>
              </div>
              <div class="flex flex-wrap justify-between mt-5">
                <div>
                  <!-- <p class="ml-5">Gender*</p> -->
                  <!-- <input  class="rounded-full w-"> -->
                  <div>
                  <p class="ml-5">Gender*</p>
                  <div class="rounded">
                    <select class="rounded-full w-40">
                    <option value="volvo"></option>
                    <option value="saab">Male</option>
                    <option value="opel">Female</option>
                  </select>
                  </div>

                </div>
                </div>
                <div>
                  <p class="ml-5">Birth Date*</p>
                  <input type="date" class="rounded-full w-60" />
                </div>

                <div>
                  <p class="ml-5">Passport Number*</p>
                  <input class="rounded-full w-60" />
                </div>
                <div>
                  <p class="ml-5">Date of Expiry*</p>
                  <input type="date" class="rounded-full w-60" />
                </div>
              </div>
              <div class="flex flex-wrap gap-[62px] mt-8">
                <div>
                  <p class="ml-2">Country Code*</p>
                  <div class="rounded">
                    <select class="rounded-full w-40">
                    <option value="volvo"></option>
                    <option value="saab"></option>
                    <option value="opel"></option>
                  </select>
                  </div>
                  </div>
                <div class="">
                  <p class="ml-2">Mobile Number*</p>
                  <input class="rounded-full w-60" />
                </div>
                <div >
                  <p class="ml-2">Billing Address (inclode ZIP code)*</p>
                  <input class="rounded-full w-[174%] "/>
                </div>
              </div>

              <div class="mt-8">
                <p>Food restrictions:</p>
                <form action="/action_page.php">
                  <div class="flex gap-14 mt-2">
                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]"/>
                      <label class="ml-2">Sugar Free</label>
                    </div>

                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]" />
                      <label class="ml-2">Lactose Free</label>
                    </div>
                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]" />
                      <label class="ml-2">Gluten Free</label>
                    </div>
                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]" />
                      <label class="ml-2">Vegetarian</label>
                    </div>
                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]" />
                      <label class="ml-2">Vegen</label>
                    </div>
                    <div>
                      <input type="checkbox" checked="checked" class="bg-[#D9D9D9]" />
                      <label class="ml-2">other</label>
                    </div> 
                  </div>
                </form>
              </div>

              <div class="mt-5">
                <p class="ml-5">please specify</p>
                <input class="rounded-full w-full" placeholder />
              </div>

              <div class="flex flex-wrap justify-between mt-5">
                <div>
                  <p class="ml-5">Room type</p>
                  <div class="rounded-lg">
                    <select class="rounded-full w-64">
                    <option value="volvo">select</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                  </div>

                </div>
                <div>
                  <p class="ml-5">Bad Type</p>
                  <div class="rounded-lg">
                    <select class="rounded-full w-64">
                    <option value="volvo">select</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                  </div>

                </div>
                <div>
                  <p class="ml-5">Rooming with</p>
                  <input class="rounded-full w-64" />
                </div>
              </div>
              <div class="mt-5">
                <input type="checkbox" class="bg-[#D9D9D9]"/>
                      <label class="ml-2">Please assign me a room partner</label>
              </div>

              <div class="mt-8">
                <p>Emergency Contact Information:</p>
              </div>
               <div class="flex flex-wrap justify-between mt-5">
                <div>
                  <p class="ml-5">Name*</p>
                  <input class="rounded-full w-"  />
                </div>
                <div>
                  <p class="ml-5">Mobile*</p>
                  <input class="rounded-full w-"  />
                </div>
                <div>
                  <p class="ml-5">Relationship*</p>
                  <input class="rounded-full w-" />
                </div>
              </div>

              <div class="mt-5">
                <p>Notes:</p>
                <input class="rounded-md w-full h-28" />
              </div>
              
               <div class="flex ">
                <div class="border-b-4 w-[38%] mb-3 border-[#D9D9D9]   ">
                  </div>
                  <div class=" mt-5 font-bold text-black text-md ">Information - Passenger #2</div>
                  <div class="border-b-4 w-[38%] mb-3 border-[#D9D9D9]   ">
                  </div>
              <!-- <div class="border-b-4 w-[40%] pb-12  border-[#D9D9D9]   ">
              </div> -->
               </div>


              <div class="">
                <p class=" ml-2 mt-5">Your Relationship*</p>
                <div class="flex">
                  <div class=" rounded-lg">
                    <select class="rounded-full w-52">
                    <option value="volvo" class="">Child</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                  </div>
                  <div class="mt-2 pl-64">
                <input type="checkbox" class="bg-[#D9D9D9]"/>
                      <label class="ml-2">We use the same contact information and account for payment</label>
              </div>
                </div>
              </div>
              <div class="text-gray-600 mt-3">
              <p>Please make sure the details is identical as it written in the passport</p>

              <div class="flex flex-wrap justify-between mt-5">
                <div>
                  <p class="ml-2">Title</p>
                  <div class="rounded">
                    <select class="rounded-full w-40">
                    <option value="volvo"></option>
                    <option value="volvo">volvo</option>
                    <option value="saab">saab</option>
                    <option value="opel">opel</option>
                  </select>
                  </div>
                  </div>
                <div>
                  <p class="ml-5">First Name*</p>
                  <input class="rounded-full w-60" />
                </div>
                <div>
                  <p class="ml-5">Middle Name</p>
                  <input class="rounded-full w-60" />
                </div>
                <div>
                  <p class="ml-5">Last Name*</p>
                  <input class="rounded-full w-60" />
                </div>
              </div>
              <div class="flex flex-wrap justify-between mt-5">
                <div>
                  <!-- <p class="ml-5">Gender*</p> -->
                  <!-- <input  class="rounded-full w-"> -->
                  <div>
                  <p class="ml-5">Gender*</p>
                  <div class="rounded">
                    <select class="rounded-full w-40">
                    <option value="volvo"></option>
                    <option value="saab">Male</option>
                    <option value="opel">Female</option>
                  </select>
                  </div>

                </div>
                </div>
                <div>
                  <p class="ml-5">Birth Date*</p>
                  <input type="date" class="rounded-full w-60" />
                </div>

                <div>
                  <p class="ml-5">Passport Number*</p>
                  <input class="rounded-full w-60" />
                </div>
                <div>
                  <p class="ml-5">Date of Expiry*</p>
                  <input type="date" class="rounded-full w-60" />
                </div>
              </div>
              <div class="flex flex-wrap gap-[62px] mt-8">
                <div>
                  <p class="ml-2">Country Code*</p>
                  <div class="rounded">
                    <select class="rounded-full w-40">
                    <option value="volvo"></option>
                    <option value="saab"></option>
                    <option value="opel"></option>
                  </select>
                  </div>
                  </div>
                <div class="">
                  <p class="ml-2">Mobile Number*</p>
                  <input class="rounded-full w-60" />
                </div>
                <div >
                  <p class="ml-2">Billing Address (inclode ZIP code)*</p>
                  <input class="rounded-full w-[174%] "/>
                </div>
              </div>

              <div class="mt-8">
                <p>Food restrictions:</p>
                <form action="/action_page.php">
                  <div class="flex gap-14 mt-2">
                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]"/>
                      <label class="ml-2">Sugar Free</label>
                    </div>

                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]" />
                      <label class="ml-2">Lactose Free</label>
                    </div>
                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]" />
                      <label class="ml-2">Gluten Free</label>
                    </div>
                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]" />
                      <label class="ml-2">Vegetarian</label>
                    </div>
                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]" />
                      <label class="ml-2">Vegen</label>
                    </div>
                    <div>
                      <input type="checkbox" checked="checked" class="bg-[#D9D9D9]" />
                      <label class="ml-2">other</label>
                    </div> 
                  </div>
                </form>
              </div>

              <div class="mt-5">
                <p class="ml-5">please specify</p>
                <input class="rounded-full w-full" placeholder />
              </div>

              <div class="flex flex-wrap justify-between mt-5">
                <div>
                  <p class="ml-5">Room type</p>
                  <div class="rounded-lg">
                    <select class="rounded-full w-64">
                    <option value="volvo">select</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                  </div>

                </div>
                <div>
                  <p class="ml-5">Bad Type</p>
                  <div class="rounded-lg">
                    <select class="rounded-full w-64">
                    <option value="volvo">select</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                  </div>

                </div>
                <div>
                  <p class="ml-5">Rooming with</p>
                  <input class="rounded-full w-64" />
                </div>
              </div>
              <div class="mt-5">
                <input type="checkbox" class="bg-[#D9D9D9]"/>
                      <label class="ml-2">Please assign me a room partner</label>
              </div>
              <div class="flex ">
                <div class="border-b-4 w-[38%] mb-3 border-[#D9D9D9]   ">
                  </div>
                  <div class=" mt-5 font-bold text-black text-md ">Information - Passenger #3</div>
                  <div class="border-b-4 w-[38%] mb-3 border-[#D9D9D9]   ">
                  </div>
              <!-- <div class="border-b-4 w-[40%] pb-12  border-[#D9D9D9]   ">
              </div> -->
               </div>
               <div class="">
                <p class=" ml-2 mt-5">Your Relationship*</p>
                <div class="flex">
                  <div class=" rounded-lg">
                    <select class="rounded-full w-52">
                    <option value="volvo" class="">Child</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                  </div>
                  <div class="mt-2 pl-64">
                <input type="checkbox" class="bg-[#D9D9D9]"/>
                      <label class="ml-2">We use the same contact information and account for payment</label>
              </div>
                </div>
              </div>
              <div class="flex flex-wrap justify-between mt-5">
                <div>
                  <p class="ml-2">Title</p>
                  <div class="rounded">
                    <select class="rounded-full w-40">
                    <option value="volvo"></option>
                    <option value="volvo">volvo</option>
                    <option value="saab">saab</option>
                    <option value="opel">opel</option>
                  </select>
                  </div>
                  </div>
                <div>
                  <p class="ml-5">First Name*</p>
                  <input class="rounded-full w-60" />
                </div>
                <div>
                  <p class="ml-5">Middle Name</p>
                  <input class="rounded-full w-60" />
                </div>
                <div>
                  <p class="ml-5">Last Name*</p>
                  <input class="rounded-full w-60" />
                </div>
              </div>

              <div class="flex flex-wrap gap-[62px] mt-8">
                <div>
                  <p class="ml-2">Country Code*</p>
                  <div class="rounded">
                    <select class="rounded-full w-40">
                    <option value="volvo"></option>
                    <option value="saab"></option>
                    <option value="opel"></option>
                  </select>
                  </div>
                  </div>
                <div class="">
                  <p class="ml-2">Mobile Number*</p>
                  <input class="rounded-full w-60" />
                </div>
                <div >
                  <p class="ml-2">eMail  Address*</p>
                  <input class="rounded-full w-[174%] "/>
                </div>
              </div>
            
              <p class="mt-5">• At the end of your registration process, the system will create a dedicated link for him so that he can</p>
              <p class="ml-4">log in and complete the registration</p>
             

            

               
              </div>
              

              

              


              <div class="flex ">
                <Link
                href="/custom-login"
                class=" flex rounded-full bg-[#014F99] w-60 p-2 mt-7  text-xs font-semibold  justify-center  text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              back</Link>
              <Link
                href="/custom-login"
                class=" flex rounded-full bg-[#014F99] w-60 p-2 mt-7 text-xs font-semibold ml-[80%]  justify-center text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              next</Link>
              </div>
              
            </div>
          </div>
        </div>
        <div @click="toggleAccordion(3)" class="accordion-item">
            <div class="border-8  w-full  rounded-md">
            <div class="accordion-title w-full flex bg-gray-200 gap-2 " >
              <img src="images/shopping.png" class="w-8" />
              Additional Services
              </div>
              </div>
          </div>
          <div v-show="activeIndex === 3" class="accordion-content">
            <h1 class="font-bold ">Bike trip in the old city</h1>
         
          <div class="flex flex-wrap justify-between mt-5">
                <div>
                  <p class="ml-5  text-[#797984]">Passenger Name</p>
                  <div class="rounded-lg">
                    <select class="rounded-full w-64 mt-2 text-[#9C9B9B]">
                    <option value="volvo">select</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                  </div>

                </div>
                <div>
                  <p class="ml-5  text-[#797984]">Bike Type</p>
                  <div class="rounded-lg">
                    <select class="rounded-full w-64 mt-2 text-[#9C9B9B]">
                    <option value="volvo">select</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                  </div>

                </div>
                <div>
                  <p class="ml-5  text-[#797984]">Height</p>
                  <select class="rounded-full w-64 mt-2 text-[#9C9B9B]">
                    <option value="volvo">160CM</option>
                  </select>
                </div>
              </div>
              <div class="mt-5 ml-3">
                      <input type="checkbox" class="bg-[#D9D9D9]"/>
                      <label class="ml-2 text-[#797984]">Not relevant</label>
                    </div>
                    <div class="flex flex-wrap justify-between mt-5">
                <div>
                  <p class="ml-5  text-[#797984]">Passenger Name</p>
                  <div class="rounded-lg">
                    <select class="rounded-full w-64 mt-2 text-[#9C9B9B]">
                    <option value="volvo">select</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                  </div>

                </div>
                <div>
                  <p class="ml-5 text-[#797984]">Bike Type</p>
                  <div class="rounded-lg">
                    <select class="rounded-full w-64 mt-2 text-[#9C9B9B]">
                    <option value="volvo">select</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                  </div>

                </div>
                <div>
                  <p class="ml-5 text-[#797984]">Height</p>
                  <select class="rounded-full w-64 mt-2 text-[#9C9B9B]">
                    <option value="volvo">160CM</option>
                  </select>
                </div>
              </div>
              <div class="mt-5 ml-3">
                      <input type="checkbox" class="bg-[#D9D9D9]"/>
                      <label class="ml-2 text-[#797984]">Not relevant</label>
                    </div>

                    <div class="flex flex-wrap justify-between mt-5">
                <div>
                  <p class="ml-5 text-[#797984] ">Passenger Name</p>
                  <div class="rounded-lg">
                    <select class="rounded-full w-64 mt-2 text-[#9C9B9B]">
                    <option value="volvo">select</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                  </div>

                </div>
                <div>
                  <p class="ml-5 text-[#797984]">Bike Type</p>
                  <div class="rounded-lg">
                    <select class="rounded-full w-64 mt-2 text-[#9C9B9B]">
                    <option value="volvo">select</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                  </div>

                </div>
                <div>
                  <p class="ml-5 text-[#797984]">Height</p>
                  <select class="rounded-full w-64 mt-2 text-[#9C9B9B]">
                    <option value="volvo">160CM</option>
                  </select>
                </div>
              </div>
              <div class="mt-5 ml-3">
                      <input type="checkbox" class="bg-[#D9D9D9]"/>
                      <label class="ml-2 text-[#797984]">Not relevant</label>
                    </div>

                    <div class="flex ">
                <Link
                href="/custom-login"
                class=" flex rounded-full bg-[#014F99] w-60 p-2 mt-7  text-xs font-semibold  justify-center  text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              back</Link>
              <Link
                href="/custom-login"
                class=" flex rounded-full bg-[#014F99] w-60 p-2 mt-7 text-xs font-semibold ml-[80%]  justify-center text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              next</Link>
              </div>
            </div>
            
            <!-- <div @click="toggleAccordion(4)" class="accordion-item">
            <div class="border-8  w-full  rounded-md">
            <div class="accordion-title w-full flex bg-gray-200 gap-2 " >
              <img src="images/icon.png" class="w-8" />
              Confirmation Details
              </div>
              </div>
            
          </div>
          <div v-show="activeIndex === 4" class="accordion-content">
                <div class="justify-start">
                  <p>Your details:</p>
                </div>
              </div> -->
            <div @click="toggleAccordion(5)" class="accordion-item">
            <div class="border-8  w-full  rounded-md">
            <div class="accordion-title w-full flex bg-gray-200 gap-2 " >
              <img src="images/cardicon.png" class="w-8" />
              payment
              </div>
              </div>
            
          </div>
          <div v-show="activeIndex === 5" class="accordion-content">

            <h1>Select currency to pay</h1>
            <div>
              <table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
</table>
            </div>
            
              </div>
            
      </div>
      
      
    </div>
    

  </CustomLayout>
</template>

<script setup>
import CustomLayout from "@/Layouts/CustomLayout.vue";
import HomePage from "@/Components/CustomGordon/HomePage.vue";
import HeroCardHotel from "@/Components/CustomGordon/HeroCardHotel.vue";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import { Menu, MenuButton, MenuItem, MenuItems } from "@headlessui/vue";
import { ChevronDownIcon } from "@heroicons/vue/20/solid";

const activeIndex = ref(null);

const items = [
  { id: 1, title: "Category & Passengers", content: "" },
  { id: 2, title: "Personal details", content: "" },
  { id: 3, title: "Additional Services", content: "" },
  { id: 4, title: "Confirmation Details", content: "" }
];

const toggleAccordion = index => {
  activeIndex.value = activeIndex.value === index ? null : index;
};
</script>

<style scoped>
.accordion {
  width: 100%;
}

.accordion-item {
 
  cursor: pointer;
  
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


table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #F1EEEE;
}
</style>
