<template>
    <div>
        <h1>{{ movie.title }}</h1>
        <!-- Détails du film -->
    </div>
</template>

<script>
export default {
    props: {
        movie: Object
    }
}
</script>
