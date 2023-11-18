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
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(framework, index) in frameworksList" :key="index" class="border">
                        <td class="px-4 py-2 border">{{ framework.technology }}</td>
                        <td class="px-4 py-2 border">{{ framework.level }}</td>
                        <td class="px-4 py-2 border">{{ framework.year }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</template>

<script>
export default {
    name: 'Frameworks',
    data() {
        return {
            heading: 'Herramientas Tecnológicas',
            frameworksList: [
                { technology: 'HTML', level: 'Básico', year: '2023' },
                { technology: 'CSS', level: 'Básico', year: '2023' },
                { technology: 'Vue', level: 'Intermedio', year: '2023' },

            ]
        };
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
