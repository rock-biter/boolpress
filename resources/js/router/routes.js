import Home from "../pages/Home.vue";
import ContactUs from "../pages/ContactUs.vue";
import AboutUs from "../pages/AboutUs.vue";
import PostsIndex from "../pages/Posts.index.vue";
import PostsShow from "../pages/Posts.show.vue";

const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
        meta: { layout: "default" },
    },
    {
        path: "/contatti",
        name: "contact-us",
        component: ContactUs,
        meta: { layout: "default" },
    },
    {
        path: "/chi-siamo",
        name: "about-us",
        component: AboutUs,
        meta: { layout: "default" },
    },
    {
        path: "/blog",
        name: "posts.index",
        component: PostsIndex,
        meta: { layout: "default" },
    },
    {
        path: "/blog/:slug",
        name: "posts.show",
        component: PostsShow,
        props: true,
        meta: { layout: "sidebar" },
    },
];

export default routes;
