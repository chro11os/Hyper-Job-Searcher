import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
<<<<<<< HEAD
import tailwindcss from '@tailwindcss/vite';

/** @type {import('tailwindcss').Config} */
export default {
    plugins: [
        tailwindcss(),
    ], 
=======

/** @type {import('tailwindcss').Config} */
export default {
>>>>>>> a90516339e887e07aa9e54372340f1b9c3f23733
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
