/** @type {import('tailwindcss').Config} */

export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
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
