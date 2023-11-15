<template>
    <div id="app">
      <TopBar
        imageSrc="/path/to/yo.jpeg"
        fullName="Andrea Saldaña Cavour"
        title="Creación de un Perfil Personal en HTML y Estilización con CSS"
      />

      <Description
        description="Mi nombre es Andrea Saldaña, soy estudiante de Ingeniería Civil en Computación e Informática de la UCN."
      />

      <PersonalData
        age="24 años"
        city="Antofagasta"
        country="Chile"
        email="andrea.saldana@alumnos.ucn.cl"
      />

      <Hobbies
        v-for="hobby in hobbies"
        :key="hobby.id"
        :title="hobby.title"
        :description="hobby.description"
        :imageSrc="hobby.imageSrc"
      />

      <Skills :skills="skills" />

      <SocialLinks :socialMedia="socialMedia" />
    </div>
  </template>

  <script>
  import TopBar from './components/TopBar.vue';
  import Description from './components/Description.vue';
  import PersonalData from './components/PersonalData.vue';
  import Hobby from './components/Interest.vue';
  import Hobbies from './components/Interests.vue';
  import Skills from './components/Skills.vue';
  import SocialLinks from './components/SocialLinks.vue';

  export default {
    name: 'App',
    components: {
      TopBar,
      Description,
      PersonalData,
      Hobby,
      Hobbies,
      Skills,
      SocialLinks
    },
    data() {
      return {
        hobbies: [
          {
            id: 1,
            title: 'Escuchar música',
            description: 'Me gusta escuchar música de todo tipo, pero principalmente escucho rock y pop.',
            imageSrc: '/public/images/musica.jpg'
          },
          {
            id: 2,
            title: 'Jugar videojuegos',
            description: 'Me gusta pasar mi tiempo libre jugando videojuegos en mi PC.',
            imageSrc: '/public/images/videojuegos.jpg'
          },
          // ... otros intereses
        ],
        skills: [
          {
            id: 1,
            technology: 'HTML',
            level: 'Básico',
            year: 2023
          },
          {
            id: 2,
            technology: 'CSS',
            level: 'Básico',
            year: 2023
          },
          // ... otras habilidades
        ],
        socialMedia: [
          {
            name: 'Instagram',
            url: 'https://www.instagram.com/coralinegrl'
          },
          {
            name: 'Twitter',
            url: 'https://twitter.com/coralinegrl'
          },
          {
            name: 'LinkedIn',
            url: 'https://www.linkedin.com/in/andrea-salda%C3%B1a-cavour-324883229/'
          },
          // ... otras redes sociales
        ]
      };
    }
  }
  </script>
