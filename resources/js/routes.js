import Home from './components/Home.vue';
import Questions from './components/Questions.vue';
export const routes = [{
        name: "home",
        path: "/",
        component: Home
    }, {
        name: "questions",
        path: "/questions",
        component: Questions
    },
    {
        name: "404",
        path: "*",
        component: Questions
    }
];