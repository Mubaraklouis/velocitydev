<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import dashboard from '@/Components/dashboard.vue';
import UsersTable from '@/customComponenents/users/usersTable.vue';
import TestimonialTable from './Client/testimonials/partials/testimonialTable.vue';
</script>

<template>
  <AuthenticatedLayout>
    <!-- users table and information -->

   <TestimonialTable/>
   <dashboard/>
   <div></div>

  </AuthenticatedLayout>
</template>
