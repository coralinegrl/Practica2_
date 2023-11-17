<template>
    <section class="about container mx-auto py-4">
        <h2 class="text-2xl font-bold mb-2">{{ heading }}</h2>
        <p class="text-gray-600">{{ description }}</p>
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

<style scoped>
  /* Agrega estilos específicos para el componente aquí si es necesario */
</style>
