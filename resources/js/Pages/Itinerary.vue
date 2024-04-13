<template>
    <CustomLayout>
        <HomePage />

        <HeroCardHotel />
        <div class="mt-[55rem] md:mt-0">


            <div>
                <div class="md:ml-[40%] p-5">
                    <div class="mb-10">
                        <div class="md:flex flex-row gap-[41%]">
                            <h1 class="md:text-3xl  text-2xl text-center md:ml-40   top-[60%] mt-0">Day to Day itinerary
                            </h1>
                            <button
                                class="rounded-full bg-[#014F99] w-26 h-8 mt-5  md:w-28 md:h-8 md:mt-1 font-extrabold p-2 text-xs flex  gap-2  text-white">
                                <img src="images/download.png" class="">
                                <a href="/Gordon.pdf" target="_blank">Pdf Version</a>
                            </button>

                        </div>
                    </div>
                    <div class="flex flex-col mt-5 ">
                        <div class="flex">
                            <div class="border-2 border-[#014F99] h-fit w-fit p-4 md:p-0 md:h-24 md:w-28 rounded-3xl text-center">
                                <div class="text-[#014F99] font-bold text-3xl">
                                    18
                                </div>
                                <div class="text-[#014F99] mt-0 font-bold text-2xl">
                                    NOV
                                </div>
                                <div class="text-[#379BD6] font-bold text-lg">
                                    MON
                                </div>

                            </div>
                            <div class="ml-8 flex flex-col text-[#797984]">
                                We board our flight to Israel from ATL airport
                                <div class="text-[#014F99]">
                                    .Dinner
                                </div>
                            </div>

                        </div>
                        <div class="flex mt-32">
                            <div class="border-2 border-[#014F99] h-fit w-fit p-4 md:p-0 md:h-24 md:w-28 rounded-3xl text-center ">
                                <div class="text-[#014F99] font-bold text-3xl">
                                    19
                                </div>
                                <div class="text-[#014F99] mt-0 font-bold text-2xl">
                                    NOV
                                </div>
                                <div class="text-[#379BD6] font-bold text-lg">
                                    TUE
                                </div>

                            </div>
                            <div class="ml-8  text-[#797984]">
                                <h1 class="text-[#797984] font-extrabold">DAY 2 - Arrival and transfer to dinner and
                                    overnight at Tel aviv</h1>
                                <p>Welcome to Ben Gurion International Airport where you will be met by</p>
                                <p>your guide and driver. Transfer to the Mediterranean coastal city of </p>
                                <p>Netanya/TLV for check-in, opening dinner and overnight.</p>
                                <div class="text-[#014F99]">
                                    <p>. Breakfast</p>
                                </div>
                                <div class="text-[#014F99]">
                                    <p>. Dinner</p>
                                </div>
                            </div>

                        </div>
                        <div class="flex mt-20">
                            <div class="border-2 border-[#014F99] h-fit w-fit p-4 md:p-0 md:h-24 md:w-28 rounded-3xl text-center ">
                                <div class="text-[#014F99] font-bold text-3xl">
                                    20
                                </div>
                                <div class="text-[#014F99] mt-0 font-bold text-2xl">
                                    NOV
                                </div>
                                <div class="text-[#379BD6] font-bold text-lg">
                                    wed
                                </div>

                            </div>
                            <div class="ml-8 text-[#797984]">
                                <h1 class="text-[#797984] font-extrabold">DAY 3 - Coastal Plain & Galilee</h1>
                                <p v-for="(paragraph, index) in visibleParagraphs" :key="index">{{ paragraph }}</p>
                                <a href="#" @click.prevent="toggleShowMore" class="underline underline-offset-1">{{
                                    showMore ? 'Show Less' : 'Show More' }}</a>
                                <div class="text-[#014F99]">
                                    <p>. Breakfast</p>
                                    <p>. Dinner</p>
                                </div>
                            </div>

                        </div>
                        <div class="flex mt-20">
                            <div class="border-2 border-[#014F99] h-fit w-fit p-4 md:p-0 md:h-24 md:w-28 rounded-3xl text-center ">
                                <div class="text-[#014F99] font-bold text-3xl">
                                    21
                                </div>
                                <div class="text-[#014F99] mt-0 font-bold text-2xl">
                                    NOV
                                </div>
                                <div class="text-[#379BD6] font-bold text-lg">
                                    THU
                                </div>

                            </div>
                            <div class="ml-8 text-[#797984]">
                                <h1 class="text-[#797984] font-extrabold">DAY 4 - Galilee</h1>
                                <p v-for="(paragraph, index) in visibleParagraphs4" :key="index">{{ paragraph }}</p>
                                <a href="#" @click.prevent="toggleShowMore4" class="underline underline-offset-1">{{
                                    showMore4 ? 'Show Less' : 'Show More' }}</a>
                                <div class="text-[#014F99]">
                                    <p>. Breakfast</p>
                                    <p>. Dinner</p>
                                </div>
                            </div>

                        </div>
                        <div class="flex mt-20">
                            <div class="border-2 border-[#014F99] h-fit w-fit p-4 md:p-0 md:h-24 md:w-28 rounded-3xl text-center ">
                                <div class="text-[#014F99] font-bold text-3xl">
                                    22
                                </div>
                                <div class="text-[#014F99] mt-0 font-bold text-2xl">
                                    NOV
                                </div>
                                <div class="text-[#379BD6] font-bold text-lg">
                                    FRI
                                </div>

                            </div>
                            <div class="ml-8 text-[#797984]">
                                <h1 class="text-[#797984] font-extrabold">DAY 5 - Our Way to Jerusalem</h1>
                                <p v-for="(paragraph, index) in visibleParagraphs5" :key="index">{{ paragraph }}</p>
                                <a href="#" @click.prevent="toggleShowMore5" class="underline underline-offset-1">{{
                                    showMore5 ? 'Show Less' : 'Show More' }}</a>
                                <div class="text-[#014F99]">
                                    <p>. Breakfast</p>
                                    <p>. Dinner</p>
                                </div>
                            </div>

                        </div>

                        <div class="flex mt-20">
                            <div class="border-2 border-[#014F99] h-fit w-fit p-4 md:p-0 md:h-24 md:w-28 rounded-3xl text-center ">
                                <div class="text-[#014F99] font-bold text-3xl">
                                    23
                                </div>
                                <div class="text-[#014F99] mt-0 font-bold text-2xl">
                                    NOV
                                </div>
                                <div class="text-[#379BD6] font-bold text-lg">
                                    SAT
                                </div>

                            </div>
                            <div class="ml-8 text-[#797984]">
                                <h1 class="text-[#797984] font-extrabold">DAY 6 - Bethlehem & Jerusalem</h1>
                                <p v-for="(paragraph, index) in visibleParagraphs6" :key="index">{{ paragraph }}</p>
                                <a href="#" @click.prevent="toggleShowMore6" class="underline underline-offset-1">{{
                                    showMore6 ? 'Show Less' : 'Show More' }}</a>
                                <div class="text-[#014F99]">
                                    <p>. Breakfast</p>
                                    <p>. Dinner</p>
                                </div>
                            </div>

                        </div>

                        <div class="flex mt-20">
                            <div class="border-2 border-[#014F99] h-fit w-fit p-4 md:p-0 md:h-24 md:w-28 rounded-3xl text-center ">
                                <div class="text-[#014F99] font-bold text-3xl">
                                    24
                                </div>
                                <div class="text-[#014F99] mt-0 font-bold text-2xl">
                                    NOV
                                </div>
                                <div class="text-[#379BD6] font-bold text-lg">
                                    SUN
                                </div>

                            </div>
                            <div class="ml-8 text-[#797984]">
                                <h1 class="text-[#797984] font-extrabold">DAY 7 - Masada & Dead Sea</h1>
                                <p v-for="(paragraph, index) in visibleParagraphs7" :key="index">{{ paragraph }}</p>
                                <a href="#" @click.prevent="toggleShowMore7" class="underline underline-offset-1">{{
                                    showMore7 ? 'Show Less' : 'Show More' }}</a>
                                <div class="text-[#014F99]">
                                    <p>. Breakfast</p>
                                    <p>. Dinner</p>
                                </div>
                            </div>

                        </div>

                        <div class="flex mt-20">
                            <div class="border-2 border-[#014F99] h-fit w-fit p-4 md:p-0 md:h-24 md:w-28 rounded-3xl text-center ">
                                <div class="text-[#014F99] font-bold text-3xl">
                                    25
                                </div>
                                <div class="text-[#014F99] mt-0 font-bold text-2xl">
                                    NOV
                                </div>
                                <div class="text-[#379BD6] font-bold text-lg">
                                    MON
                                </div>

                            </div>
                            <div class="ml-8 text-[#797984]">
                                <h1 class="text-[#797984] font-extrabold">DAY 8 - Jerusalem Old City</h1>
                                <p v-for="(paragraph, index) in visibleParagraphs8" :key="index">{{ paragraph }}</p>
                                <a href="#" @click.prevent="toggleShowMore8" class="underline underline-offset-1">{{
                                    showMore8 ? 'Show Less' : 'Show More' }}</a>
                                <div class="text-[#014F99]">
                                    <p>. Breakfast</p>
                                    <p>. Dinner</p>
                                </div>
                            </div>

                        </div>

                        <div class="flex mt-20">
                            <div class="border-2 border-[#014F99] h-fit w-fit p-4 md:p-0 md:h-24 md:w-28 rounded-3xl text-center ">
                                <div class="text-[#014F99] font-bold text-3xl">
                                    26
                                </div>
                                <div class="text-[#014F99] mt-0 font-bold text-2xl">
                                    NOV
                                </div>
                                <div class="text-[#379BD6] font-bold text-lg">
                                    TUE
                                </div>

                            </div>
                            <div class="ml-8  text-[#797984]">
                                <h1 class="text-[#797984] font-extrabold">DAY 9 - Departure</h1>
                                <p>We will head to Ben Gurion airport, say goodbye to our guide, and board our flight back home to <br> USA </p>

                                <div class="text-[#014F99]">
                                    <p>. Breakfast</p>
                                </div>

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
import { ref, computed } from 'vue';

