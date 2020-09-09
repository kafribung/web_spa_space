import Home from '../views/Pages/Home'
import About from '../views/Pages/About'
import Blog from '../views/Pages/Blog'
import BlogShow from '../views/Pages/Blog_Show'
import Contact from '../views/Pages/Contact'

export default {
    mode: 'history',
    linkExactActiveClass: 'underline',
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/about',
            name: 'About',
            component: About
        },
        {
            path: '/blog',
            name: 'Blog',
            component: Blog,
        },
        {
            path: '/blog/show/:slug',
            name: 'BlogShow',
            component: BlogShow
        },
        {
            path: '/contact',
            component: Contact
        },
    ]
}
