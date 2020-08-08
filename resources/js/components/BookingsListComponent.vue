<template>
    <div class="grid grid-cols-1 lg:grid-cols-12 row-gap-10 xl:row-gap-20 lg:col-gap-20 xl:col-gap-8" >
        <div class="lg:col-span-5 xl:col-span-3" v-for="(booking, index) in bookings" :key="booking.id" :class="index % 2 == 0 ? 'xl:col-start-3' : 'xl:col-start-7'">
            <p class="text-gray-500 tracking-widest-2"><span v-if="booking.id < 10">0</span>{{ booking.id }}</p>
            <p class="text-lg mt-2 text-black">{{ booking.name }}</p>
            <p class="text-lg mt-2 text-black">{{ booking.day_booked | moment("MMM DD YYYY") }}</p>
            <p class="text-lg mt-2 text-black">{{ [booking.time_booked, "k:mm:ss"] | moment("h:mm a") }}</p>
            <p class="mt-2 xl:mt-12 opacity-75">{{ booking.message }}</p>
        </div>
    </div>

</template>

<script>
import { EventBus } from "../event-bus.js";  
    export default {        
        mounted() {
            EventBus.$on("bookings-updated", Count=> {    
                axios.get("/bookings")
                .then(response => {
                    this.bookings = [...response.data];
                })    
            });    

            axios.get("/bookings")
                .then(response => {
                    this.bookings = [...response.data];
                })
        },
        data() {            
            return {
                bookings: []
            }
        }
    }
</script>
