const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'syphon-bl': '#232658',
                'syphon-lt-bl': '#3B72A8',
                'syphon-dk-bl': '#001025',
                'anchor-ylw': '#EBB501',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    }, 

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
