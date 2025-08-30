import defaultTheme from 'tailwindcss/defaultTheme';

 module.exports = {
     presets: [
        require('./vendor/taba/crm/tailwind-preset.js'),require("./vendor/taba/crm/tailwind-preset.js")],
     content: [
         "./vendor/taba/crm/resources/views/**/*.blade.php", // Add crm views
     ],
     theme: {
         extend: {},
     },
     plugins: [],
 };
