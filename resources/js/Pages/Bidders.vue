<script setup>
  import { ref, computed } from 'vue';
  import Layout from '../Layouts/Layout.vue';

  const props = defineProps({ bidders: Array });

  const search = ref("");

  const filteredBidders = computed(() =>
    search.value ? props.bidders.filter(b => 
      (b.first_name + ' ' + b.last_name).toLowerCase().includes(search.value.toLowerCase())
    ) : props.bidders
  );
</script>

<template>
    <Layout>
      <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-semibold text-gray-700 mb-4">Bidders</h1>
        
        <input 
          v-model="search" 
          placeholder="Search bidders..." 
          class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300"
        />

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
          <div 
            v-for="bidder in filteredBidders" 
            :key="bidder.id" 
            class="bg-white shadow-md p-4 rounded-lg"
          >
            <p class="font-bold text-lg">{{ bidder.first_name }} {{ bidder.last_name }}</p>
            <p class="text-gray-500">{{ bidder.address }}</p>
            <p class="text-gray-500">{{ bidder.email }}</p>
          </div>
        </div>
      </div>
    </Layout>
</template>
