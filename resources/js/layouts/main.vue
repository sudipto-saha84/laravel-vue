<template>

    <div>
    <clientHeader />

        <slot/>

    <clientFooter :autoplay="true" :audioSource="audioSource"/>

    </div>

</template>

<script>
import clientHead from '../views/includes/head.vue'
import clientHeader from '../views/includes/header.vue'
import clientFooter from '../views/includes/footer.vue'
export default {
    components: {
        clientHead, clientHeader,clientFooter
    },
    props: {
        audioSource: {
            type: String,
            required: true
        },
        showControls: {
            type: Boolean,
            default: true
        }
    },
    mounted() {
        console.log('layout called')
    },
    metaInfo: {
        script: [{ src: "https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js", async: true, defer: true }],
    }
}
</script>
