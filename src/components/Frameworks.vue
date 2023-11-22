<template>
    <section class="skills container mx-auto max-w-4xl px-4 py-6">
        <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-gray-800 text-center">{{ heading }}</h2>
        <div class="overflow-x-auto mt-4">
            <table class="w-full table-auto">
                <thead class="bg-blue-200">
                    <tr>
                        <th class="px-4 py-2 border">Tecnología</th>
                        <th class="px-4 py-2 border">Nivel</th>
                        <th class="px-4 py-2 border">Año</th>
                        <th class="px-4 py-2 border">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(framework, index) in localFrameworksList" :key="index" class="border">
                        <td class="px-4 py-2 border">
                            <div v-if="!framework.isEditing">{{ framework.technology }}</div>
                            <input v-else v-model="framework.technology" type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </td>
                        <td class="px-4 py-2 border">
                            <div v-if="!framework.isEditing">{{ framework.level }}</div>
                            <input v-else v-model="framework.level" type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </td>
                        <td class="px-4 py-2 border">
                            <div v-if="!framework.isEditing">{{ framework.year }}</div>
                            <input v-else v-model="framework.year" type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </td>
                        <td class="px-4 py-2 border">
                            <span v-if="!framework.isEditing" @click="editFramework(framework)" class="cursor-pointer text-blue-500 hover:text-blue-700">
                                <PencilIcon class="w-4 h-4 inline" />
                            </span>
                            <span v-else>
                                <button @click="updateFramework(framework)" class="bg-green-500 text-white px-3 py-1 rounded-md">Guardar</button>
                                <button @click="cancelEdit(framework)" class="bg-red-500 text-white px-3 py-1 rounded-md">Cancelar</button>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</template>

<script>
import { PencilIcon } from '@heroicons/vue/solid';
import axios from 'axios';

export default {
    name: 'Frameworks',
    data() {
        return {
            heading: 'Herramientas Tecnológicas',
            localFrameworksList: [
                { technology: 'HTML', level: 'Básico', year: '2023', isEditing: false },
                { technology: 'CSS', level: 'Básico', year: '2023', isEditing: false },
                { technology: 'Vue', level: 'Intermedio', year: '2023', isEditing: false },
            ]
        };
    },
    methods: {
        editFramework(framework) {
            this.localFrameworksList.forEach(f => f.isEditing = false); // Cancelar otros modos de edición
            framework.isEditing = true;
        },
        cancelEdit(framework) {
            framework.isEditing = false;
            // Aquí, restaurar los valores originales si es necesario
        },
        updateFramework(framework) {
            framework.isEditing = false;
            // Lógica para enviar la actualización
            axios.put('/api/frameworks/' + framework.id, framework)
                .then(response => {
                    console.log('Actualización exitosa:', response.data);
                })
                .catch(error => {
                    console.error('Error en la actualización:', error.response.data);
                });
        },
    },
    components: {
        PencilIcon,
    }
}
</script>


<style>
.bg-blue-200 {
    background-color: #6995cf;
}
.table {
    width: 100%;
    text-align: left;
    border-collapse: collapse;
}

.th, td {
    padding: 8px;
    border: 1px solid #ddd;
}

.thead {
    background-color: #f2f2f2;
}
</style>
