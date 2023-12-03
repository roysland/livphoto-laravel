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
});

git config --global user.email "roysland@gmail.com"
git config --global user.name "Øyvind Røysland"