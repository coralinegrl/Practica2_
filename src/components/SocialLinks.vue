<template>
    <section class="social container">
      <h2>{{ heading }}</h2>
      <ul>
        <li v-for="(socialLink, index) in socialLinksList" :key="index">
          <a :href="socialLink.url" target="_blank">{{ socialLink.name }}</a>
        </li>
      </ul>
    </section>
  </template>

  <script>
  export default {
    name: 'SocialLinks',
    data() {
      return {
        heading: 'Redes Sociales',
        socialLinksList: [
          { name: 'Instagram', url: 'https://www.instagram.com/coralinegrl' },
          { name: 'Twitter', url: 'https://twitter.com/coralinegrl' },
          { name: 'LinkedIn', url: 'https://www.linkedin.com/in/andrea-salda%C3%B1a-cavour-324883229/' },
          // Añade más enlaces de redes sociales aquí si es necesario
        ]
      };
    }
  }
  </script>

  <style scoped>
  /* Estilos específicos para SocialLinks */
  .container {
    /* Tus estilos para el contenedor */
  }

  ul {
    list-style: none;
    padding: 0;
  }

  li {
    margin-bottom: 10px;
  }

  a {
    color: #007bff;
    text-decoration: none;
  }

  a:hover {
    text-decoration: underline;
  }
  </style>
