<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <div class="min-h-screen bg-gray-100">
    <nav class="bg-blue-600 text-white p-4 flex gap-6 shadow-md">
      <Link href="/" class="hover:underline">Home</Link>
      <Link href="/bidders" class="hover:underline">Bidders</Link>
      <Link href="/cars" class="hover:underline">Cars</Link>
    </nav>
    <div class="p-6">
      <slot />
    </div>
  </div>
</template>
