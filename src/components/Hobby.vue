<template>
    <div class="interest border rounded-lg overflow-hidden shadow-md">
        <img :src="image" :alt="altText" class="w-full max-w-xs mx-auto" />
        <p class="text-center py-2 font-bold text-lg">{{ title }}</p> <!-- Texto en negrita y más grande -->
    </div>
</template>

<script>
export default {
    name: 'Hobby',
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
    }
}
</script>

<style>
.interest {
    margin-top: 20px;
    margin-bottom: 20px;
    text-align: center;
    height: 200px;
}

.interest img {
    width: 100px;
    height: 100px;
    margin-top: 20px;
}
</style>
