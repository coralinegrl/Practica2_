<template>
    <section class="skills container">
      <h2 class="text-2xl font-semibold">{{ heading }}</h2>
      <table class="mt-4 w-full table-auto">
        <thead>
          <tr>
            <th class="px-4 py-2 bg-gray-100 border">Tecnología</th>
            <th class="px-4 py-2 bg-gray-100 border">Nivel</th>
            <th class="px-4 py-2 bg-gray-100 border">Año</th>
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
                // Añade más herramientas tecnológicas aquí según sea necesario
            ]
        };
    }
}
</script>

<style scoped>
  /* Estilos específicos para Frameworks */
.container {
    /* Tus estilos para el contenedor */

}

table {
    width: 100%;
    text-align: left;
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    border: 1px solid #ddd;
}

thead {
    background-color: #f2f2f2;
}
</style>
