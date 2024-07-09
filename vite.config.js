import { defineConfig } from "vite";
import laravel, { refreshPaths } from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/js/app.js", "resources/js/hide-navbar.js"],
            refresh: [...refreshPaths, "app/Livewire/**"],
        }),
    ],
});
