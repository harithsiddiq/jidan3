import plugin from "@tailwindcss/forms";
import defaultTheme from "tailwindcss/defaultTheme";
import { plugins } from "./vendor/taba/crm/tailwind-preset.js";
const { themeVariants } = require("tailwindcss-theme-variants");


module.exports = {
    presets: [require("./vendor/taba/crm/tailwind-preset.js")],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./resources/views/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./vendor/taba/crm/resources/views/**/*.blade.php", // Add crm views
    ],
    plugins: [
        themeVariants({
            themes: {
                light: {
                    selector: ".light-theme",
                },
                dark: {
                    selector: ".dark-theme",
                },
            },
        }),
    ],
};
