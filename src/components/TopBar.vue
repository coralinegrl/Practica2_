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
        required: true
      },
      fullName: {
        type: String,
        default: 'Andrea Saldaña Cavour'
      },
      title: {
        type: String,
        default: 'Creación de un Perfil Personal en HTML y Estilización con CSS' // Proporciona un valor por defecto
      },
      altText: {
        type: String,
        default: 'Andrea Saldaña'
      }
    }
}
</script>

<style>
.container img {
    width: 100px;
    height: 130px;
    border-radius: 50%;
    margin-bottom: 1rem;
}
.header-content {
    text-align: center;

}
.bg-navy {
    background-color: #0D1B2A;
}
</style>


