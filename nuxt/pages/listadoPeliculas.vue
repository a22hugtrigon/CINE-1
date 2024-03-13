<template>
    <div>
        <Peliculas/>
    </div>
</template>

<script>
import Peliculas from '~/components/Peliculas.vue';
    export default {
        components: {
            Peliculas,
        },
        data() {
            return {
                peliculas: [],
            };
        },
        async mounted() {
    try {
        const res = await fetch('http://127.0.0.1:8000/api/peliculas');
        if (!res.ok) {
            throw new Error(`Error al obtener las películas: ${res.status} - ${res.statusText}`);
        }
        const data = await res.json();
        this.peliculas = data;
    } catch (error) {
        console.error('Error al obtener las películas', error.message);
    }
}
  };
</script>

<style lang="scss" scoped>

</style>