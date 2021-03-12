import AllProduct from './components/AllProduct.vue';
import CreateProduct from './components/CreateProduct.vue';
import EditProduct from './components/EditProduct.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/marks',
        component: AllProduct
    },
    {
        name: 'create',
        path: '/marks/create',
        component: CreateProduct
    },
    {
        name: 'edit',
        path: '/marks/edit/:id',
        component: EditProduct
    }
];