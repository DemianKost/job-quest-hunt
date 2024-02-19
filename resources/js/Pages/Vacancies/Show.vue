<template>
    <div class="container mx-auto py-10 mt-14 flex gap-x-4">
        <div class="w-9/12 px-4 pr-10 border-r border-gray-200">
            <h1 class="text-4xl font-bold mb-4">{{ vacancy.data.title }}</h1>
            <div v-if="vacancy.data.tags" class="categories mb-4 flex items-center gap-x-3 gap-y-4">
                <span v-for="tag in vacancy.data.tags" :key="`tag_${tag.name}`" class="text-sm bg-gray-200 px-3 py-1 rounded-full">{{ tag.name }}</span>
            </div>
            <div class="content">
                {{ vacancy.data.description }}
            </div>
        </div>
        <div class="w-3/12 px-4">
            <VacancyAuthor
                :author="vacancy.data.author"
            />
        </div>
    </div>
</template>

<script setup>
    import { defineProps } from 'vue';
    import VacancyAuthor from './Components/VacancyAuthor.vue';

    defineProps({
        vacancy: {
            required: true,
            type: Object
        }
    });
</script>