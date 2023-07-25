//const Welcome = () => import('./components/Welcome.vue')
import {createRouter, createWebHistory} from "vue-router";

const CategoryList = () => import('./Components/Category/List.vue')
const CategoryCreate = () => import('./Components/Category/Add.vue')
const CategoryEdit = () => import('./Components/Category/Edit.vue')

const routes = [
    {
        name: 'categoryList',
        path: '/category',
        component: CategoryList
    },
    {
        name: 'categoryEdit',
        path: '/category/:id/edit',
        component: CategoryEdit
    },
    {
        name: 'categoryAdd',
        path: '/category/add',
        component: CategoryCreate
    }
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
})

export default router;