const paragraphs = ref([
    "Following the Mediterranean Coast, we arrive first at Caesarea Maritima, built by King Herod.",
    "Here Cornelius was converted and Peter was imprisoned. We will see the Roman Theater,",
    " aqueduct, and palace of King Herod, as well as a byzantine church. Climbing in to the Carmel",
    " Mountain Range we arrive at the Muchraka where Elijah challenged the prophets of Ba'al. Our",
    "next stop is Tel Megiddo, or Armageddon, where we will tour the antiquities and see the",
    "significance of this site for the end of days. Continuing in to the Lower Galil we will visit",
    "Nazareth, stopping at Mount Precipice, before driving through the town of Cana. We end the",
    "day at our hotel in Tiberias for dinner and overnight",
    "Dinner and overnight are at the Sea of Galilee",
]);
const showMore = ref(false);
const maxVisibleParagraphs = 3;

const toggleShowMore = () => {
    showMore.value = !showMore.value;
};

const visibleParagraphs = computed(() => {
    return showMore.value ? paragraphs.value : paragraphs.value.slice(0, maxVisibleParagraphs);
});

const paragraphs4 = ref([
    "This morning we drive north to Caesarea Phillipi, known in the ancient world also as Paneas, and",
    '"today as Banias, where Peter declared Jesus to be the Messiah, "And Jesus said thou art Peter"',
    '"upon this rock I will build my church."(Matt.16-17-18).You will see the remains of the pagan site"',
    "that existed here, against the backdrop of which these events occurred. We continue to Tel Dan",
    "to view the antiquities there from the biblical kingdom of Israel. We visit the Mount of",
    "Beatitudes, the traditional site of the Sermon on the Mount, where we can appreciate the",
    "beautiful surroundings and views unchanged since the time of Jesus delivering his seminal",
    "sermon. After an optional lunch of St. Peter's Fish, the next stop is Tabgha, where Jesus",
    "preformed the miracle of the feeding of the 5,000, and a visit to the chapel commemorating the",
    "primacy of Peter. We continue to Capernaum or Kfar Nahum, where Jesus spent much of his",
    "ministry. We will view the house of Peter and the numerous churches that were built on top of it,",
    "as well as the ancient synagogue believed by many to have been built atop the synagogue that",
    "Jesus would have preached in. We stop at the ongoing excavations at Magdala, home of Mary",
    "Magdalene with its Second Temple Period synagogue, before finishing the day at the Yardenit",
    "Baptismal Site where those who wish can emerge themselves in the waters of the Jordan River.",
    "We return to our hotel for dinner.",
]);
const showMore4 = ref(false);
const maxVisibleParagraphs4 = 3;

