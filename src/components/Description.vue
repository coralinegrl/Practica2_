<template>
  <section class="about container mx-auto px-4 sm:px-6 lg:px-8 py-8 bg-white rounded-lg shadow-lg my-8">
      <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-gray-800">{{ localHeading }}</h2>
      <p class="text-gray-600 text-sm sm:text-base leading-relaxed">{{ localDescription }}</p>

      <!-- Icono de lápiz para editar -->
      <span @click="openEditModal" class="cursor-pointer text-blue-500 hover:text-blue-700">
          <PencilIcon class="w-4 h-4 inline" /> <!-- Icono de edición -->
      </span>

      <!-- Formulario de edición -->
      <div v-if="isEditing" class="mt-4">
          <input v-model="localHeading" type="text" placeholder="Heading"
                 class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300">
          <textarea v-model="localDescription" placeholder="Description"
                    class="w-full mt-2 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"></textarea>
          <div class="flex justify-end mt-4">
              <button @click="updateDescription"
                      class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                      type="button">
                  Guardar
              </button>
              <button @click="cancelEdit"
                      class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                      type="button">
                  Cancelar
              </button>
          </div>
      </div>
  </section>
</template>

<script>
import { PencilIcon } from '@heroicons/vue/solid'; // Importa el icono de lápiz
import axios from 'axios';

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
  },
  data() {
      return {
          isEditing: false,
          localHeading: this.heading,
          localDescription: this.description,
      };
  },
  methods: {
      openEditModal() {
          this.isEditing = true;
          this.localHeading = this.heading;
          this.localDescription = this.description;
      },
      cancelEdit() {
          this.isEditing = false;
          this.localHeading = this.heading;
          this.localDescription = this.description;
      },
      updateDescription() {
          // Aquí se realiza la lógica para actualizar la descripción
          axios.put('/api/description', {
              heading: this.localHeading,
              description: this.localDescription
          })
          .then(response => {
              // Manejo de la respuesta exitosa
              console.log(response.data);
              this.isEditing = false;
              // Emitir evento para actualizar los datos en el componente padre
              this.$emit('update-description', response.data);
          })
          .catch(error => {
              // Manejo de errores
              console.error(error.response.data);
          });
      },
  },
  components: {
      PencilIcon, // Registra el icono de lápiz como un componente
  },
};
</script>

