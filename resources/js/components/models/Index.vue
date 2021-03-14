<template>
    <div>
        <h2 class="text-center">models </h2>
        <table class="table">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Plaque</th>
                    <th>mark</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="model in models" :key="model.id">
                        <td>{{ model.id}}</td>
                        <td>{{ model.plaque }}</td>
                        <td>{{ model.mark }}</td>
                        <td>
                            <router-link :to="{name: 'models-edit', params: { id: model.id }}" class="btn btn-success">Edit</router-link>
                            <button class="btn btn-danger" @click="deleteModel(model.id)">Delete</button>
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
                models: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/models/')
                .then(response => {
                    this.models = response.data;
                });
        },
        methods: {
            deleteModel(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/models/${id}`)
                    .then(response => {
                        let i = this.models.map(data => data.id).indexOf(id);
                        this.models.splice(i, 1)
                    });
            }
        }
}
</script>