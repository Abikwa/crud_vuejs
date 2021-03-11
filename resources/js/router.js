
import Home from './pages/Home.vue';
import About from './pages/About.vue';

import AllCar from './components/cars/All.vue';
import CreateCar from './components/cars/Create.vue';
import EditCar from './components/cars/Edit.vue';


export const routes = [
        {
            path: '/',
            name: 'home',
            component : Home,
        },
        {
            path: '/',
            name: 'about',
            component : About,
        },

        {
            name: 'allcar',
            path: '/cars',
            component: AllCar
        },
        {
            name: 'create',
            path: '/cars/create',
            component: CreateCar
        },
        {
            name: 'edit',
            path: '/cars/edit/:id',
            component: EditCar
        }

    ];
