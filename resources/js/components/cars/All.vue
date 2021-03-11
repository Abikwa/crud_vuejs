<template>
    <div>
        <h2 class="text-center">Cars List</h2>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Plaque</th>
                    <th>mark</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="car in cars" :key="car.id">
                        <td>{{ car.id}}</td>
                        <td>{{ car.plaque }}</td>
                        <td>{{ car.mark }}</td>
                        <td>
                            <router-link :to="{name: 'edit', params: { id: car.id }}" class="btn btn-success">Edit</router-link>
                            <button class="btn btn-danger" @click="deleteCar(car.id)">Delete</button>
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
                cars: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/cars/')
                .then(response => {
                    this.cars = response.data;
                });
        },
        methods: {
            deleteCar(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/cars/${id}`)
                    .then(response => {
                        let i = this.cars.map(data => data.id).indexOf(id);
                        this.cars.splice(i, 1)
                    });
            }
        }
}
</script>