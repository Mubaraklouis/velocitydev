<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Link } from '@inertiajs/vue3';
PrimaryButton
</script>
<template>

<nav class="bg-[#FCE2E2] dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <Link href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Malga</span>
  </Link>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

<PrimaryButton>
<Link :href="route('newsletter.index')">
    subscribe
</Link>
</PrimaryButton>

      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-[#2E297D] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#FCE2E2]  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 px-3 text-white font-bold rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
      </li>
      <li>
        <Link :href="route('about.index')" class="block py-2 px-3 text-white font-bold md:text-black rounded-sm hover:bg-[#362F95] md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</Link>
      </li>
      <li>
        <Link href="/services" class="block py-2 px-3 text-white font-bold md:text-black rounded-sm hover:bg-[#362F95] md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</Link>
      </li>
      <li>
        <Link :href="route('portfolio.index')" class="block py-2 px-3 text-white font-bold md:text-black rounded-sm hover:bg-[#362F95] md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Our Portfolio</Link>
      </li>
      <li>
        <Link href="register" class="block py-2 px-3 text-white font-bold md:text-black rounded-sm hover:bg-[#362F95] md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sign up</Link>
      </li>
      <li><Link href="/login" class="block py-2 px-3 text-white font-bold md:text-black rounded-sm hover:bg-[#362F95] md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sign in</Link></li>
    </ul>
  </div>
  </div>
</nav>

</template>
