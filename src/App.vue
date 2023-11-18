<template>
    <div id="app">
      <router-view></router-view>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import Profile from "./components/Profile.vue"; // Asegúrate de ajustar la ruta a la ubicación real de Profile.vue

export default defineComponent({
    name: "App",
    setup() {
      const router = createRouter({
        history: createWebHistory(),
        routes: [
          {
            path: "/portfolio",
            name: "Portfolio",
            component: Profile,
          },

        ],
      });

      return { router };
    },
  });
</script>

