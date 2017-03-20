import KeenUI from 'keen-ui';
import VueRouter from 'vue-router';


let routes=[

    {
        path:"/",
        component:require('./components/dashboard')
    },
    {
        path:"/emailings",
        component:require('./components/emailings')
    },
    {
        path:"/tasks",
        component:require('./components/tasks')
    },
    {
        path:"/traffic",
        component:require('./components/traffic')
    }


];

export default new VueRouter({
    routes
});