<template>
    <div>
      <TopBar
        imageSrc="path_to_yo.jpeg"
        fullName="Andrea Saldaña Cavour"
        title="Creación de un Perfil Personal en HTML y Estilización con CSS"
      />
      <!-- Repetir este proceso para los otros componentes, pasando los datos como props -->
      <Interests>
        <Interest
          v-for="interest in interests"
          :key="interest.id"
          :title="interest.title"
          :description="interest.description"
          :imageSrc="interest.imageSrc"
        />
      </Interests>
      <!-- ... -->
    </div>
  </template>

  <script>
  import TopBar from './components/TopBar.vue';
  import Hobbies from './components/Hobbies.vue';
  import Hobby from './components/Hobby.vue';
  import Profile from './components/Profile.vue';
  import Description from './components/Description.vue';
  import Portfolio from './components/Portfolio.vue';
  import Skills from './components/Skills.vue';
  import SocialLinks from './components/SocialLinks.vue';
  import PersonalData from './components/PersonalData.vue';

  export default {
    name: 'App',
    components: {
        TopBar,
        Hobby,
        Hobbies,
        Profile,
        Description,
        Portfolio,
        Skills,
        SocialLinks,
        PersonalData
    },
    data() {
      return {
        // Suponiendo que tienes una lista de intereses
        hobbies: [
          { id: 1, title: 'Escuchar música', description: 'Me gusta escuchar música de todo tipo, pero principalmente escucho rock y pop.', imageSrc: 'musica.jpg' },
            { id: 2, title: 'Jugar Videojuegos', description: 'Me gusta pasar mi tiempo libre jugando videojuegos en mi PC.', imageSrc: 'videojuegos.jpg' },
            { id: 3, title: 'Dormir', description: 'Me gusta levantarme tarde.', imageSrc: 'dormir.jpg' },
            { id: 4, title: 'Hacer yoga', description: 'Hago yoga todos los domingos.', imageSrc: 'yoga.jpg' }
        ]
        // ... otros datos para otros componentes
      };
    }
  }
  </script>
