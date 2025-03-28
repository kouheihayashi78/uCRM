<script setup>
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';
defineProps({
    errors: Object
})
const form = reactive({
    title: null,
    content: null
})

const submitForm = () => {
    router.post(route('store'), {title: form.title, content:form.content})
}

</script>
<template>
    <form @submit.prevent="submitForm">
        <input type="text" name="title" class="block" v-model="form.title">
        <span v-if="errors.title" class="block text-red-100">{{ errors.title }}</span>
        <input type="text" name="content" class="block" v-model="form.content">
        <span v-if="errors.content" class="block text-red-100">{{ errors.content }}</span>
        <button type="submit">DB登録</button>
    </form>
</template>
