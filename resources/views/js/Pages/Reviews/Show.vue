<template>
    <div>
        <h1>Critique par {{ review.user.name }}</h1>
        <!-- Détails de la critique -->
        <p>{{ review.comment }}</p>
        <p>Évaluation : {{ review.rating }}</p>
    </div>
</template>

<script>
export default {
    props: {
        review: Object
    }
}
</script>
