<template>
    <div>
        <h3 class="text-center">Create Item</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addItem">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="item.name">
                    </div>
                    <div class="form-group">
                        <label>Details</label>
                        <input type="text" class="form-control" v-model="item.details">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" v-model="item.price">
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
                item: {}
            }
        },
        methods: {
            addItem() {
                this.axios
                    .post('http://localhost:8000/api/items', this.item)
                    .then(response => (
                        this.$router.push({ name: 'items' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>