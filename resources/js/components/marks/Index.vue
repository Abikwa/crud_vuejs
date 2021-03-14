<template>
    <div>
        <h2 class="text-center">Marks </h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name mark</th>
                <th>Detail</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="mark in marks" :key="mark.id">
                <td>{{ mark.id }}</td>
                <td>{{ mark.name }}</td>
                <td>{{ mark.detail }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'marks-edit', params: { id: mark.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deletemark(mark.id)">Dele</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                marks: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/marks/')
                .then(response => {
                    this.marks = response.data;
                });
        },
        methods: {
            deletemark(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/marks/${id}`)
                    .then(response => {
                        let i = this.marks.map(data => data.id).indexOf(id);
                        this.marks.splice(i, 1)
                    });
            }
        }
    }
</script>