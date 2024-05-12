

<template>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="email" v-model="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
            <small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" v-model="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="text" v-model="phone" class="form-control" id="exampleInputPassword1" placeholder="Phone">

        </div>
        <button type="submit" @click.prevent="addStudent" class="btn btn-primary">Submit</button>
    </form>
</template>
<script>
import axios from "axios";

export default {
    name:'AddStudent',
    data()
    {
        return{
            dataDetails:{},
            apiUrl:'/api/add-student',
            name:'',
            email:'',
            phone:''
        }
    },
    methods:{
        async addStudent(event)
        {

             const req = await axios.post(this.apiUrl,{name:this.name,email:this.email,phone:this.phone})
             this.dataDetails = req.data
            alert(this.dataDetails.msg)
            this.name = this.email =this.phone = ''
        }
    },

}
</script>
<style scoped>

</style>
