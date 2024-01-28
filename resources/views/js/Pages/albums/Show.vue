<template>
    <div>
        <h1>{{ album.title }}</h1>
        <!-- Détails de l'album -->
    </div>
</template>

<script>
export default {
    props: {
        album: Object
    }
}
</script>
