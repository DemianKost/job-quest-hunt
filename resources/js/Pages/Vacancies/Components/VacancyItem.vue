<template>
    <li class="flex justify-between gap-x-6 py-5">
        <div class="flex min-w-0 gap-x-4">
            <div class="min-w-0 flex-auto">
                <h2 class="text-xl font-semibold leading-6 text-gray-900">{{ vacancy.title }}</h2>
                <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ vacancy.short_description }}</p>
            </div>
        </div>
        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
            <p class="mt-1 text-xs leading-5 text-gray-500">{{ vacancy.created_at }}</p>
        </div>
    </li>
</template>

<script setup>
    import { defineProps } from 'vue';

    defineProps({
        vacancy: {
            required: true,
            type: Object
        }
    });
</script>