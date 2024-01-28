<template>
    <div>
        <h1>Liste des Albums</h1>
        <ul>
            <li v-for="album in albums" :key="album.id">
                {{ album.title }} - {{ album.artist }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        albums: Array
    }
}
</script>
