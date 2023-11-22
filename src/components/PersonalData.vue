<template>
    <section class="personal-data container mx-auto px-4 py-6 bg-white rounded-lg shadow-lg my-12">
      <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-gray-800">
        {{ localHeading }}
        <!-- Icono de lápiz para editar -->
        <span @click="openEditModal" class="cursor-pointer text-blue-500 hover:text-blue-700 inline-block ml-2">
          <PencilIcon class="w-4 h-4 inline" />
        </span>
      </h2>
      <ul class="list-disc pl-5" v-if="!isEditing">
        <li v-for="(item, index) in localPersonalData" :key="index" class="mb-2 text-black">
          <span class="font-semibold">{{ item.label }}:</span> {{ item.value }}
        </li>
      </ul>
  
      <!-- Formulario de edición -->
      <div v-if="isEditing" class="mt-4">
        <div v-for="(item, index) in localPersonalData" :key="index" class="mb-2">
          <label class="font-semibold">{{ item.label }}:</label>
          <input v-model="item.value" type="text" :placeholder="item.label"
                 class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <div class="flex justify-end mt-4">
          <button @click="updatePersonalData"
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
  import { PencilIcon } from '@heroicons/vue/solid';
  import axios from 'axios';
  
  export default {
    name: 'PersonalData',
    props: {
      heading: {
        type: String,
        default: 'Datos Personales'
      },
      personalData: {
        type: Array,
        default: () => [
          { label: 'Nombre', value: 'Andrea Saldaña' },
          { label: 'Email', value: 'andrea.saldana@alumnos.ucn.cl' },
          { label: 'Ciudad', value: 'Antofagasta' },
          { label: 'País', value: 'Chile' }
        ]
      }
    },
    data() {
      return {
        isEditing: false,
        localHeading: this.heading,
        localPersonalData: JSON.parse(JSON.stringify(this.personalData)),
      };
    },
    methods: {
      openEditModal() {
        this.isEditing = true;
        this.localPersonalData = JSON.parse(JSON.stringify(this.personalData));
      },
      cancelEdit() {
        this.isEditing = false;
        this.localPersonalData = JSON.parse(JSON.stringify(this.personalData));
      },
      updatePersonalData() {
        axios.put('/api/personal-data-route', this.localPersonalData)
          .then(response => {
            this.localPersonalData = response.data;
            this.isEditing = false;
            this.$emit('personal-data-updated', response.data);
          })
          .catch(error => {
            console.error("Error al actualizar los datos:", error);
          });
      },
    },
    components: {
      PencilIcon,
    },
  };
  </script>
  
  <style>
  /* Tus estilos aquí */
  </style>
  