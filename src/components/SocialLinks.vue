<template>
    <section class="social container mx-auto px-4 py-6">
        <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-gray-800 text-center">{{ heading }}</h2>
        <ul class="flex flex-col items-center">
            <li v-for="(socialLink, index) in socialLinksList" :key="index" class="mb-4">
                <div v-if="!socialLink.isEditing" class="flex items-center">
                    <a :href="socialLink.url" target="_blank" class="social-link flex items-center">
                        <img :src="socialLink.icon" class="icon" alt="" />
                        <span>{{ socialLink.name }}</span>
                    </a>
                    <span @click="enableEditing(socialLink)" class="cursor-pointer text-blue-500 hover:text-blue-700 ml-2">
                        <PencilIcon class="w-4 h-4" />
                    </span>
                </div>
                <div v-else class="flex items-center">
                    <input v-model="socialLink.url" type="text" class="px-2 py-1 border border-gray-300 rounded">
                    <button @click="saveSocialLink(socialLink)" class="bg-green-500 text-white px-2 py-1 rounded ml-2">Guardar</button>
                    <button @click="cancelEdit(socialLink)" class="bg-red-500 text-white px-2 py-1 rounded ml-2">Cancelar</button>
                </div>
            </li>
        </ul>
    </section>
</template>

<script>
import { PencilIcon } from '@heroicons/vue/solid';
import axios from 'axios';

export default {
    name: 'SocialLinks',
    data() {
        return {
            heading: 'Redes Sociales',
            socialLinksList: [
                { name: 'Instagram', url: 'https://www.instagram.com/coralinegrl', icon: 'https://1000marcas.net/wp-content/uploads/2019/11/Instagram-Logo-2016.png' , isEditing: false},
                { name: 'Twitter', url: 'https://twitter.com/coralinegrl', icon: 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Logo_of_Twitter.svg/512px-Logo_of_Twitter.svg.png', isEditing: false },
                { name: 'LinkedIn', url: 'https://www.linkedin.com/in/andrea-salda%C3%B1a-cavour-324883229/', icon: 'https://cdn1.iconfinder.com/data/icons/logotypes/32/circle-linkedin-512.png', isEditing: false },
                
            ]
        };
    },
    methods: {
        enableEditing(socialLink) {
            socialLink.isEditing = true;
            socialLink.originalUrl = socialLink.url; // Guardar la URL original
        },
        cancelEdit(socialLink) {
            socialLink.isEditing = false;
            socialLink.url = socialLink.originalUrl; // Restablecer la URL original
            delete socialLink.originalUrl;
        },
        saveSocialLink(socialLink) {
            axios.put('/api/social-link', { 
                name: socialLink.name,
                url: socialLink.url 
            })
            .then(response => {
                // Manejo de la respuesta exitosa
                console.log(response.data);
                socialLink.isEditing = false;
            })
            .catch(error => {
                // Manejo de errores
                console.error(error.response.data);
            });
        },
    },
    components: {
        PencilIcon, // Registra el icono de lápiz como un componente
    }
}
</script>

<style>
.social-link .icon{
    color: #007bff; /* Azul para enlaces */
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
    height: 20px;
    width: 30px;
    margin-right: 10px;
}

.social-link:hover {
    color: #0056b3; /* Azul más oscuro al pasar el mouse */
    text-decoration: underline;
}
</style>
