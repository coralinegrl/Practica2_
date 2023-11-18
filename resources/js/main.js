import 'tailwindcss/tailwind.css';
import { createApp } from 'vue';
import Home from '../../src/components/Home.vue';
import App from '../../src/App.vue'; // Sube dos niveles y luego entra a src/
import router from '../../src/router'; // Sube dos niveles y luego entra a src/
import axios from 'axios';





const app = createApp(App);
app.use(router);
app.mount('#app');

app.component('home', Home);

axios.get('/api/profile')
    .then(response => {
        const profileData = response.data;
        app.config.globalProperties.$profileData = profileData;
    })
    .catch(error => {
        console.error('Error al obtener el perfil:', error);
    });
