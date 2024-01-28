<template>
    <div>
        <h1>Liste des Livres</h1>
        <ul>
            <li v-for="book in books" :key="book.id">
                {{ book.title }} - {{ book.author }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        books: Array
    }
}
</script>
