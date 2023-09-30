import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/bundle.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    server: { 
        hmr: {
            host: 'localhost',
        },
    },
    resolve: {
        alias: {
            '@': '/resources/ts',
        },
    },
});
