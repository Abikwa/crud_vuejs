import Home from './pages/Home.vue';
import About from './pages/About.vue';

import IndexMark from './components/marks/Index.vue';
import CreateMark from './components/marks/Create.vue';
import EditMark from './components/marks/Edit.vue';

import IndexModel from './components/models/Index.vue';
import CreateModel from './components/models/Create.vue';
import EditModel from './components/models/Edit.vue';


export const routes = [
    {
        name: 'home',
        path: '/',
        component : Home,
    },
    {
        name: 'about',
        path: '/',
        component : About,
    },

    {
        name: 'marks',
        path: '/marks',
        component: IndexMark
    },
    {
        name: 'marks-create',
        path: '/marks/create',
        component: CreateMark
    },
    {
        name: 'marks-edit',
        path: '/marks/edit/:id',
        component: EditMark
    },

    {
        name: 'models',
        path: '/models',
        component: IndexModel
    },
    {
        name: 'models-create',
        path: '/models/create',
        component: CreateModel
    },
    {
        name: 'models-edit',
        path: '/models/edit/:id',
        component: EditModel
    }
];