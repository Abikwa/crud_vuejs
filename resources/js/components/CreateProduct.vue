<template>
    <div>
        <h3 class="text-center">Create mark</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addmark">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="mark.name">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" v-model="mark.detail">
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
                mark: {}
            }
        },
        methods: {
            addmark() {
                this.axios
                    .post('http://localhost:8000/api/marks', this.mark)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>