<template>
    <div>
        <h3 class="text-center">Modifier la marque</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updatemark">
                    <div class="form-group">
                        <label>Marque</label>
                        <input type="text" class="form-control" v-model="mark.name">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" v-model="mark.detail">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                mark: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/marks/${this.$route.params.id}`)
                .then((res) => {
                    this.mark = res.data;
                });
        },
        methods: {
            updatemark() {
                this.axios
                    .patch(`http://localhost:8000/api/marks/${this.$route.params.id}`, this.mark)
                    .then((res) => {
                        this.$router.push({ name: 'marks' });
                    });
            }
        }
    }
</script>