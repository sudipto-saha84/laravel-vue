<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<!--        <a class="navbar-brand" href="#">Navbar w/ text</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" @click.prevent="setComponents('home')">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click="setComponents('details')">View Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @click.prevent="setComponents('add')">Add Student</a>
                </li>
            </ul>
            <span class="navbar-text">

    </span>
        </div>
    </nav>
    <div v-show="activeComponents==='add'">
        <AddStudent />
    </div>
    <div v-show="activeComponents==='details'">
        <StudentList />
    </div>
</template>

<script>
import AddStudent from "@/components/AddStudent.vue";
import StudentList from "@/components/StudentList.vue";

export default {
    name: 'App',
    components: {
        AddStudent, StudentList
    },
    data() {
        return {
            isActive: false,
            activeComponents : ''
        }
    },
    methods:{
        setComponents(name)
        {
            this.activeComponents = name
        }
    }
}

</script>


<style scoped>

</style>
