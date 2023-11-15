<template>
    <div class="hobbies">
        <h2>Hobbies</h2>
        <div class="hobbie" v-for="hobbie in hobbies" :key="hobbie.id">

            <img src="{{ asset('images/musica.jpg') }}" :alt="hobbie.name" width="100">
            <p>{{ hobbie.name }}</p>
        </div>
    </div>
</template>
<script lang="ts">
import { defineComponent } from 'vue';

export default defineComponent({
    name: 'Hobby',
    props: {
        hobbies: {
            type: Array,
            required: true,
        },
    },
});
</script>
<style scoped>
.hobbies {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.hobbies {
    width: 100px;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.hobbies p {
    margin-bottom: 0px;
}

.hobbies img {
    width: 100%;
    max-width: 100px;
    height: 100px;
}

