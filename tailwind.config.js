import preset from "./vendor/filament/support/tailwind.config.preset";
/** @type {import('tailwindcss').Config} */

export default {
    presets: [preset],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    theme: {
        fontFamily: {
            sans: ["Poppins", "ui-sans-serif", "system-ui"],
        },
        extend: {},
    },
    plugins: [
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms"),
    ],
};
