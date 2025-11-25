import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    // Tambahkan baris ini agar output Vite masuk ke public/
    build: {
        outDir: 'public/build', // atau 'public' jika ingin langsung di root public
    },
})