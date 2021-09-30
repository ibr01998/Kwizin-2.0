import { createRouter, createWebHistory } from "vue-router";
import Home from '../views/home.vue';
import About from '../views/about.vue';
import Register from '../views/register.vue';
import Login from '../views/login.vue';
import Dashboard from '../views/dashboard.vue';
import Categories from '../views/categories/categories.vue';
import AddCategories from '../views/categories/addCategories.vue';
import Foods from '../views/foods.vue';
import EditCategories from '../views/categories/editCategories.vue';

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
    },
    {
        path: '/about',
        name: 'About',
        component: About,
    },
    {
        path: '/register',
        name: 'Register',
        component: Register,
    },
    {
        path: '/login',
        name: 'Login',
        component: Login,
    },
    {
        path: '/dashboard',
        name: 'Dashboard',
        component: Dashboard,
    },
    {
        path: '/categories',
        name: 'Categories',
        component: Categories,
    },
    {
        path: '/foods',
        name: 'Foods',
        component: Foods,
    },
    {
        path: '/categories/add',
        name: 'AddCategorie',
        component: AddCategories,
    },
    {
        path: '/categories/edit/:id',
        name: 'EditCategorie',
        component: EditCategories,
        props: (route) => {
            const id = Number.parseInt(route.params.id);
            return { id }
        },
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router