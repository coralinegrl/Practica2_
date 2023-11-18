<template>
    <section class="about container mx-auto px-4 sm:px-6 lg:px-8 py-8 bg-white rounded-lg shadow-lg my-8">
      <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-gray-800">{{ heading }}</h2>
      <p class="text-gray-600 text-sm sm:text-base leading-relaxed">{{ description }}</p>
    </section>
</template>

<script>
export default {
    name: 'Description',
    props: {
        heading: {
            type: String,
            default: 'Acerca de mí'
        },
        description: {
            type: String,
            default: 'Mi nombre es Andrea Saldaña, soy estudiante de Ingeniería Civil en Computación e Informática de la UCN.'
        }
    }
}
</script>

  <!-- Estilos adicionales si son necesarios -->
<style>
</style>
