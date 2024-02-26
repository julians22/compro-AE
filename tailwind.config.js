import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'red': {
                    '50': '#fff8f2',
                    '100': '#fff1e6',
                    '200': '#ffd8bf',
                    '300': '#ffb899',
                    '400': '#ff674d',
                    '500': '#fe0000',
                    '600': '#e60000',
                    '700': '#bf0000',
                    '800': '#990000',
                    '900': '#730000',
                    '950': '#4a0000'
                }
            }
        },
    },

    plugins: [forms, typography],
};
