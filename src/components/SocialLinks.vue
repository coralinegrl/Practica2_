<template>
    <section class="social container mx-auto px-4 py-6">
        <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-gray-800 text-center">{{ heading }}</h2>
        <ul class="flex flex-col items-center">
            <li v-for="(socialLink, index) in socialLinksList" :key="index" class="mb-4">
                <a :href="socialLink.url" target="_blank" class="social-link flex items-center">
                    <img :src="socialLink.icon" class="icon" alt="" />
                    <span>{{ socialLink.name }}</span>
                </a>
            </li>
        </ul>
    </section>
</template>


<script>
export default {
    name: 'SocialLinks',
    data() {
        return {
            heading: 'Redes Sociales',
            socialLinksList: [
                { name: 'Instagram', url: 'https://www.instagram.com/coralinegrl', icon: 'https://1000marcas.net/wp-content/uploads/2019/11/Instagram-Logo-2016.png' },
                { name: 'Twitter', url: 'https://twitter.com/coralinegrl', icon: 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Logo_of_Twitter.svg/512px-Logo_of_Twitter.svg.png' },
                { name: 'LinkedIn', url: 'https://www.linkedin.com/in/andrea-salda%C3%B1a-cavour-324883229/', icon: 'https://cdn1.iconfinder.com/data/icons/logotypes/32/circle-linkedin-512.png' },
            ]
        };
    }
}
</script>

<style>
.social-link .icon{
    color: #007bff; /* Azul para enlaces */
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
    height: 20px;
    width: 30px;
    margin-right: 10px;
}

.social-link:hover {
    color: #0056b3; /* Azul más oscuro al pasar el mouse */
    text-decoration: underline;
}
</style>
