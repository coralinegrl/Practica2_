<template>
    <div class="interest">
      <img :src="imageSrc" :alt="title" width="100" />
      <p>{{ title.toUpperCase() }}</p>
      <div class="description">
        <p>{{ description }}</p>
      </div>
    </div>
  </template>

  <script>
  export default {
    name: 'Interest',
    props: {
      title: String,
      description: String,
      imageSrc: String
    }
  }
  </script>


<style scoped>
.hobbies {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.hobbies {
    width: 100px;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.hobbies p {
    margin-bottom: 0px;
}

.hobbies img {
    width: 100%;
    max-width: 100px;
    height: 100px;
}

