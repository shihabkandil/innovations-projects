require('./bootstrap');

import Vue from 'vue';

import Vuex from 'vuex';

Vue.use(Vuex);

import VueRouter from 'vue-router';

Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    routes:require('./routes.js')
});

const store = new Vuex.Store({
    
    state:{
        courses:[],
        cart:[],
        order:{}
    },

    mutations:{
        updateCourses(state , courses){
            state.courses = courses;

        },
        addToCart(state , course){
            let courseInCartIndex = state.cart.findIndex(item=>item.slug==course.slug);

            if(courseInCartIndex!=-1){
                state.cart[courseInCartIndex].quantity++;
                return;
            }

            course.quantity = 1;
            state.cart.push(course);
        },
        removeFromCart(state , index){
            state.cart.splice(index,1);
        },
        updateOrder(state , order){
            state.order = order;
        },
        updateCart(state , cart){
            state.cart = cart;
        }
    },
    actions:{

        getCourses({commit}){
            axios.get('/api/Courses').then((response)=>{
                commit('updateCourses',response.data);
            }).catch((error)=>console.error(error));
        },

        clearCart({commit}){
            commit('updateCart' , []);
        },
        
    }
    
});

const app = new Vue({
    router,
    store,
    el: '#app',
    created(){
        store.dispatch('getCourses').then(_=>{}).catch((error)=>console.error(error));
    }
});
