<template>
    <div class="vacancy__author px-4 py-2">
        <div class="flex flex-col items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/832px-No-Image-Placeholder.svg.png" class="w-20 h-20 rounded-full object-cover mb-4" />
            <h2 class="text-lg font-semibold">{{ author.name }}</h2>
        </div>
    </div>
</template>

<script setup>
    import { defineProps } from 'vue';

    let props = defineProps({
        author: {
            type: Object,
            required: true
        }
    });
</script>