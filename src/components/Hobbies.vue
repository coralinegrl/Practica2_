<template>
    <section class="hobbies container">
      <h2>Intereses</h2>
      <Hobby
        v-for="(hobby, index) in hobbiesList"
        :key="index"
        :image="hobby.image"
        :title="hobby.title"
        :altText="hobby.altText"
      />
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
