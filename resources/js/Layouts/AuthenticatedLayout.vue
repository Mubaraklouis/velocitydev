<script setup lang="ts">
import { ref } from "vue";
import { Link, router } from "@inertiajs/vue3";
import UserProfileAvator from "@/Pages/users/partials/userProfileAvator.vue";

const showingNavigationDropdown = ref(false);



//loging out a user

const logout = () => {
    router.post('/logout')
}

</script>

<template>

    <Head title="Dashboard" />

    <div class="flex h-screen bg-gray-100">
        <!-- sidebar -->
        <div class="hidden md:flex flex-col w-64 bg-gray-800">
            <div class="flex items-center justify-center h-16 bg-gray-900">
                <Link href="/"> <span class="text-white font-bold uppercase">Malga Dashboard</span></Link>
            </div>
            <div class="flex flex-col flex-1 overflow-y-auto">
                <nav class="flex-1 px-2 py-4 bg-gray-800">


                    <Link :href="route('notification.index')"
                        class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">

                        <img class="w-5 h-5 mr-3 " src="/notification.png"/>
             Notifications
                    </Link>

                    <Link :href="route('contact.index')"
                        class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                    </svg>
                    Contacts
                    </Link>
                    <Link :href="route('users.index')"
                        class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                    </svg>
                    Users
                    </Link>
                    <Link :href="route('services.index')"
                        class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                    </svg>

                    Services
                    </Link>

                    <Link :href="route('about.create')" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                        </svg>

                        About
                    </Link>
                    <UserProfileAvator class="items-bottom" />
                </nav>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex flex-col flex-1 overflow-y-auto">
            <div class="flex items-center justify-between h-16 p-10 bg-white border-b border-gray-200">
                <div class="flex items-center px-4">
                    <button class="text-gray-500 focus:outline-none focus:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <input class="mx-4 w-full border rounded-md px-4 py-2" type="text" placeholder="Search" />
                </div>


                <div class="flex items-center pr-4 mr-20">
                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                        data-dropdown-placement="bottom-start"
                        class="w-14 h-14 rounded-full cursor-pointer border-2 border-indigo-600 "
                        :src="$page.props.auth.user.profile_picture" alt="User dropdown" />

                    <!-- Dropdown menu -->
                    <div id="userDropdown"
                        class=" border border-indigo-600   z-10 hidden bg-[#7971E7] divide-y divide-slate-500 rounded-lg shadow-sm  dark:bg-gray-700 ">
                        <div class="px-4 py-3 text-sm  text-white">
                            <div>{{ $page.props.auth.user.name }}</div>
                            <div class="font-medium truncate">
                                {{ $page.props.auth.user.email }}
                            </div>
                        </div>
                        <ul class="py-2 text-sm text-white" aria-labelledby="avatarButton">
                            <li>
                                <Link :href="route('dashboard')"
                                    class="block px-4 py-2 text-white hover:bg-[#9f99f7] dark:hover:bg-gray-600 dark:hover:text-white">
                                Dashboard</Link>
                            </li>

                            <li>
                                <Link :href="route('profile.edit')"
                                    class=" text-white block px-4 py-2 hover:bg-[#9f99f7] dark:hover:bg-gray-600 dark:hover:text-white">
                                Profile</Link>
                            </li>
                        </ul>
                        <div class="py-1">
                            <Link @click="logout" href="#"
                                class="text-white block px-4 py-2 text-sm text-gray-700 hover:bg-[#9f99f7] dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Sign out</Link>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-10">
                <div class="m-6">
                    <div class="flex flex-wrap -mx-6">
                        <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                            <div class="flex items-center px-5 py-6 shadow-md border-1 rounded-md bg-slate-200">
                                <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                                    <svg class="h-8 w-8 text-white" viewBox="0 0 28 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>

                                <div class="mx-5">
                                    <h4 class="text-2xl font-semibold text-gray-700">
                                        {{ $page.props.usersCount }}
                                    </h4>
                                    <div class="text-gray-500">Total Users</div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                            <div class="flex items-center px-5 py-6 shadow-md border-1 rounded-md bg-slate-200">
                                <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                                    <img class="w-8" src="/contacts.png" alt="" />
                                </div>

                                <div class="mx-5">
                                    <h4 class="text-2xl font-semibold text-gray-700">
                                        {{ $page.props.contactsCount }}
                                    </h4>
                                    <div class="text-gray-500">
                                        Total Contacts
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                            <div class="flex items-center px-5 py-6 shadow-md border-1 rounded-md bg-slate-200">
                                <div class="p-3 rounded-full bg-pink-600 bg-opacity-75">
                                    <img class="w-8" src="/posts.png" alt="" />
                                </div>

                                <div class="mx-5">
                                    <h4 class="text-2xl font-semibold text-gray-700">
                                        678
                                    </h4>
                                    <div class="text-gray-500">Total Post</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <slot />

            </div>
        </div>
    </div>
</template>
