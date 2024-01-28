<template>
    <div>
        <h1>{{ book.title }}</h1>
        <!-- Détails du livre -->
    </div>
</template>

<script>
export default {
    props: {
        book: Object
    }
}
</script>
