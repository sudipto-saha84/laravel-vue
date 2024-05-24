<template>
    <clientHeader />
    <main class="">
        <div class="container">

            <h1 class="text-blue font-bold text-2xl leading-7 lg:text-4xl lg:leading-10 uppercase text-center mb-10">Welcome to prime bank<br/> Visual IVR Service</h1>

            <div class="max-w-sm mx-auto">
                <div id="toast-undo" class="flex items-center w-full p-4 mb-5 text-white bg-green rounded-md shadow" role="alert">
                    <div class="text-sm font-normal">
                        Success!Auth Link Generate Successfully.
                    </div>
                    <div class="flex items-center ms-auto space-x-2 rtl:space-x-reverse">
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-undo" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" @click="submit" class="text-white bg-blue hover:bg-blue/85 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm lg:text-lg w-auto px-10 py-2.5 text-center">Submit</button>
                </div>
            </div>

        </div>
    </main>

</template>

<script>
import clientHeader from '../views/includes/header.vue'

export default {
    name: 'HomeSuccess',
    components: {
        clientHeader
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
