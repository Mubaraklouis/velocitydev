import "./bootstrap";
import "../css/app.css";

import { createApp, h, DefineComponent } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";
import { initFlowbite } from "flowbite";

const appName: string = import.meta.env.VITE_APP_NAME || "malga";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,

    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob<DefineComponent>("./Pages/**/*.vue")
        ),

    setup({ el, App, props, plugin }) {
        const vueApp = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue);

        // Mount the Vue app
        vueApp.mount(el);

        // Reinitialize Flowbite after Vue mounts
        setTimeout(() => initFlowbite(), 100);
    },

    progress: {
        color: "#4B5563",
    },
});

// Reinitialize Flowbite after every Inertia navigation
document.addEventListener("inertia:render", () => {
    setTimeout(() => initFlowbite(), 100);
});
