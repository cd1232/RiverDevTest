<template>
<div class="modal-mask flex">
    <div class="bg-white mx-auto my-auto px-10 py-10 rounded">
        <div class="flex flex-col justify-center">
                <div class="text-center">
                    <slot name="header">
                    </slot>
                </div>

                <div class="flex justify-center">
                    <slot name="body">
                    </slot>
                </div>
        </div>      
    </div>
</div>
</template>

<script>
import { EventBus } from "../event-bus.js";  

    export default {
        mounted() {
        }
    }
</script>
