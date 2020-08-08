<template>
<div>
    <modal-component v-if="showModal" @close="showModal = false">
    <h3 slot="header">Submitting Booking...</h3>
    <div slot="body" class="lds-dual-ring"></div>
    </modal-component>

    <form method="POST" @submit="placeBooking" class="flex flex-col max-w-3xl mx-auto xl:mx-0">
        <slot></slot>
        <label for="name" class="sr-only">Name</label>
        <input type="text" name="name" v-model="name" class="block border border-black py-3 pl-3 rounded text-sm w-full placeholder-black" placeholder="Your Name" required>
        <div class="my-5 grid grid-cols-2 col-gap-8">
            <div>
                <label for="date" class="sr-only">Date Booking</label>
                <input type="date" name="date" v-model="dayPicked" class="py-3 w-full rounded bg-white border border-black pl-3 text-sm placeholder-black"
                placeholder="Pick a day" required>
            </div>            
            <div>
                <label for="time" class="sr-only">Time Booking</label>
                <input type="time" min="09:00" max="17:30" name="time" v-model="timePicked" class="py-3 w-full rounded bg-white border border-black pl-3 text-sm placeholder-black" placeholder="Pick a Time" required>
            </div>
        </div>                                
        <label for="message" class="sr-only">Your Message</label>
        <textarea name="message" v-model="message" cols="30" rows="5" class="border border-black rounded pl-3 py-3 text-sm placeholder-black" placeholder="Your Message" required></textarea>
        <button type="submit" class="mt-6 px-16 py-2 self-start text-sm border border-transparent bg-black text-white rounded hover:bg-gray-500 hover:text-black mx-auto xl:mx-0">Place Booking</button>
    </form>
</div>
   
</template>

<script>
import { EventBus } from "../event-bus.js";  

const sleep = (milliseconds) => {
  return new Promise(resolve => setTimeout(resolve, milliseconds))
}

    export default {
        mounted() {
        },
        data()
        {
            return {
                showModal: false,
                name: '',
                dayPicked: '',
                timePicked: '',
                message: '',
                validationErrors: ''
            };
        },
        methods: {
            
            placeBooking(e)
            {
                e.preventDefault();
                let currentObj = this;
                currentObj.showModal = true;
                document.body.classList.add("overflow-hidden");

                sleep(5000).then(() =>
                {
                    axios.post('/bookings', {
                    name: currentObj.name,
                    dayPicked: currentObj.dayPicked,
                    timePicked: currentObj.timePicked,
                    message: currentObj.message
                    })
                    .then(response => {
                        currentObj.validationErrors = null;

                        currentObj.name = '';
                        currentObj.dayPicked = '';
                        currentObj.timePicked = '';
                        currentObj.message = '';

                        currentObj.showModal = false;
                        document.body.classList.remove("overflow-hidden");

                        EventBus.$emit("bookings-updated", this.Count);
                    })
                    .catch(e => {
                        currentObj.showModal = false;
                        document.body.classList.remove("overflow-hidden");
                        currentObj.validationErrors = e.response.data.errors;
                        console.log(e.response.data.errors);
                    })
                });               
            }
        }
    }
</script>
