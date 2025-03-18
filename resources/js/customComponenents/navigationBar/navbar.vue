<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <nav class="bg-[#FCE2E2] dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <!-- Logo -->
      <Link href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Malga</span>
      </Link>

      <!-- Mobile Menu Button -->
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <PrimaryButton>
          <Link :href="route('newsletter.index')">Subscribe</Link>
        </PrimaryButton>

        <Menu as="div" class="relative md:hidden">
          <MenuButton class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open main menu</span>
            <Bars3Icon v-if="!open" class="w-5 h-5" />
            <XMarkIcon v-else class="w-5 h-5" />
          </MenuButton>

          <!-- Mobile Menu Items -->
          <MenuItems class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg">
            <MenuItem v-slot="{ active }">
              <Link href="/" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Home</Link>
            </MenuItem>
            <MenuItem v-slot="{ active }">
              <Link :href="route('about.index')" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">About</Link>
            </MenuItem>
            <MenuItem v-slot="{ active }">
              <Link href="/services" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Services</Link>
            </MenuItem>
            <MenuItem v-slot="{ active }">
              <Link :href="route('portfolio.index')" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Our Portfolio</Link>
            </MenuItem>
            <MenuItem v-slot="{ active }">
              <Link href="/register" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Sign up</Link>
            </MenuItem>
            <MenuItem v-slot="{ active }">
              <Link href="/login" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Sign in</Link>
            </MenuItem>
          </MenuItems>
        </Menu>
      </div>

      <!-- Desktop Menu -->
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-[#2E297D] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#FCE2E2] dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <Link href="/" class="block py-2 px-3 text-white font-bold rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-blue-500" aria-current="page">Home</Link>
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
            <Link href="/register" class="block py-2 px-3 text-white font-bold md:text-black rounded-sm hover:bg-[#362F95] md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sign up</Link>
          </li>
          <li>
            <Link href="/login" class="block py-2 px-3 text-white font-bold md:text-black rounded-sm hover:bg-[#362F95] md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sign in</Link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>


