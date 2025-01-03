import defaultTheme from 'tailwindcss/defaultTheme';

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                inter: ['Inter', ...defaultTheme.fontFamily.sans],
                rethink: ['Rethink Sans']
            },
            colors: {
                black: '#1E1E1E',
                white: '#F5F5F5',
                clifford: "#da373d",
                white: "#FFFFFF",
                black: "#1E1E1E",
                grey: "#F0F0F0",
                oldgrey: "#737373"
            }
        },
    },
};
