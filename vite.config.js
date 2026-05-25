import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
                'resources/assets/logo.webp',
                'resources/assets/hero.webp',
                'resources/assets/e-car.webp',
                'resources/assets/mobile-screens/1.webp',
                'resources/assets/mobile-screens/2.webp',
                'resources/assets/mobile-screens/3.webp',
            ],
            refresh: true,
        }),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
