<template>
    <mainLayout audioSource="./prompts/whistle.mp3">
    <main class="">
       <h1>Audio Test Page</h1>
    </main>
    </mainLayout>
</template>

<script>
import mainLayout from "@/layouts/main.vue";

export default {
    name: 'HomeSuccess',
    components: {
        mainLayout
    },
    data() {
        return {
            isActive: false,
            activeComponents : ''
        }
    },
    methods:{
        submit()
        {
            this.$router.push({name:'menu'})
        }
    }
}


</script>

<style>
</style>
