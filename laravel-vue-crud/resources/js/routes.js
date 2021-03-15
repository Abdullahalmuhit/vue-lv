import AllItem from './components/Allltem.vue';
import EditItem from './components/EditItem.vue';
import CreateItem from './components/CreateItem.vue';
import AllProduct from './components/AllProduct.vue';
import CreateProduct from './components/CreateProduct.vue';
import EditProduct from './components/EditProduct.vue';


export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllProduct
    },
    {
        name: 'create',
        path: '/create',
        component: CreateProduct
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditProduct
    },
    {
        name: 'items',
        path: '/items',
        component: AllItem
    },
    {
        name: 'createitem',
        path: '/items/create',
        component: CreateItem
    },
    {
        name: 'edititems',
        path: 'edit/items/:id',
        component: EditItem
    }
];