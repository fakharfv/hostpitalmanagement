import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/assets/css/style.css', 'resources/assets/js/main.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
          'tw-elements': 'resources/js/app.js',
        },
    },
});
