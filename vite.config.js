import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
      theme: {
        extend: {
          colors: {
            brand: '#ef3b2d',
            sidebar: '#121212',
            textlight: '#eaeaea',
            highlight: '#ef3b2d',
            cardbg: '#1c1c1c',
            headerbg: '#1a1a1a'
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          }
        }
      },

    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
