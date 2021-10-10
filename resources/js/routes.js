import AllPosts from './components/posts/AllPost.vue';
import AddPost from './components/posts/AddPost.vue';
import EditPost from './components/posts/EditPost.vue';
import AddEmployee from './components/employee/addEmployee.vue';
import ViewEmployee from './components/employee/viewEmployee.vue';
import EditEmployee from './components/employee/editEmployee.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllPosts
    },
    {
        name: 'add',
        path: '/add',
        component: AddPost
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditPost
    },
    {
        name:'employees',
        path:'/employees',
        component:ViewEmployee

    },
    {
        name:'/employees/store',
        path:'/employees/store',
        component:AddEmployee
    },
    {
        name: 'employees/edit',
        path:'employees/edit/:id',
        component:EditEmployee
    }
];
