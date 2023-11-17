import 'tailwindcss/tailwind.css';
import { createApp } from 'vue';
import App from '../../src/App.vue'; // Sube dos niveles y luego entra a src/
import router from '../../src/router'; // Sube dos niveles y luego entra a src/
import axios from 'axios';



const app = createApp(App);
app.use(router);
app.mount('#app');

axios.get('/api/profile')
    .then(response => {
        const profileData = response.data;

        // Ahora, puedes utilizar profileData para manipular los datos en tu aplicación Vue
        // Por ejemplo, asignarlos a una variable de datos o usarlos en un componente
        app.config.globalProperties.$profileData = profileData;
    })
    .catch(error => {
        console.error('Error al obtener el perfil:', error);
    });
