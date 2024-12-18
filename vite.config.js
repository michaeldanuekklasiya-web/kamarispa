import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import flowbitePlugin from 'flowbite/plugin'; // Gunakan "import" alih-alih "require"

export default defineConfig({
    plugins: [
        flowbitePlugin, // Panggil flowbite plugin langsung

        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
