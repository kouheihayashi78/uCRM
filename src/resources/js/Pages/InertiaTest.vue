<script setup>
    import { Link, router } from '@inertiajs/vue3';
    import { ref } from 'vue';

    const newTitle = ref('')
    const newContent = ref('')

    const submitForm = () => {
        router.post(route('store'), {
            title: newTitle.value,
            content: newContent.value,
        })
    }
</script>
<template>
    <Link href="/" class="block">ダッシュボード</Link></br>
    <Link :href="route('index')" class="block">名前付きルート</Link>
    <Link :href="route('show', { id: 1 })"></Link>

    <div class="mb-8">
        <input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}<br>
        <input type="text" name="newContent" v-model="newContent">{{ newContent }}<br>
        <button @click="submitForm">DB保存テスト</button>
    </div>
</template>
