import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/sass/vjs.scss', 'resources/js/app.js', 'resources/js/modules/search.js', 'resources/js/modules/verify.js', 'resources/js/modules/gallery.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
