<template>
    <div>
      <h1>Bienvenido</h1>
      <button @click="redirectToPortfolio" class="mt-4 px-4 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition duration-300 ease-in-out">
        Ir al portafolio
      </button>
    </div>
</template>


<script>
export default {
  methods: {
    redirectToPortfolio() {
      // Redirige a la ruta "/portfolio"
      this.$router.push('/portfolio');
    },
  },
};
</script>

<style scoped>
.redirectToPortfolio {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f5f5f5;
}

.btn {
    padding: 1rem 2rem;
    border-radius: 0.5rem;
    background-color: #4caf50;
    color: #fff;
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: #388e3c;
}
</style>

