<template>
    <div class="interest border rounded-lg overflow-hidden shadow-md">
        <div v-if="!isEditing">
            <img :src="localImage" :alt="localAltText" class="w-full max-w-xs mx-auto" />
            <p class="text-center py-2 font-bold text-lg">{{ localTitle }}</p>
            <span @click="openEditModal" class="cursor-pointer text-blue-500 hover:text-blue-700">
                <PencilIcon class="w-4 h-4 inline m-2" />
            </span>
        </div>

        <!-- Formulario de edición -->
        <div v-if="isEditing" class="p-4">
            <input type="file" @change="onFileChange" class="mb-2">
            <input v-model="localTitle" type="text" placeholder="Título"
                   class="w-full px-3 py-2 border border-gray-300 rounded-md mb-2">
            <button @click="updateHobby" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mr-2">Guardar</button>
            <button @click="cancelEdit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cancelar</button>
        </div>
    </div>
</template>

<script>
import { PencilIcon } from '@heroicons/vue/solid';
import axios from 'axios';

export default {
    name: 'Hobby',
    components: {
        PencilIcon,
    },
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
    },
    data() {
        return {
            isEditing: false,
            localImage: this.image,
            localTitle: this.title,
            localAltText: this.altText,
            selectedFile: null,
        };
    },
    methods: {
        openEditModal() {
            this.isEditing = true;
        },
        cancelEdit() {
            this.isEditing = false;
        },
        onFileChange(e) {
            this.selectedFile = e.target.files[0];
        },
        updateHobby() {
            const formData = new FormData();
            formData.append('image', this.selectedFile);
            formData.append('title', this.localTitle);
            formData.append('altText', this.localAltText);

            axios.put('/api/hobby', formData)
                .then(response => {
                    this.localImage = response.data.image;
                    this.localTitle = response.data.title;
                    this.localAltText = response.data.altText;
                    this.isEditing = false;
                })
                .catch(error => {
                    console.error(error);
                });
        }
    }
}
</script>

<style>
.interest {
    margin-top: 20px;
    margin-bottom: 20px;
    text-align: center;
    height: 300px;
}

.interest img {
    width: 100px;
    height: 100px;
    margin-top: 20px;
}
</style>
