<template>
    <div>
        <div>
            <h2 class="text-center">Item List</h2>
            <h4>
                <router-link to="/items/create" class="nav-item nav-link">Create Item</router-link>
            </h4>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Details</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in items" :key="item.id">
                <td>{{ item.id }}</td>
                <td>{{ item.name }}</td>
                <td>{{ item.details }}</td>
                <td>{{ item.price }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edititems', params: { id: item.id }}" class="btn btn-success">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteItem(item.id)">Delete</button>
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
                items: [],
                laravelData: {},
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/items/')
                .then(response => {
                    this.items = response.data;
                });
        },

        methods: {
            deleteItem(id, index) {
                if (confirm('are you sure?')) {
                    this.axios
                        .delete(`${api_base_path}/api/items/${id}`)
                        .then(response => {
                            let i = this.items.map(data => data.id).indexOf(id);
                            this.items.splice(i, 1)
                        });
                }
            }
        },

    }
</script>

