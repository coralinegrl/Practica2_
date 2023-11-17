<template>
    <section class="education container">
      <h2 class="text-2xl font-semibold mb-4">{{ heading }}</h2>
      <ul>
        <li v-for="(item, index) in personalData" :key="index" class="mb-2">
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
                { label: 'Nombre', value: 'Andrea' },
                { label: 'Apellido', value: 'Saldaña' },
                { label: 'Edad', value: '24 años' },
                { label: 'Ciudad de Origen', value: 'Antofagasta' },
                { label: 'País', value: 'Chile' },
                { label: 'Correo Electrónico', value: 'andrea.saldana@alumnos.ucn.cl' }

            ]
        }
    }
}
</script>

<style scoped>
  /* Agrega aquí estilos específicos para este componente si son necesarios */
</style>
