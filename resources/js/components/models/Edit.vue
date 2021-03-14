<template>
    <div>
        <h3 class="text-center">Create model</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateModel">
                    <div class="form-group">
                        <label>Plaque</label>
                        <input type="text" class="form-control" v-model="model.plaque">
                    </div>
                    <div class="form-group">
                        <label>mark</label>
                        <input type="text" class="form-control" v-model="model.mark">
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                model: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/models/${this.$route.params.id}`)
                .then((res) => {
                    this.model = res.data;
                });
        },
        methods: {
            updateModel() {
                this.axios
                    .patch(`http://localhost:8000/api/models/${this.$route.params.id}`, this.model)
                    .then((res) => {
                        this.$router.push({ name: 'models' });
                    });
            }
        }
    }
</script>