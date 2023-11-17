<template>
    <section class="education container">
      <h2>{{ heading }}</h2>
      <ul>
        <li v-for="(item, index) in personalData" :key="index">{{ item.label }}: {{ item.value }}</li>
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
          { label: 'Edad', value: '24 años' },
          { label: 'Ciudad de Origen', value: 'Antofagasta' },
          { label: 'Correo Electrónico', value: 'andrea.saldana@alumnos.ucn.cl' }
        ]
      }
    }
  }
  </script>

  <style scoped>
  /* Agrega aquí estilos específicos para este componente si son necesarios */
  </style>
