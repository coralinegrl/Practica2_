<template>
    <section class="about container mx-auto px-4 sm:px-6 lg:px-8 py-8 bg-white rounded-lg shadow-lg my-8">
      <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-gray-800">{{ heading }}</h2>
      <p class="text-gray-600 text-sm sm:text-base leading-relaxed">{{ description }}</p>

      <!-- Icono de lápiz para editar -->
      <span @click="openEditModal" class="cursor-pointer text-blue-500 hover:text-blue-700">
        <PencilIcon class="w-4 h-4 inline" /> <!-- Icono de edición -->
      </span>
    </section>
</template>


<script>
import { PencilIcon } from '@heroicons/vue/solid'; // Importa el icono de lápiz

export default {
    name: 'Description',
    props: {
      heading: {
        type: String,
        default: 'Acerca de mí',
      },
      description: {
        type: String,
        default: 'Mi nombre es Andrea Saldaña, soy estudiante de Ingeniería Civil en Computación e Informática de la UCN.',
      },
      openEditDescriptionModal: {
        type: Boolean,
        default: false, // Asegúrate de que el valor por defecto sea apropiado
      },
    },
    methods: {
      openEditModal() {
        // Emite el evento open-edit-modal para que el componente padre lo maneje
        this.$emit('open-edit-modal');
      },
    },
    components: {
      PencilIcon, // Registra el icono de lápiz como un componente
    },
};
</script>
