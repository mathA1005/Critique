<template>
    <div>
        <h1>Liste des Films</h1>
        <ul>
            <li v-for="movie in movies" :key="movie.id">
                {{ movie.title }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        movies: Array
    }
}
</script>
