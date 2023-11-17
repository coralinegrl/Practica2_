<template>
    <div class="interest border rounded-lg overflow-hidden shadow-md">
      <img :src="image" :alt="altText" class="w-full max-w-xs mx-auto" />
      <p class="text-center py-2">{{ title }}</p>
    </div>
  </template>


<script>
export default {
    name: 'Hobby',
    props: {
        image: {
            type: String,
            required: true,
        },
        title: {
            type: String,
            required: true,
        },
        altText: {
            type: String,
            required: true,
        }
    }
}
</script>

<style scoped>
  /* Estilos específicos para Hobby */
.interest {
    margin-bottom: 20px;
    text-align: center;
}

.interest img {
    width: 100%; /* Asegura que la imagen no exceda el ancho del contenedor */
    max-width: 100px; /* Máximo ancho de la imagen */
    height: auto; /* Mantiene la proporción de la imagen */
}
</style>
