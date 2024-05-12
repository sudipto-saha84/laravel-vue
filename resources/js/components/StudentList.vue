
<template>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(data,index) in dataDetails">
            <th scope="row">{{index+1}}</th>
            <td>{{ data.name}}</td>
            <td>{{ data.email }}</td>
            <td>{{data.phone}}</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
import axios from "axios";

export default {
    name:'StudentList',
    data()
    {
        return{
            dataDetails:{},
            apiUrl:'/api/get-student',
        }
    },
    methods:{
        async getData()
        {
            const req = await axios.get(this.apiUrl)
            this.dataDetails = req.data
        }   ,
        async init()
        {
            await this.getData()
        }
    },
    mounted() {
        this.init()
    }
}
</script>

<style scoped>

</style>
