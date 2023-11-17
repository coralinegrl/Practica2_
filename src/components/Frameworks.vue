<template>
    <section class="skills container">
      <h2>{{ heading }}</h2>
      <table>
        <thead>
          <tr>
            <th>Tecnología</th>
            <th>Nivel</th>
            <th>Año</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(framework, index) in frameworksList" :key="index">
            <td>{{ framework.technology }}</td>
            <td>{{ framework.level }}</td>
            <td>{{ framework.year }}</td>
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
