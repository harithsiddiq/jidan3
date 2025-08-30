import defaultTheme from 'tailwindcss/defaultTheme';

 module.exports = {
     presets: [require("./laravel/vendor/taba/crm/tailwind-preset.js")],
    content: [
        "./laravel/app/Filament/**/*.php",
        "./laravel/resources/views/filament/**/*.blade.php",
        "./laravel/resources/views/**/*.blade.php",
        "./laravel/vendor/filament/**/*.blade.php",
        "./laravel/vendor/taba/crm/resources/views/**/*.blade.php", // Add crm views
    ],
 };
