import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/guest.css',
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/sass/guest.scss',
            ],
            refresh: true,
        }),
    ],
});
