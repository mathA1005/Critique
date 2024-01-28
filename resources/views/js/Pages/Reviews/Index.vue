<template>
    <div>
        <h1>Liste des Critiques</h1>
        <ul>
            <li v-for="review in reviews" :key="review.id">
                {{ review.comment }} - Évalué : {{ review.rating }}
                <!-- Vous pouvez ajouter plus de détails selon votre modèle Review -->
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        reviews: Array
    }
}
</script>
