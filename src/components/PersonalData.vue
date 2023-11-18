<template>
    <section class="personal-data container mx-auto px-4 py-6 bg-white-50 rounded-lg shadow-lg my-12">
        <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-gray-800">{{ heading }}</h2>
        <ul class="list-disc pl-5">
            <li v-for="(item, index) in personalData" :key="index" class="mb-2 text-black">
            <span class="font-semibold">{{ item.label }}:</span> {{ item.value }}
            </li>
        </ul>
    </section>
</template>

<script>
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
                { label: 'Email', value: 'andrea.saldana@alumnos.ucn.cl'},
                { label: 'Ciudad', value: 'Antofagasta'},
                { label: 'País', value: 'Chile'}

            ]
        }
    }
}
</script>

<style>

</style>
