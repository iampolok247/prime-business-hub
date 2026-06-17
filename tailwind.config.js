import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                brand: {
                    DEFAULT: '#008181',
                    hover: '#006666',
                    soft: '#e6f2f2',
                },
                black: '#000000',
                white: '#ffffff',
            },
            fontFamily: {
                heading: ['Poppins', ...defaultTheme.fontFamily.sans],
                body: ['"DM Sans"', ...defaultTheme.fontFamily.sans],
                sans: ['"DM Sans"', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
