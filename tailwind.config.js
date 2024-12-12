import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import {gradients} from './resources/js/gradients.js';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'selector',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                mesh1: gradients.mesh1,
                mesh2: gradients.mesh2,
            },
        },
    },

    plugins: [forms],
};
