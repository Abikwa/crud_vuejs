<template>
    <div>
        <h3 class="text-center">Create car</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addCar">
                <div class="alert alert-danger" v-if="errors && errors.mark">
                    {{ errors.mark[0] }}
                </div>
                    <div class="form-group">
                        <label>Plaque</label>
                        <input type="text" class="form-control" v-model="car.plaque">
                    </div>
                    <div class="form-group">
                        <label>mark</label>
                        <input type="text" class="form-control" v-model="car.mark">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>

            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                car: {},
                errors: {},
            }
        },
        methods: {
            addCar() {
                this.axios
                    .post('http://localhost:8000/api/cars', this.car)
                    .then(response => (
                        this.$router.push({ name: 'allcar' })
                    ))
                    .catch(
                            error => {
                            if (error.response.status == 422) {
                                this.errors = error.response.data.errors;
                            }
                            console.log(error);
                        })
                    .finally(() => this.loading = false)
            }
        }
    }
</script>