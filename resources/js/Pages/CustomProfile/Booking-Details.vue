<template>
  <CustomLayout>
    <HomePage />
    <HeroCardHotel />
    <div class="mt-[55rem] md:mt-0">
    <div class="md:ml-[30%] mr-[6%]">
      <div class="md:accordion ml-[10%] font-bold text-xl space-y-5">
        <div>
          <div @click="toggleAccordion(1)" class="accordion-item">
            <div class="border-8 w-full rounded-md">
              <div class="accordion-title w-full flex bg-gray-200 gap-2">
                <img src="images/passicon.png" class="w-8" />
                Category & Passengers
              </div>
            </div>
          </div>
          <div v-show="activeIndex === 1" class="accordion-content">
            <!-- {{ item.content }} -->
            <div class="md:flex justify-between ">
              <div><input class="rounded-full  w-80 md:w-96" placeholder="Select category *" /></div>
              <div class="mt-5 md:mt-0"><input class="rounded-full w-80 md:w-96" placeholder="How many passengers *" /></div>
              
            </div>
            <div class="item-end">
              <Link
                href="/custom-login"
                class="flex rounded-full bg-[#014F99] w-30 p-2 mt-7  text-xs font-semibold ml-[70%] md:ml-[90%]  justify-center text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
              >next</Link>
            </div>
          </div>
        </div>
        <div>
          <div @click="toggleAccordion(2)" class="accordion-item">
            <div class="border-8 w-full rounded-md">
              <div class="accordion-title w-full flex bg-gray-200 gap-2">
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
                  <p class="ml-0 md:ml-2">Title</p>
                  <div class="rounded">
                    <select class="rounded-full w-60 md:w-40">
                      <option value="volvo"></option>
                      <option value="volvo">volvo</option>
                      <option value="saab">saab</option>
                      <option value="opel">opel</option>
                    </select>
                  </div>
                </div>
                <div>
                  <p class="ml-0 md:ml-5">First Name*</p>
                  <input class="rounded-full w-60" />
                </div>
                <div>
                  <p class="ml-0 md:ml-5">Middle Name</p>
                  <input class="rounded-full w-60" />
                </div>
                <div>
                  <p class="ml-0 md:ml-5">Last Name*</p>
                  <input class="rounded-full w-60" />
                </div>
              </div>
              <div class="flex flex-wrap justify-between mt-5">
                <div>
                  <!-- <p class="ml-5">Gender*</p> -->
                  <!-- <input  class="rounded-full w-"> -->
                  <div>
                    <p class="ml-0 md:ml-5">Gender*</p>
                    <div class="rounded">
                      <select class="rounded-full w-60 md:w-40">
                        <option value="volvo"></option>
                        <option value="saab">Male</option>
                        <option value="opel">Female</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div>
                  <p class="ml-0 md:ml-5">Birth Date*</p>
                  <input type="date" class="rounded-full w-60" />
                </div>

                <div>
                  <p class="ml-0 md:ml-5">Passport Number*</p>
                  <input class="rounded-full w-60" />
                </div>
                <div>
                  <p class="md:ml-5">Date of Expiry*</p>
                  <input type="date" class="rounded-full w-60" />
                </div>
              </div>
              <div class="flex flex-wrap gap-[62px] mt-8">
                <div>
                  <p class="md:ml-2">Country Code*</p>
                  <div class="rounded">
                    <select class="rounded-full w-60 md:w-40">
                      <option value="volvo"></option>
                      <option value="saab"></option>
                      <option value="opel"></option>
                    </select>
                  </div>
                </div>
                <div class>
                  <p class="md:ml-2">Mobile Number*</p>
                  <input class="rounded-full w-60" />
                </div>
                <div>
                  <p class="md:ml-2">Billing Address (inclode ZIP code)*</p>
                  <input class="rounded-full w-60 md:w-[138%]" />
                </div>
              </div>

              <div class="mt-8">
                <p>Food restrictions:</p>
                <form action="/action_page.php">
                  <div class="flex-wrap gap-14 mt-2">
                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]" />
                      <label class="md:ml-2">Sugar Free</label>
                    </div>

                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]" />
                      <label class="md:ml-2">Lactose Free</label>
                    </div>
                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]" />
                      <label class="md:ml-2">Gluten Free</label>
                    </div>
                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]" />
                      <label class="md:ml-2">Vegetarian</label>
                    </div>
                    <div>
                      <input type="checkbox" class="bg-[#D9D9D9]" />
                      <label class="md:ml-2">Vegen</label>
                    </div>
                    <div>
                      <input type="checkbox" checked="checked" class="bg-[#D9D9D9]" />
                      <label class="md:ml-2">other</label>
                    </div>
                  </div>
                </form>
              </div>

              <div class="mt-5">
                <p class="md:ml-5">please specify</p>
                <input class="rounded-full w-60 md:w-full" placeholder />
              </div>

              <div class="flex flex-wrap justify-between mt-5">
                <div>
                  <p class="md:ml-5">Room type</p>
                  <div class="rounded-lg">
                    <select class="rounded-full w-60 md:w-64">
                      <option value="volvo">select</option>
                      <option value="saab">Saab</option>
                      <option value="opel">Opel</option>
                      <option value="audi">Audi</option>
                    </select>
                  </div>
                </div>
                <div>
                  <p class="md:ml-5">Bad Type</p>
                  <div class="rounded-lg">
                    <select class="rounded-full w-60 md:w-64">
                      <option value="volvo">select</option>
                      <option value="saab">Saab</option>
                      <option value="opel">Opel</option>
                      <option value="audi">Audi</option>
                    </select>
                  </div>
                </div>
                <div>
                  <p class="md:ml-5">Rooming with</p>
                  <input class="rounded-full w-60 md:w-64" />
                </div>
              </div>
              <div class="mt-5">
                <input type="checkbox" class="bg-[#D9D9D9]" />
                <label class="ml-2">Please assign me a room partner</label>
              </div>

              <div class="mt-8">
                <p>Emergency Contact Information:</p>
              </div>
              <div class="flex flex-wrap justify-between mt-5">
                <div>
                  <p class="md:ml-5">Name*</p>
                  <input class="rounded-full w-60" />
                </div>
                <div>
                  <p class="md:ml-5">Mobile*</p>
                  <input class="rounded-full w-60" />
                </div>
                <div>
                  <p class="md:ml-5">Relationship*</p>
                  <input class="rounded-full w-60" />
                </div>
              </div>

              <div class="mt-5">
                <p>Notes:</p>
                <input class="rounded-md w-60 h-40 md:w-full md:h-28" />
              </div>

              <div class="md:flex">
                <div class="md:border-b-4 w-[38%] mb-3 border-[#D9D9D9]"></div>
                <div class="mt-5 font-bold text-black text-md">Information - Passenger #2</div>
                <div class="md:border-b-4 w-[38%] mb-3 border-[#D9D9D9]"></div>
                <!-- <div class="border-b-4 w-[40%] pb-12  border-[#D9D9D9]   ">
                </div>-->
              </div>

              <div class>
                <p class="md:ml-2 mt-5">Your Relationship*</p>
                <div class="md:flex">
                  <div class="rounded-lg">
                    <select class="rounded-full w-60 md:w-52">
                      <option value="volvo" class>Child</option>
                      <option value="saab">Saab</option>
                      <option value="opel">Opel</option>
                      <option value="audi">Audi</option>
                    </select>
                  </div>
                  <div class="md:pl-64">
                    <input type="checkbox" class="bg-[#D9D9D9]" />
                    <label class="ml-2">We use the same contact information and account for payment</label>
                  </div>
                </div>
              </div>
              <div class="text-gray-600 mt-3">
                <p>Please make sure the details is identical as it written in the passport</p>

                <div class="flex flex-wrap justify-between mt-5">
                  <div>
                    <p class="md:ml-2">Title</p>
                    <div class="rounded">
                      <select class="rounded-full w-60 md:w-40">
                        <option value="volvo"></option>
                        <option value="volvo">volvo</option>
                        <option value="saab">saab</option>
                        <option value="opel">opel</option>
                      </select>
                    </div>
                  </div>
                  <div>
                    <p class="md:ml-5">First Name*</p>
                    <input class="rounded-full w-60" />
                  </div>
                  <div>
                    <p class="md:ml-5">Middle Name</p>
                    <input class="rounded-full w-60" />
                  </div>
                  <div>
                    <p class="md:ml-5">Last Name*</p>
                    <input class="rounded-full w-60" />
                  </div>
                </div>
                <div class="flex flex-wrap justify-between mt-5">
                  <div>
                    <!-- <p class="ml-5">Gender*</p> -->
                    <!-- <input  class="rounded-full w-"> -->
                    <div>
                      <p class="md:ml-5">Gender*</p>
                      <div class="rounded">
                        <select class="rounded-full w-60 md:w-40">
                          <option value="volvo"></option>
                          <option value="saab">Male</option>
                          <option value="opel">Female</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="md:ml-5">Birth Date*</p>
                    <input type="date" class="rounded-full w-60" />
                  </div>

                  <div>
                    <p class="md:ml-5">Passport Number*</p>
                    <input class="rounded-full w-60" />
                  </div>
                  <div>
                    <p class="md:ml-5">Date of Expiry*</p>
                    <input type="date" class="rounded-full w-60" />
                  </div>
                </div>
                <div class="flex flex-wrap gap-[62px] mt-8">
                  <div>
                    <p class="md:ml-2">Country Code*</p>
                    <div class="rounded">
                      <select class="rounded-full w-60 md:w-40">
                        <option value="volvo"></option>
                        <option value="saab"></option>
                        <option value="opel"></option>
                      </select>
                    </div>
                  </div>
                  <div class>
                    <p class="md:ml-2">Mobile Number*</p>
                    <input class="rounded-full w-60" />
                  </div>
                  <div>
                    <p class="md:ml-2">Billing Address (inclode ZIP code)*</p>
                    <input class="rounded-full w-60 md:w-[140%]" />
                  </div>
                </div>

                <div class="mt-8">
                  <p>Food restrictions:</p>
                  <form action="/action_page.php">
                    <div class="flex-wrap gap-14 mt-2">
                      <div>
                        <input type="checkbox" class="bg-[#D9D9D9]" />
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
                  <p class="md:ml-5">please specify</p>
                  <input class="rounded-full w-60 md:w-full" placeholder />
                </div>

                <div class="flex flex-wrap justify-between mt-5">
                  <div>
                    <p class="md:ml-5">Room type</p>
                    <div class="rounded-lg">
                      <select class="rounded-full w-60 md:w-64">
                        <option value="volvo">select</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                      </select>
                    </div>
                  </div>
                  <div>
                    <p class="md:ml-5">Bad Type</p>
                    <div class="rounded-lg">
                      <select class="rounded-full w-60 md:w-64">
                        <option value="volvo">select</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                      </select>
                    </div>
                  </div>
                  <div>
                    <p class="md:ml-5">Rooming with</p>
                    <input class="rounded-full w-60 md:w-64" />
                  </div>
                </div>
                <div class="mt-5">
                  <input type="checkbox" class="bg-[#D9D9D9]" />
                  <label class="ml-2">Please assign me a room partner</label>
                </div>
                <div class="md:flex">
                  <div class="md:border-b-4 w-[38%] mb-3 border-[#D9D9D9]"></div>
                  <div class="mt-5 font-bold text-black text-md ml-2"> Information - Passenger #3</div>
                  <div class="md:border-b-4 w-[38%] mb-3 border-[#D9D9D9]"></div>
                  <!-- <div class="border-b-4 w-[40%] pb-12  border-[#D9D9D9]   ">
                  </div>-->
                </div>
                <div class>
                  <p class="md:ml-2 mt-5">Your Relationship*</p>
                  <div class="md:flex">
                    <div class="rounded-lg">
                      <select class="rounded-full w-60 md:w-52">
                        <option value="volvo" class>Child</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                      </select>
                    </div>
                    <div class="mt-2 md:pl-64">
                      <input type="checkbox" class="bg-[#D9D9D9]" />
                      <label
                        class="ml-2"
                      >We use the same contact information and account for payment</label>
                    </div>
                  </div>
                </div>
                <div class="flex flex-wrap justify-between mt-5">
                  <div>
                    <p class="md:ml-2">Title</p>
                    <div class="rounded">
                      <select class="rounded-full w-60 md:w-40">
                        <option value="volvo"></option>
                        <option value="volvo">volvo</option>
                        <option value="saab">saab</option>
                        <option value="opel">opel</option>
                      </select>
                    </div>
                  </div>
                  <div>
                    <p class="md:ml-5">First Name*</p>
                    <input class="rounded-full w-60" />
                  </div>
                  <div>
                    <p class="md:ml-5">Middle Name</p>
                    <input class="rounded-full w-60" />
                  </div>
                  <div>
                    <p class="md:ml-5">Last Name*</p>
                    <input class="rounded-full w-60" />
                  </div>
                </div>

                <div class="flex flex-wrap gap-[62px] mt-8">
                  <div>
                    <p class="md:ml-2">Country Code*</p>
                    <div class="rounded">
                      <select class="rounded-full w-60 md:w-40">
                        <option value="volvo"></option>
                        <option value="saab"></option>
                        <option value="opel"></option>
                      </select>
                    </div>
                  </div>
                  <div class>
                    <p class="md:ml-2">Mobile Number*</p>
                    <input class="rounded-full w-60" />
                  </div>
                  <div>
                    <p class="md:ml-2">e-Mail Address*</p>
                    <input class="rounded-full w-60 md:w-[174%]" />
                  </div>
                </div>
                
                <p
                  class="mt-5">• At the end of your registration process, the system will create a dedicated link for him so that he can</p>
                <p class="md:ml-4">log in and complete the registration</p>
              </div>

              <div class="flex">
                <Link
                  href="/custom-login"
                  class="flex rounded-full bg-[#014F99] w-60 p-2 mt-7 text-xs font-semibold justify-center text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >back</Link>
                <Link
                  href="/custom-login"
                  class="flex rounded-full bg-[#014F99] w-60 p-2 mt-7 text-xs font-semibold ml-[40%] md:ml-[80%] justify-center text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >next</Link>
              </div>
            </div>
          </div>
        </div>
        <div @click="toggleAccordion(3)" class="accordion-item">
          <div class="border-8 w-full rounded-md">
            <div class="accordion-title w-full flex bg-gray-200 gap-2">
              <img src="images/shopping.png" class="w-8" />
              Additional Services
            </div>
          </div>
        </div>
        <div v-show="activeIndex === 3" class="accordion-content">
          <h1 class="font-bold">Bike trip in the old city</h1>

          <div class="flex flex-wrap justify-between mt-5">
            <div>
              <p class="md:ml-5 text-[#797984]">Passenger Name</p>
              <div class="rounded-lg">
                <select class="rounded-full w-60 md:w-64 mt-2 text-[#9C9B9B]">
                  <option value="volvo">select</option>
                  <option value="saab">Saab</option>
                  <option value="opel">Opel</option>
                  <option value="audi">Audi</option>
                </select>
              </div>
            </div>
            <div>
              <p class="md:ml-5 text-[#797984]">Bike Type</p>
              <div class="rounded-lg">
                <select class="rounded-full w-60 md:w-64 mt-2 text-[#9C9B9B]">
                  <option value="volvo">select</option>
                  <option value="saab">Saab</option>
                  <option value="opel">Opel</option>
                  <option value="audi">Audi</option>
                </select>
              </div>
            </div>
            <div>
              <p class="md:ml-5 text-[#797984]">Height</p>
              <select class="rounded-full w-60 md:w-64 mt-2 text-[#9C9B9B]">
                <option value="volvo">160CM</option>
              </select>
            </div>
          </div>
          <div class="mt-5 md:ml-3">
            <input type="checkbox" class="bg-[#D9D9D9]" />
            <label class="ml-2 text-[#797984]">Not relevant</label>
          </div>
          <div class="flex flex-wrap justify-between mt-5">
            <div>
              <p class="md:ml-5 text-[#797984]">Passenger Name</p>
              <div class="rounded-lg">
                <select class="rounded-full w-60 md:w-64 mt-2 text-[#9C9B9B]">
                  <option value="volvo">select</option>
                  <option value="saab">Saab</option>
                  <option value="opel">Opel</option>
                  <option value="audi">Audi</option>
                </select>
              </div>
            </div>
            <div>
              <p class="md:ml-5 text-[#797984]">Bike Type</p>
              <div class="rounded-lg">
                <select class="rounded-full w-60 md:w-64 mt-2 text-[#9C9B9B]">
                  <option value="volvo">select</option>
                  <option value="saab">Saab</option>
                  <option value="opel">Opel</option>
                  <option value="audi">Audi</option>
                </select>
              </div>
            </div>
            <div>
              <p class="md:ml-5 text-[#797984]">Height</p>
              <select class="rounded-full w-60 md:w-64 mt-2 text-[#9C9B9B]">
                <option value="volvo">160CM</option>
              </select>
            </div>
          </div>
          <div class="mt-5 md:ml-3">
            <input type="checkbox" class="bg-[#D9D9D9]" />
            <label class="ml-2 text-[#797984]">Not relevant</label>
          </div>

          <div class="flex flex-wrap justify-between mt-5">
            <div>
              <p class="md:ml-5 text-[#797984]">Passenger Name</p>
              <div class="rounded-lg">
                <select class="rounded-full w-60 md:w-64 mt-2 text-[#9C9B9B]">
                  <option value="volvo">select</option>
                  <option value="saab">Saab</option>
                  <option value="opel">Opel</option>
                  <option value="audi">Audi</option>
                </select>
              </div>
            </div>
            <div>
              <p class="md:ml-5 text-[#797984]">Bike Type</p>
              <div class="rounded-lg">
                <select class="rounded-full w-60 md:w-64 mt-2 text-[#9C9B9B]">
                  <option value="volvo">select</option>
                  <option value="saab">Saab</option>
                  <option value="opel">Opel</option>
                  <option value="audi">Audi</option>
                </select>
              </div>
            </div>
            <div>
              <p class="md:ml-5 text-[#797984]">Height</p>
              <select class="rounded-full w-60 md:w-64 mt-2 text-[#9C9B9B]">
                <option value="volvo">160CM</option>
              </select>
            </div>
          </div>
          <div class="mt-5 md:ml-3">
            <input type="checkbox" class="bg-[#D9D9D9]" />
            <label class="ml-2 text-[#797984]">Not relevant</label>
          </div>

          <div class="flex">
            <Link
              href="/custom-login"
              class="flex rounded-full bg-[#014F99] w-60 p-2 mt-7 text-xs font-semibold justify-center text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >back</Link>
            <Link
              href="/custom-login"
              class="flex rounded-full bg-[#014F99] w-60 p-2 mt-7 text-xs font-semibold ml-[40%] md:ml-[80%] justify-center text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >next</Link>
          </div>
        </div>
        <!-- Confirmation Details -->
        <div @click="toggleAccordion(4)" class="accordion-item">
          <div class="border-8 w-full rounded-md">
            <div class="accordion-title w-full flex bg-gray-200 gap-2">
              <img src="images/icon.png" class="w-8" />
              Confirmation Details
            </div>
          </div>
        </div>
        <div v-show="activeIndex === 4" class="accordion-content">
          <div class="flex gap-14 items-center">
            <div class="text-[#797984]">
              <p>Your details:</p>
            </div>
            <div class="mt-14 ml-12 text-[#797984]">
              <p>Mr roi test (Male)</p>
              <p>roitest@test.com, +972-544285963</p>
              <p>Birth Date : 04-27-1975</p>
            </div>
            <div class="ml-7 text-[#797984]">
              <p>Passport Details:</p>
            </div> 
            <div class="mt-6 text-[#797984]">
              <p>032288144</p>
              <p>Expire On: 04-27-2030</p>
            </div>
          </div>
          <div class="flex gap-16 items-center">
            <div class="text-[#797984]">
              <p>room:</p>
            </div>
            <div class="mt-14 ml-24 text-[#797984]">
              <p>Double</p>
              <p>king size bed</p>
              <p>Rooming with : Sharon</p>
            </div>
            <div class="ml-36 text-[#797984]">
              <p>Food restrictions:</p>
            </div> 
            <div class="text-[#797984]">
              <p>No</p>
            </div>
          </div>
          <div class="flex gap-12 items-center">
            <div class="text-[#797984]">
              <p>Billing Address:</p>
            </div>
            <div class="mt-14 ml-7 text-[#797984]">
              <p>harel</p>
              <p>4253</p>
              <p>Israel</p>
            </div>
            <div class="ml-80 text-[#797984]">
              <p>Emergency info:</p>
            </div> 
            <div class="mt-6 text-[#797984]">
              <p>Name</p>
              <p>phoneMobile</p>
              <p>(Relationship)</p>
            </div>
          </div>
          <div class="flex gap-2 items-center">
            <div class="text-[#797984]">
              <p>Bike trip in the old city:</p>
              <p>Details:</p>
            </div>
            <div class="mt-8 text-[#797984]">
              <p>Electric Bicycle</p>
              <p>Height 180 cm</p>
              <p>Additional payment $50</p>
            </div>
          </div>
          <div class="left-2 md:top-20 md:left-20 flex justify-between md:mt-4 mt-2 p-3 border-b-4"></div>
          <div class="flex gap-8 items-center">
            <div class="text-[#797984]">
              <p>Sharon details:</p>
            </div>
            <div class="mt-14 ml-20 text-[#797984]">
              <p>Ms Sharon test (Female)</p>
              <p>roitest@test.com, +972-544285963</p>
              <p>Birth Date:04-27-1975</p>
            </div>
            <div class="ml-20 text-[#797984]">
              <p>Passport Details:</p>
            </div> 
            <div class="mt-6 text-[#797984]">
              <p>032288144</p>
              <p>Expire On:04-27-2030</p>
            </div>
          </div>
        </div>
        
          <!-- <div class="flex gap-40 items-center">
            <div class="flex text-[#797984]">
              <p>room:</p>
            </div>
            <div class="mt-14 text-[#797984]">
             
                <p>Double</p>
                <p>King size bed</p>
                <p>Rooming with : Sharon</p>
              
            </div>

            <div class="text-[#797984]">
              <p>Food restrictions:</p>
              <div class="ml-60 -mt-6">
                <p>No</p>
              </div>
            </div>
          </div>

          <div class="flex gap-80 items-center">
            <div class="text-[#797984] mt-10">
              <p>Billing Address:</p>
              <div class="ml-44 -mt-6">
                <p>harel</p>
                <p>4253</p>
                <p>Israel</p>
              </div>
            </div>

            <div class="text-[#797984] mt-10">
              <p>Emergency info:</p>
              <div class="ml-60 -mt-6">
                <p>Name</p>
                <p>phoneMobile</p>
                <p>Relationship</p>
              </div>
            </div>
          </div>

          <div class="flex justify-between">
            <div class="text-[#797984] mt-10">
              <p>Bike trip in the old city:</p>
            </div>
          </div>

          <div class="flex justify-between">
            <div class="text-[#797984]">
              <p>Details:</p>
              <div class="ml-44 -mt-6">
                <p>Electric Bicycle</p>
                <p>Height 180 cm</p>
                <p>Additional payment $50</p>
              </div>
            </div>
          </div>

          <div class="left-2 md:top-20 md:left-20 flex justify-between md:mt-8 mt-5 p-3 border-b-4"></div>
          
          <div class="flex gap-8 items-center mt-5">
            <div class="text-[#797984]">
              <p>Sharon details:</p>
              <div class="ml-44 -mt-6">
                <p>Ms Sharon test (Female)</p>
                <p> roitest@test.com,  +972-544285963</p>
                <p>Birth Date : 04-27-1975</p>
              </div>
            </div>

            <div>
              <div class="text-[#797984]">
                <p>Passport Details:</p>
                <div class="ml-60 -mt-6">
                  <p>032288144</p>
                  <p>Expire On: 04-27-2030</p>
                </div>
              </div>
            </div>
          </div>

          <div class="flex gap-40 items-center">
            <div class="text-[#797984] mt-10">
              <p>room:</p>
              <div class="ml-44 -mt-6">
                <p>Double</p>
                <p>King size bed</p>
                <p>Rooming with : Roi</p>
              </div>
            </div>

            <div class="text-[#797984] mt-10 ml-10">
              <p>Food restrictions:</p>
              <div class="ml-60 -mt-6">
                <p>No</p>
              </div>
            </div>
          </div>

          <div class="flex justify-between">
            <div class="text-[#797984] mt-10">
              <p>Bike trip in the old city:</p>
            </div>
          </div>

          <div class="flex justify-between">
            <div class="text-[#797984]">
              <p>Details:</p>
              <div class="ml-44 -mt-6">
                <p>Hardtail Mountain Bike</p>
                <p>Height 171 cm</p>
                <p>Additional payment $45</p>
              </div>
            </div>
          </div>
          
          <div class="left-2 md:top-20 md:left-20 flex justify-between md:mt-8 mt-5 p-3 border-b-4"></div>

          <div class="flex gap-8 items-center mt-5">
            <div class="text-[#797984]">
              <p>Friend details:</p>
              <div class="ml-44 -mt-6">
                <p>Ms Friend test (Female)</p>
                <p>Friend@test.com,  +972-544285963</p>
              </div>
            </div>
          </div>

          <div class="flex justify-between">
            <div class="text-[#797984] mt-10">
              <p>Bike trip in the old city:</p>
            </div>
          </div>

          <div class="flex justify-between">
            <div class="text-[#797984]">
              <p>Details:</p>
              <div class="ml-44 -mt-6">
                <p>Hardtail Mountain Bike</p>
                <p>Height 171 cm</p>
                <p>Additional payment $45</p>
              </div>
            </div>
          </div>
          <p class="mt-8">•After your payment, the system will create a dedicated link for him so that he can enter and complete</p>
          <p class="ml-2">the registration with the information and if he does not complete the registration in the next 72 hours,</p> 
          <p class="ml-2"> we will not be able to reserve a place for him</p>
          <div class="flex">
                <Link
                  href="/custom-login"
                  class="flex rounded-full bg-[#014F99] w-60 p-2 mt-7 text-xs font-semibold justify-center text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >back</Link>
                <Link
                  href="/custom-login"
                  class="flex rounded-full bg-[#014F99] w-60 p-2 mt-7 text-xs font-semibold ml-[80%] justify-center text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >next</Link>
              </div>

          </div> -->

        <div @click="toggleAccordion(5)" class="accordion-item">
          <div class="border-8  w-full rounded-md">
            <div class="accordion-title w-full flex bg-gray-200 gap-2">
              <img src="images/cardicon.png" class="w-8" />
              payment
            </div>
          </div>
        </div>

        <div v-show="activeIndex === 5" class="accordion-content">
          <div>
            <div class="flex gap-4">
              <h1 class="text-[#797984]">Select currency to pay</h1>
              <div class="rounded-lg top-4">
                <select class="rounded-full w-32 text-[#797984]">
                  <option value="volvo">USD</option>
                  <option value="saab">Saab</option>
                  <option value="opel">Opel</option>
                  <option value="audi">Audi</option>
                </select>
              </div>
            </div>
            <div>
            </div>
            <div class="mt-8">
                <table class="table-auto min-w-full">
                  <thead>
                    <tr class="bg-red-700">
                      <th
                        class="w-[40%] sm:w-[15%] md:w-[20%] lg:w-[40%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >Product</th>
                      <th
                        class="w-[30%] sm:w-[20%] md:w-[10%] lg:w-[30%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >Amount</th>
                      <th
                        class="w-[30%] sm:w-[15%] md:w-[10%] lg:w-[30%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td
                        class="w-[40%] sm:w-[30%] md:w-[40%] lg:w-[40%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >Holy Land Experience</td>
                      <td
                        class="w-[30%] sm:w-[40%] md:w-[30%] lg:w-[30%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >3,500$ X 2</td>
                      <td
                        class="w-[30%] sm:w-[30%] md:w-[30%] lg:w-[30%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >7,000$</td>
                    </tr>
                    <tr>
                      <td
                        class="w-[40%] sm:w-[30%] md:w-[40%] lg:w-[40%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >Extra Conpigorsin</td>
                      <td
                        class="w-[30%] sm:w-[40%] md:w-[30%] lg:w-[30%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >0</td>
                      <td
                        class="w-[30%] sm:w-[30%] md:w-[30%] lg:w-[30%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >0$</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="mt-12">
                <h1>Additional Activities/Services</h1>
              </div>
              <div class="mt-8">
                <table class="table-auto min-w-full">
                  <thead>
                    <tr class="bg-red-700">
                      <th
                        class="w-[40%] sm:w-[15%] md:w-[20%] lg:w-[40%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >Product</th>
                      <th
                        class="w-[30%] sm:w-[20%] md:w-[10%] lg:w-[30%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >Amount</th>
                      <th
                        class="w-[30%] sm:w-[15%] md:w-[10%] lg:w-[30%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td
                        class="w-[40%] sm:w-[30%] md:w-[40%] lg:w-[40%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >Bike trip in old city - Hardtail Mountain Bike</td>
                      <td
                        class="w-[30%] sm:w-[40%] md:w-[30%] lg:w-[30%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >45$ X 1</td>
                      <td
                        class="w-[30%] sm:w-[30%] md:w-[30%] lg:w-[30%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >45$</td>
                    </tr>
                    <tr>
                      <td
                        class="w-[40%] sm:w-[30%] md:w-[40%] lg:w-[40%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >Bike trip in old city - Electric Bicycle</td>
                      <td
                        class="w-[30%] sm:w-[40%] md:w-[30%] lg:w-[30%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >50$ X 1</td>
                      <td
                        class="w-[30%] sm:w-[30%] md:w-[30%] lg:w-[30%] border-2 border-black bg-gray-200 md:px-4 pr-2 py-2"
                      >50$</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="mt-5">
                <h1>Total payment: 7,095$</h1>
                <p class="mt-5">Deposit payment: 1000$</p>
              </div>
              <div class="flex mt-10 ml-3">
                <input type="checkbox" class="bg-[#379BD6] mt-2" />
                <label class="ml-2 text-[#797984]">Online Payment</label>
                <input type="checkbox" class="bg-[#797984] ml-[23%] mt-2" />
                <label class="ml-2 text-[#797984]">Payment Form</label>
              </div>
              <div class="flex mt-10 ml-3">
                <input type="checkbox" class="bg-[#379BD6] mt-2" />
                <label class="ml-2 text-[#797984]">Pay deposite</label>
                <input type="checkbox" class="bg-[#797984] ml-[23%] md:ml-[26%] mt-2" />
                <label class="ml-2 text-[#797984]">Pay full amound</label>
              </div>
           
          <div class="flex ">
            <Link href="/custom-login"
              class=" flex rounded-full bg-[#014F99] w-60 p-2 mt-7  text-xs font-semibold  justify-center  text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            back</Link>
            <Link href="/custom-payment"
              class=" flex rounded-full bg-[#014F99] w-60 p-2 mt-7 text-xs font-semibold ml-[80%]  justify-center text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Pay Now</Link>
          </div>
          
        </div>
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

table,
th,
td {
  border: 1px solid white;
  border-collapse: collapse;
}
th,
td {
  background-color: #f1eeee;
}
</style>