const toggleShowMore4 = () => {
    showMore4.value = !showMore4.value;
};

const visibleParagraphs4 = computed(() => {
    return showMore4.value ? paragraphs4.value : paragraphs4.value.slice(0, maxVisibleParagraphs4);
});

const paragraphs5 = ref([
    "We start the day with a spectacular boat ride on the Sea of Galilee and a visit to Ginosar where",
    "we will see the remains of a fisherman's vessel discovered on the shores of the Sea of Galilee",
    "dating from the time of Jesus. Leaving the Sea of Galilee behind us, we drive through the Jordan",
    "River Valley to Beit Shean built where the Jezreel Valley meets the Jordan Valley, and tour the",
    "extensive Roman-Byzantine remains of the city that was once part of the Decapolis. Continuing",
    "through the valley, we enter the Judean Desert where we visit Jericho, one of the oldest cities in",
    "the world. Stop to see Zacchaeus' Sycamore tree and proceed for a view of Mt. of Temptation",
    "(cable car is not included). Visit the Tel of Ancient Jericho where 25 archaeological levels have",
    "been discovered. Climb along the ancient route up to Jerusalem, stopping for a panoramic view",
    "of the city as we enter it from the east atop the Mount of Olives.",
    "Drive to our hotel in Jerusalem for dinner and overnight",
]);
const showMore5 = ref(false);
const maxVisibleParagraphs5 = 3;

