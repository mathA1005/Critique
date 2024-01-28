<template>
    <div>
        <h1>Liste des Séries</h1>
        <ul>
            <li v-for="serie in series" :key="serie.id">
                {{ serie.title }} - {{ serie.creator }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        series: Array
    }
}
</script>
