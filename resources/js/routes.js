module.exports = [
    
    {
        path:'/cart',
        name: 'cart.index',
        component: ()=>import('./routes/Courses/Index.vue')
    },

    {
        path: '/course/:slug',
        name: 'courses.show',
        component: ()=>import('./routes/Courses/Show.vue')
    },

    {
        path: '/checkout',
        name: 'order.checkout',
        component: ()=>import('./routes/Order/Checkout.vue')
    },

    {
        path: '/summary',
        name: 'order.summary',
        component: ()=>import('./routes/Order/Summary.vue')
    },


];