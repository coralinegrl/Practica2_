<template>
    <div class="redirectToPortfolio">
      <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Bienvenido</h1>
        <button @click="redirectToPortfolio" class="btn">
          Ir al portafolio
        </button>
      </div>
    </div>
</template>

<script>
export default {
    methods: {
      redirectToPortfolio() {
        this.$router.push('/portfolio');
      },
    },
};
</script>

<style>
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
    background-color: #10B981; /* Tailwind CSS green-500 */
    color: #fff;
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: #059669; /* Tailwind CSS green-600 */
}
</style>
