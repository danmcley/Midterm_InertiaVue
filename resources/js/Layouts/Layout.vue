<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <div class="min-h-screen bg-gradient-to-r from-yellow-100 to-green-500">
    <nav class="bg-gradient-to-r from-blue-700 to-red-900 text-white p-4 flex justify-between items-center shadow-lg">
      <div class="text-2xl font-bold tracking-wider flex items-center gap-2">
        🚘 <span class="drop-shadow-md">Car Dealer</span>
      </div>

      <div class="flex gap-6 text-lg">
        <Link 
          href="/" 
          class="relative hover:text-yellow-400 transition duration-300 before:absolute before:bottom-0 before:left-0 before:w-0 before:h-1 before:bg-yellow-400 before:transition-all before:duration-300 hover:before:w-full"
        >Home</Link>
        <Link 
          href="/bidders" 
          class="relative hover:text-yellow-400 transition duration-300 before:absolute before:bottom-0 before:left-0 before:w-0 before:h-1 before:bg-yellow-400 before:transition-all before:duration-300 hover:before:w-full"
        >Bidders</Link>
        <Link 
          href="/cars" 
          class="relative hover:text-yellow-400 transition duration-300 before:absolute before:bottom-0 before:left-0 before:w-0 before:h-1 before:bg-yellow-400 before:transition-all before:duration-300 hover:before:w-full"
        >Cars</Link>
      </div>
    </nav>
    
    <div class="p-6">
      <slot />
    </div>
  </div>
</template>
