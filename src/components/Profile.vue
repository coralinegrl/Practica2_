<template>
    <div>
      <TopBar
        imageSrc="yo.jpeg"
        fullName="Andrea Saldaña Cavour"
        title="Creación de un Perfil Personal en HTML y Estilización con CSS"
      />

      <Description
        description="Mi nombre es Andrea Saldaña, soy estudiante de Ingeniería Civil en Computación e Informática de la UCN."
      />

      <PersonalData />

      <Hobbies>
        <!-- Aquí podrías pasar cada Hobby como un componente individual o manejarlos dentro de Hobbies.vue -->
      </Hobbies>

      <Frameworks />

      <SocialLinks />
    </div>
</template>

<script>
import TopBar from './TopBar.vue';
import Description from './Description.vue';
import PersonalData from './PersonalData.vue';
import Hobbies from './Hobbies.vue';
import Frameworks from './Frameworks.vue';
import SocialLinks from './SocialLinks.vue';
import axios from 'axios';

export default {
    name: 'Profile',
    components: {
      TopBar,
      Description,
      PersonalData,
      Hobbies,
      Frameworks,
      SocialLinks
    },
    data() {
        return {
            profileData: null, // Almacenará los datos del perfil
        };
    },
    mounted() {
    // Realiza una solicitud GET a la API
        axios.get('/api/profile')
            .then(response => {
                this.profileData = response.data;
            })
            .catch(error => {
                console.error('Error al obtener el perfil:', error);
            });
    },

    // Aquí puedes agregar data, methods, computed properties, etc., si son necesarios
};
</script>

<style scoped>
  /* Aquí van los estilos específicos para Profile.vue */
</style>
