import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

import Home from './components/Home.vue';
import Profile from './components/Profile.vue';
import App from './App.vue';

const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/', component: Home },
    { path: '/portfolio', component: Profile },
  ],
});

export default router;
