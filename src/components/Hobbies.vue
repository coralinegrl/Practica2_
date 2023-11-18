<template>
    <section class="hobbies container mx-auto max-w-4xl px-4 py-6">
        <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-gray-800">Intereses</h2>
        <div class="grid grid-cols-2 gap-4">
            <Hobby
                v-for="(hobby, index) in hobbiesList"
                :key="index"
                :image="hobby.image"
                :title="hobby.title"
                :altText="hobby.altText"
                class="border rounded-lg overflow-hidden shadow-md"
            />
        </div>
    </section>
</template>


<script>
import Hobby from './Hobby.vue';

export default {
    name: 'Hobbies',
    components: {
      Hobby
    },
    data() {
        return {
            hobbiesList: [
            { image: 'images/musica.jpg', title: 'Escuchar música', altText: 'Escuchar música' },
            { image: 'images/videojuegos.jpg', title: 'Jugar videojuegos', altText: 'Jugar videojuegos' },
            { image: 'images/dormir.jpg', title: 'Dormir', altText: 'Dormir' },
            { image: 'images/yoga.jpg', title: 'Hacer yoga', altText: 'Hacer yoga' }
            ]
        };
    }
}
</script>

<style>

</style>
