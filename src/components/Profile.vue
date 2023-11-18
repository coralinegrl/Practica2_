<template>
    <div>
      <TopBar
        imageSrc="images/yo.jpeg"
        fullName="Andrea Saldaña Cavour"
        title="Creación de un Perfil Personal en HTML y Estilización con CSS"
      />

      <Description
        description="Mi nombre es Andrea Saldaña, soy estudiante de Ingeniería Civil en Computación e Informática de la UCN."
      />

      <PersonalData />

      <Hobbies>

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
            profileData: null,
        };
    },
    mounted() {
        this.fetchProfileData();
    },
    methods: {
        fetchProfileData() {
            axios.get('/api/profile')
                .then(response => {
                    this.profileData = response.data;
                })
                .catch(error => {
                    console.error('Error al obtener el perfil:', error);
                });
        }
    }

};
</script>

<style>
  /* Aquí van los estilos específicos para Profile.vue */
</style>
