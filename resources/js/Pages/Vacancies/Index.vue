<template>
    <div class="container mx-auto py-5">
        <h1 class="text-3xl font-semibold mb-10">Vacancies</h1>

        <ul role="list" class="divide-y divide-gray-100">
            <VacancyItem
                v-for="vacancy in vacancies.data"
                :key="vacancy.id"
                :vacancy="vacancy"
            />
        </ul>
    </div>
</template>

<script setup>
    import { defineProps } from 'vue';
    import VacancyItem from './Components/VacancyItem.vue';

    defineProps({
        vacancies: {
            required: true,
            type: Object
        }
    })
</script>