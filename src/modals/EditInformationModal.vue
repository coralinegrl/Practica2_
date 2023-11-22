<template>
    <div v-if="isVisible" class="modal">
      <!-- Contenido del modal -->
      <div class="bg-white p-4 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Editar Información</h2>
        <!-- Agrega los campos de edición que necesites -->
        <textarea v-model="editedDescription" class="w-full h-32 border-gray-300 rounded-md p-2" placeholder="Editar descripción"></textarea>
        <!-- Botón para guardar los cambios -->
        <button @click="saveChanges" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Guardar</button>
      </div>
    </div>
</template>

<script>
export default {
    props: {
      isVisible: {
        type: Boolean,
        default: false, // Asegúrate de que el valor por defecto sea apropiado
      },
    },
    methods: {
      show() {
        this.isVisible = true; // Muestra el modal
      },
      hide() {
        this.isVisible = false; // Oculta el modal
      },
      saveChanges() {
        axios.put('/api/description', { description: this.editedDescription }); // Suponiendo que tienes una API para actualizar la descripción
        // Aquí puedes guardar los cambios, por ejemplo, enviarlos al servidor
        // y luego cerrar el modal
        this.hide();
      },
    },
};
</script>

<style>
    /* Estilos adicionales si son necesarios */
</style>
