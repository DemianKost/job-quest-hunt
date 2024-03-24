<template>
    <div class="container mx-auto py-5">
        <div class="w-full">
            <h2 class="text-2xl text-gray-900 font-semibold">Discover jobs for you</h2>
        </div>
        <div class="grid grid-cols-3 gap-4">

            

        </div>
    </div>
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