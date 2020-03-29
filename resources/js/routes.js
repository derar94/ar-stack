import Home from './components/Home.vue';
import Questions from './components/Questions.vue';
import Posts from './components/Posts.vue';
import Projects from './components/Projects.vue';
import Offers from './components/Offers.vue';
import Users from './components/Users.vue';
import Chanels from './components/Chanels.vue';





export const routes = [{
        name: "home",
        path: "/",
        component: Home
    }, {
        name: "questions",
        path: "/questions",
        component: Questions
    }, {
        name: "posts",
        path: "/posts",
        component: Posts
    },
    {
        name: "projects",
        path: "/projects",
        component: Projects
    },
    {
        name: "offers",
        path: "/offers",
        component: Offers
    },
    {
        name: "users",
        path: "/users",
        component: Users
    },
    {
        name: "chanels",
        path: "/chanels",
        component: Chanels
    },
    {
        name: "404",
        path: "/*",
        component: Questions
    }
];