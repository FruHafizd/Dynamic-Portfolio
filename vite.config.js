import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                'resources/js/app.js',
                'public/css/filament/forms/forms.css', 
                'public/css/filament/support/support.css',
                'public/css/filament/filament/app.css',],
            refresh: true,
        }),
    ],
});
