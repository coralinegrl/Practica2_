import { createRouter, createWebHistory } from 'vue-router'
import Profile from './components/Profile.vue'
import Home from './components/Home.vue'

// Define las rutas de tu aplicación
const routes = [
    {
      path: '/',
      name: 'Home',
      component: Home, // Asigna el componente Home a la ruta "/"
    },
    {
      path: '/portfolio',
      name: 'Portfolio',
      component: Profile, // Asigna el componente Profile a la ruta "/portfolio"
    },
    // Otras rutas aquí
];

// Crea la instancia del router
const router = createRouter({
  history: createWebHistory(),
  routes // versión corta para `routes: routes`
})

export default router
