<script setup>
    import { ref, computed } from 'vue';
    import Layout from '../Layouts/Layout.vue';

    const props = defineProps({ cars: Array });

    const search = ref("");
    
    const filteredCars = computed(() =>
        search.value ? props.cars.filter(c => 
            c.make.toLowerCase().includes(search.value.toLowerCase()) || 
            c.model.toLowerCase().includes(search.value.toLowerCase())
        ) : props.cars
    );
</script>

  
<template>
    <Layout>
      <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-semibold text-gray-700 mb-4">Cars</h1>
  
        <input 
          v-model="search" 
          placeholder="Search cars..." 
          class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300"
        />
  
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
          <div 
            v-for="car in filteredCars" 
            :key="car.id" 
            class="bg-white shadow-md p-4 rounded-lg"
          >
            <img 
              v-if="car.image" 
              :src="'/storage/' + car.image" 
              alt="Car Image" 
              class="w-full h-40 object-cover rounded-lg mb-3"
            >
            <p class="font-bold text-lg">{{ car.make }} {{ car.model }}</p>
            <p class="text-gray-500">Year: {{ car.year }}</p>
            <p class="text-gray-500">Miles: {{ car.miles }}</p>
          </div>
        </div>
      </div>
    </Layout>
</template>

  