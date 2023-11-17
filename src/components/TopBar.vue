<template>
    <header>
      <div class="container">
        <!-- Usa enlace dinámico para la fuente de la imagen y alt para mejorar la accesibilidad -->
        <img :src="imageSrc" :alt="altText" />
        <div class="header-content">
          <!-- fullName y title son propiedades que se pasan al componente -->
          <h1>{{ fullName }}</h1>
          <p>{{ title }}</p>
        </div>
      </div>
    </header>
  </template>

  <script>
  export default {
    name: 'TopBar',
    props: {
      imageSrc: {
        type: String,
        required: true // Marca la imagen como requerida
      },
      fullName: {
        type: String,
        default: 'Andrea Saldaña Cavour' // Proporciona un valor por defecto
      },
      title: {
        type: String,
        default: 'Creación de un Perfil Personal en HTML y Estilización con CSS' // Proporciona un valor por defecto
      },
      altText: {
        type: String,
        default: 'Andrea Saldaña' // Proporciona un valor por defecto para el alt text
      }
    }
  }
  </script>

  <style scoped>
  .container {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }

  /* Añade estilos para img y .header-content si es necesario */
  </style>
