import { createApp } from 'vue';
import App from '../../src/App.vue'; // Sube dos niveles y luego entra a src/
import router from '../../src/router'; // Sube dos niveles y luego entra a src/

const app = createApp(App);
app.use(router);
app.mount('#app');
