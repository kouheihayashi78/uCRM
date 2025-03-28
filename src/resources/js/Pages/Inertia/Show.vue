<script setup>
    import { Link } from '@inertiajs/vue3';
    defineProps({
        id: Number
    })
</script>
<template>
    <p>{{ id }}</p>
</template>
