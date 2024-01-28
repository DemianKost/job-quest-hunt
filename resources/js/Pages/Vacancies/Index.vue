<template>
    <div class="container mx-auto py-5">
        <h1 class="text-3xl font-semibold">Vacancies</h1>
    </div>
</template>

<script setup>
    import { defineProps } from 'vue';

    defineProps({
        vacancies: {
            required: true,
            type: Object
        }
    })
</script>