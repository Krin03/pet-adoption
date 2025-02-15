import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',  // Your main CSS file (Tailwind)
                'resources/js/app.js',    // Your main JavaScript file
            ],
            refresh: true,  // Enables hot module replacement (HMR) on file changes
        }),
    ],
    // Optional: You can add additional configurations for optimization or handling assets
    build: {
        // Optimize the build output (optional)
        chunkSizeWarningLimit: 500,  // Adjust chunk size if needed
    },
    server: {
        // Optionally configure server settings if you need to proxy or adjust ports
        proxy: {
            '/app': 'http://localhost', // Proxy for Laravel (if needed)
        },
    },
});
