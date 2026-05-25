import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
                'resources/assets/logo.png',
                'resources/assets/hero.jpeg',
                'resources/assets/e-car.jpeg',
                'resources/assets/mobile-screens/1.jpeg',
                'resources/assets/mobile-screens/2.jpeg',
                'resources/assets/mobile-screens/3.jpeg',
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
