<template>
    <div>
        <h3 class="text-center">Edit Item</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateItem">
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
                    <button type="submit" class="btn btn-primary">Update</button>
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
        created() {
            this.axios
                .get(`http://localhost:8000/api/items/${this.$route.params.id}`)
                .then((res) => {
                    this.item = res.data;
                });
        },
        methods: {
            updateItem() {
                this.axios
                    .patch(`http://localhost:8000/api/items/${this.$route.params.id}`, this.item)
                    .then((res) => {
                        this.$router.push({ name: 'items' });
                    });
            }
        }
    }
</script>