const toggleShowMore5 = () => {
    showMore5.value = !showMore5.value;
};

const visibleParagraphs5 = computed(() => {
    return showMore5.value ? paragraphs5.value : paragraphs5.value.slice(0, maxVisibleParagraphs5);
});

const paragraphs6 = ref([
    "After breakfast we will drive to the city of Bethlehem where we will walk through Manger Square,",
    "to visit the Church of Nativity, the oldest Church in the Holy Land; admire the ancient limestone",
    "columns and remains of mosaic floors; descend to the Grotto of Nativity, where a silver star in the",
    "floor marks the spot where Christ is believed to have been born. Proceed to the Church of the",
    "Milk Grotto where the Virgin Mary nursed baby Jesus and according to tradition,a drop of her milk ",
    "spilt and turned the stones white. Next, visit Shepherds' field. After lunch, we return to Jerusalem",
    "where we will visit the Israel Museum including the Dead Sea Scrolls housed in the iconic Shrine",
    "of the Book and the impressive model of Jerusalem from the Second Temple Period. We will see the ",
    "Knesset,Israel's parliament building and the Supreme Court building. We end the day at the Garden ",
    "Tomb also known as Gordon's Calvary, believed by Protestants to be the true place of The Crucifixion,",
    "burial, and The Resurrection of Jesus; here we will see Calvary and Jesus' burial tomb and take communion.",
    "Return to hotel for dinner and overnight.",
]);
const showMore6 = ref(false);
const maxVisibleParagraphs6 = 3;

const toggleShowMore6 = () => {
    showMore6.value = !showMore6.value;
};

const visibleParagraphs6 = computed(() => {
    return showMore6.value ? paragraphs6.value : paragraphs6.value.slice(0, maxVisibleParagraphs6);
});

const paragraphs7 = ref([
    '"We will spend today exploring the Judean Desert. We will pass the "Inn of the Good Samaritan"',
    "on the ancient route pilgrims would have followed to Jerusalem,on our way to the shores of the",
    " Dead Sea; the lowest point on earth. Following the coast of the Dead Sea, we will arrive at",
    "Masada, the tabletop fortress built by King Herod and used by Jewish Zealots for their last stand",
    "against the Roman Empire. Having toured the site we will continue to the desert oasis of Ein Gedi,",
    "prominent in King Saul's pursuit of the young David. Following lunch, you are invited to take a",
    "short float in the mineral-rich lake of the Dead Sea, before continuing to Qumran where an ancient",
    "Jewish sect chose to live at the time of Jesus and where the Dead Sea Scrolls were discovered.",
    "Return to Jerusalem for dinner and overnight",
]);
const showMore7 = ref(false);
const maxVisibleParagraphs7 = 3;

const toggleShowMore7 = () => {
    showMore7.value = !showMore7.value;
};

const visibleParagraphs7 = computed(() => {
    return showMore7.value ? paragraphs7.value : paragraphs7.value.slice(0, maxVisibleParagraphs7);
});

const paragraphs8 = ref([
    "We start the morning on top of the Mount of Olives, following the Palm Sunday route down the",
    "mountain walking in the footsteps of Jesus. Coming to the Garden of Gethsemane, we will have",
    "some private time in the Garden before entering into the Old City of Jerusalem through St.",
    "Stephen's Gate also known as the Lion's Gate. We will visit the Pools of Bethesda and follow",
    "some of the Stations of the Cross along the Via Dolorosa ending in the Church of the Holy",
    "Sepulcher. We continue to the area surrounding Mount Moriah where we will visit the Western",
    "Wall and the Ophel Archaeological Park and Museum with remains of the city streets that Jesus",
    "would have walked on, as well as structures dating back to the times of King Solomon. We visit",
    "the City of David and Hezekiah's Tunnel ending at the Pool of Siloam, before ascending Mount",
    "Zion to visit the Upper Room, the Room of the Last Supper.",
    "Return to hotel for dinner and overnight.", 
]);
const showMore8 = ref(false);
const maxVisibleParagraphs8 = 3;

const toggleShowMore8 = () => {
    showMore8.value = !showMore8.value;
};

const visibleParagraphs8 = computed(() => {
    return showMore8.value ? paragraphs8.value : paragraphs8.value.slice(0, maxVisibleParagraphs8);
});
</script>
