<template>

layout backup
<div class=" bg-[#FCE2E2] min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
        <div>
            <Link href="/">
                <!-- <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" /> -->
            </Link>
        </div>

        <div
            class="bg-[#fffaf2]  w-full sm:max-w-md mt-6 px-6 py-4 hadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
