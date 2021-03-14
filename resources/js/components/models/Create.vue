<template>
    <div>
        <h3 class="text-center">Create model</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addModel">
                <div class="alert alert-danger" v-if="errors && errors.mark">
                    {{ errors.mark[0] }}
                </div>
                    <div class="form-group">
                        <label>Plaque</label>
                        <input type="text" class="form-control" v-model="model.plaque">
                    </div>
                    <div class="form-group">
                        <label>mark</label>
                        <input type="text" class="form-control" v-model="model.mark">
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
                model: {},
                errors: {},
            }
        },
        methods: {
            addModel() {
                this.axios
                    .post('http://localhost:8000/api/models', this.model)
                    .then(response => (
                        this.$router.push({ name: 'models' })
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