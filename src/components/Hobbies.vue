<template>
    <section class="hobbies container">
      <h2 class="text-2xl font-semibold">Intereses</h2>
      <div class="grid grid-cols-2 gap-4 mt-4">
        <Hobby
          v-for="(hobby, index) in hobbiesList"
          :key="index"
          :image="hobby.image"
          :title="hobby.title"
          :altText="hobby.altText"
          class="border rounded-lg overflow-hidden shadow-md"
        />
      </div>
    </section>
  </template>


<script>
import Hobby from './Hobby.vue';

export default {
    name: 'Hobbies',
    components: {
      Hobby
    },
    data() {
        return {
            hobbiesList: [
            { image: 'musica.jpg', title: 'Escuchar música', altText: 'Escuchar música' },
            { image: 'videojuegos.jpg', title: 'Jugar videojuegos', altText: 'Jugar videojuegos' },
            { image: 'dormir.jpg', title: 'Dormir', altText: 'Dormir' },
            { image: 'yoga.jpg', title: 'Hacer yoga', altText: 'Hacer yoga' }
            ]
        };
    }
}
</script>

<style scoped>
  /* Estilos específicos para Hobbies */
  .container {
    /* Tus estilos para el contenedor */
}
</style>
