import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                "laravel/resources/css/app.css",
                "laravel/resources/js/app.js",
                "laravel/vendor/taba/crm/src/resources/css/admin.css",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
