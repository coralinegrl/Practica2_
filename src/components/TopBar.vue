<template>
    <header class="bg-navy h-64 flex flex-col items-center justify-center"> <!-- Fondo azul marino, altura y centra todo vertical y horizontalmente -->
        <div class="container mx-auto px-4 flex flex-col items-center justify-center"> <!-- Centrado y padding -->
            <img :src="imageSrc" :alt="altText" class="mb-4 w-40 h-40 rounded-full"/> <!-- Imagen redonda con margen abajo y más grande -->
            <div class="header-content text-white text-center"> <!-- Texto blanco y centrado -->
                <h1 class="text-2xl font-bold">{{ fullName }}</h1>
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

<style>
.container img {
    width: 100px; /* O el tamaño que prefieras */
    height: 130px; /* Asegúrate de que width y height tengan el mismo valor para que sea redonda */
    border-radius: 50%; /* Esto hará que la imagen sea completamente redonda */
    margin-bottom: 1rem; /* Espacio entre la imagen y el texto */
}
.header-content {
    text-align: center; /* Centra el texto horizontalmente */

}
.bg-navy {
    background-color: #0D1B2A;
}
</style>


